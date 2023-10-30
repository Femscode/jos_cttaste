<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\Rider;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\FoodImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MergeDelivery;
use Minishlink\WebPush\VAPID;
use Minishlink\WebPush\WebPush;
use App\Models\DeliveryLocation;
use App\Models\PushSubscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Minishlink\WebPush\Subscription;

class DashboardController extends Controller
{
    public function store_subscription(Request $request)
    {
        // dd($request->all());
        $subscription = new PushSubscription();
        // $subscription->endpoint = $request->input('endpoint');
        // $subscription->keys = $request->input('keys');
        $subscription->body = $request->input('body');
        $subscription->save();

        return response()->json(['message' => 'Subscription stored successfully']);
    }
    public function run_push()
    {

     
        
        $pushPayload = json_encode(['title' => 'New Message', 'body' => 'You have a new message.']);
        $subscriptions = PushSubscription::all();
        // dd($subscriptions);
        $auth = array(
            'VAPID' => array(
                'subject' => 'mailto:fasanyafemi@gmail.com',
                'publicKey' => 'BCm62P3G0TsxkbRYeKkEWcqvLRvPWW-8s1kbW2yu6ICPPvq0x9buugsANGYHVvV75gJGCLwnHOzAAaL3fNqe97k', // don't forget that your public key also lives in app.js
                'privateKey' => '0fjJM0bUAU5eWpgU_aQmx0Um5MQwVX-a31bxjdu2-Mk', // in the real world, this would be in a secret file
            ),
        );

        $webPush = new WebPush($auth);
        foreach ($subscriptions as $subscriber) {
            $sub = json_decode($subscriber->body, true);
            // dd($subscriber,$sub,);
            $subscription = Subscription::create([
                'endpoint' => $sub['endpoint'],
                'keys' => [
                    'p256dh' => $sub['keys']['p256dh'],
                    'auth' =>  $sub['keys']['auth'],
                ],           
              
            ]);
            // dd($subscription);

            $not = $webPush->queueNotification($subscription, $pushPayload);
            // $not = $webPush->sendOneNotification($subscription, $pushPayload);
            
        }
        foreach ($webPush->flush() as $report) {
            $endpoint = $report->getRequest()->getUri()->__toString();
        
            if ($report->isSuccess()) {
                echo "Message sent successfully for subscription {$endpoint}.<br>";
            } else {
                echo "Message failed to sent for subscription {$endpoint}: {$report->getReason()}<br>";
            }
        }
        // $webPush->flush();
    }
    public function index()
    {
        $data['user'] = $user = Auth::user();
      
        $data['categories'] = Category::where('user_id', $user->id)->orderBy('rank', 'asc')->get();
        $data['foods'] = Food::where('user_id', $user->id)->orderBy('rank', 'asc')->get();
        $data['orders'] = Order::where('user_id', $user->id)->whereBetween('created_at', [Carbon::today(), Carbon::today()->addDay()])->latest()->get();

        $startOfWeekLastWeek = Carbon::now()->subWeek()->startOfWeek(); // Get the start of last week's Monday
        $endOfWeekThisWeek = Carbon::now()->startOfWeek(); // Get the start of this week's Monday
        $data['last_week_orders'] = Order::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfWeekLastWeek, $endOfWeekThisWeek])
            ->latest()
            ->get();

        $startDateLastMonth = Carbon::now()->subMonth()->startOfMonth(); // Get the start of last month
        $endDateLastMonth = Carbon::now()->subMonth()->endOfMonth();     // Get the end of last month

        $data['last_month_orders'] = Order::where('user_id', $user->id)->whereBetween('created_at', [$startDateLastMonth, $endDateLastMonth])
            ->get();


        $data['foodimages'] = FoodImage::latest()->get();

        $data['deliveries'] = DeliveryLocation::where('user_id', $user->id)->get();

        $data['active'] = 'dashboard';

        if ($user->user_type == 'admin') {
            return redirect()->route('managers');
        } elseif ($user->user_type == 'logistic') {
            $data['deliveries'] = DeliveryLocation::where('user_id', $user->id)->get();

            $data['active'] = 'dashboard';

            $data['deliveries'] = Delivery::where('restaurant_id', $user->vendor_id)->latest()->get();
            $data['pending_deliveries'] = Delivery::where('restaurant_id', $user->vendor_id)->where('status', 2)->get();
            $data['completed_deliveries'] = Delivery::where('restaurant_id', $user->vendor_id)->where('status', 1)->get();

            return view('newdashboard.logistic', $data);
        } else {
            return view('newdashboard.index', $data);
        }
    }
    public function delivery_location()
    {
        $data['user'] = $user = Auth::user();
        $data['categories'] = Category::where('user_id', $user->id)->orderBy('rank', 'asc')->get();
        $data['foods'] = Food::where('user_id', $user->id)->orderBy('rank', 'asc')->get();
        $data['orders'] = Order::where('user_id', $user->id)->latest()->limit(5)->get();
        $data['foodimages'] = FoodImage::latest()->get();
        $data['deliveries'] = DeliveryLocation::where('user_id', $user->id)->get();
        $data['active'] = 'dashboard';
        if ($user->user_type == 'admin') {
            return redirect()->route('managers');
        } else {
            return view('newdashboard.delivery_location', $data);
            return view('backend.dashboard', $data);
        }
    }
    public function deletelocation(Request $req)
    {
        $the = DeliveryLocation::find($req->val)->delete();
        return true;
    }
    public function set_delivery_price(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'user_id' => 'required',
            'location_name' => 'required',
            'location_price' => 'required',

        ]);
        $check = DeliveryLocation::where('user_id', $user->id)->where('name', $request->location_name)->first();

        $data['name'] = $request->location_name;
        $data['user_id'] = $user->id;
        $data['price'] = $request->location_price;
        // dd($data);

        if ($check == null) {
            $location = DeliveryLocation::create($data);
            return $location;
        } else {
            return false;
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function set_pack_price(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'pack_fee' => 'required',
            'pack_limit' => 'required'
        ]);
        if ($request->pack_limit > 15) {
            return false;
        } else {
            $user->pack_limit = $request->pack_limit;
            $user->pack_fee = $request->pack_fee;
            $user->save();
            return true;
        }
    }

    public function set_group_link(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'group_link' => 'required',

        ]);

        $user->internal_group_link = $request->group_link;

        $user->save();
        return true;
    }
    //here is the beginning of the delivery functionality
    public function delivery_tracking()
    {
        $data['user'] = $user = Auth::user();
        $data['deliveries'] = DeliveryLocation::where('user_id', $user->id)->get();

        $data['active'] = 'dashboard';
        $data['riders'] = Rider::where('restaurant_id', $user->id)->get();

        $data['deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', '!=', 1)->latest()->get();
        $data['pending_deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', 0)->get();
        $data['completed_deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', 1)->get();

        if ($user->tracking_type == 'automatic') {
            return view('newdashboard.delivery_vendor_automatic', $data);
        } else {
            return view('newdashboard.delivery_vendor', $data);
        }
    }
    public function tracking_type(Request $request)
    {
        $user = Auth::user();
        if ($request->tracking_type == 'manual') {
            $user->tracking_type = 'manual';
            $user->save();
            return 'manual';
        } else {
            $user->tracking_type = 'automatic';
            $user->save();
            return 'automatic';
        }
    }
    public function track_order($order_id)
    {
        $data['user'] = $user = Auth::user();
        $data['order'] = $order = Order::where('order_id', $order_id)->first();
        $data['delivery'] = $dd = Delivery::where('order_id', $order->id)->first();

        if ($user == null) {

            if ($dd && $dd->restaurant->tracking_type == 'manual') {
                return view('frontend.track_order', $data);
            } else {
                return view('frontend.automatic_track_order', $data);
            }
        } elseif ($user->id !== $order->user_id) {
            if ($dd && $dd->restaurant->tracking_type == 'manual') {
                return view('frontend.track_order', $data);
            } else {
                return view('frontend.automatic_track_order', $data);
            }
        } else {
            $check_delivery = Delivery::where('order_id', $order->id)->first();
            if ($check_delivery == null) {
                $uuid = Str::uuid();

                $data['delivery'] = $delivery = Delivery::create([
                    'restaurant_id' => $user->id,
                    'uuid' => $uuid,
                    'order_id' => $order->id,
                    'delivery_price' => $order->delivery_amount,
                    'order_from' => $user->address,
                    'order_to' => $order->location,
                    'address' => $order->address,
                    'customer_name' => $order->name,
                ]);
                if ($user->tracking_type == 'automatic') {
                    $current = time();
                    $request_time =  date('H:i', $current);
                    $delivery->request_time = $request_time;

                    // Add 15 minutes to the current time to get the next 15 minutes
                    $pick_up_time = $current + (intval($user->tracking_time / 3) * 60);
                    $delivery->pick_up_time = date('H:i', $pick_up_time);
                    $delivery_time = $current + ($user->tracking_time * 60);
                    $delivery->delivery_time = date('H:i', $delivery_time);

                    $delivery->rider_name = $user->name . "'s bikeman";
                    $delivery->rider_phone = $user->phone;
                    $delivery->status = 0;
                    $delivery->save();
                }
            }

            $data['active'] = 'dashboard';
            $data['riders'] = Rider::where('restaurant_id', $user->id)->get();

            $data['deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', '!=', 1)->latest()->get();
            $data['pending_deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', 0)->get();
            $data['completed_deliveries'] = Delivery::where('restaurant_id', $user->id)->where('status', 1)->get();



            // dd($user);
            if ($user->tracking_type == 'manual') {
                return view('frontend.vendor_manual_track_order', $data);
            } else {
                return view('frontend.vendor_automatic_track_order', $data);
            }
        }
    }
    public function mark_complete(Request $request)
    {
        $delivery = Delivery::where('uuid', $request->id)->first();
        if ($delivery->merge_status == 1) {

            $delivery->status = 1;
            $delivery->delivery_time = Carbon::now();
            $delivery->save();
            return true;
        } elseif ($delivery->status == 1) {
            return false;
        } elseif ($delivery->restaurant->tracking_type == 'automatic') {
            $delivery->status = 1;
            $delivery->delivery_time = Carbon::now();
            $delivery->save();
            return true;
            return redirect()->back()->with('message', 'Delivery Status Updated');
        } else {
            return false;
            return redirect()->back()->with('error', 'Cannot complete order without merging!');
        }
        return $delivery;
    }

    public function delete_delivery(Request $request)
    {
        $delivery = Delivery::where('uuid', $request->id)->first();
        if ($delivery->merge_status == 1) {


            return false;
        } else {
            $delivery->delete();
            return true;
            return redirect()->back()->with('error', 'Cannot complete order without merging!');
        }
        return $delivery;
    }
    public function confirm_payment(Request $request)
    {
        $delivery = Delivery::where('uuid', $request->id)->first();
        // dd($delivery);
        if ($delivery->status == 3) {
            $delivery->status = 2;
            $delivery->merge_status = 0;
            $delivery->request_time = null;
            $delivery->pick_up_time = null;
            $delivery->delivery_time = null;
            $delivery->save();
            return true;

            return redirect()->route('today_orders')->with('success', 'Payment Denied Successfully!');
        } else {
            $delivery->status = 3;
            $delivery->merge_status = 0;
            $delivery->save();
            return false;
            return redirect()->back()->with('error', 'Payment cannot be denied after assigning a rider!');
        }

        return $delivery;
    }

    public function cancel_order(Request $request)
    {
        $delivery = Delivery::where('uuid', $request->id)->first();
        // dd($delivery);
        if ($delivery->rejected == 0) {
            $delivery->rejected = 1;
            $current = time();
            $request_time =  date('H:i', $current);
            $delivery->pick_up_time = null;
            $delivery->delivery_time = null;
            $delivery->rider_name = null;
            $delivery->rider_phone = null;
            $delivery->save();
            return true;

            return redirect()->route('today_orders')->with('success', 'Payment Denied Successfully!');
        } else {
            $delivery->rejected = 0;
            $current = time();
            $request_time =  date('H:i', $current);
            $delivery->request_time = $request_time;

            // Add 15 minutes to the current time to get the next 15 minutes
            $pick_up_time = $current + (intval($delivery->restaurant->tracking_time / 3) * 60);
            $delivery->pick_up_time = date('H:i', $pick_up_time);
            $delivery_time = $current + ($delivery->restaurant->tracking_time * 60);
            $delivery->delivery_time = date('H:i', $delivery_time);
            $delivery->rider_name = $delivery->restaurant->name . "'s bikeman";
            $delivery->rider_phone = $delivery->restaurant->phone;
            $delivery->save();
            return false;
            return redirect()->back()->with('error', 'Payment cannot be denied after assigning a rider!');
        }

        return $delivery;
    }

    public function merge_order(Request $request)
    {

        $myArray = explode(",", $request->deliveries);

        $rider = Rider::find($request->rider_id);
        DB::beginTransaction();
        $rider->count += 1;
        $rider->save();
        $real_status = true;
        // No.1, Rider's fee should be added onces and the count
        // There should be a model that records all of the rider's record at each point
        // where the rider record is cleared.
        // Another thing is the mobile view, try and make it easy to merge from the mobile view
        // 


        foreach ($myArray as $item) {
            $delivery = Delivery::find($item);
            if ($delivery->merge_status == 1) {
                DB::rollback();
                return array(false, $delivery);
            } else {

                $delivery->merge_status = 1;
                // $delivery->merge_id = $merge->id;
                $delivery->rider_id = $rider->id;
                $delivery->rider_name = $rider->name;
                $delivery->rider_phone = $rider->phone;
                $delivery->status = 0;
                $delivery->pick_up_time = Carbon::now();
                $delivery->save();
                $rider->amount += $delivery->delivery_price;
                $rider->save();
            }
        }
        DB::commit();
        if ($rider->id !== 1) {

            return array(true, $delivery);
        } else {
            $delivery->pick_up_time = null;
            $delivery->save();
            return array('cttaste', $delivery);
        }
    }
    public function add_rider(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $rider = Rider::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'restaurant_id' => $user->id
        ]);
        return $rider;
    }
    public function delete_rider(Request $request)
    {
        $id = $request->id;
        // dd($request->all());
        $user = Auth::user();
        $rider = Rider::find($id);
        $rider->delete();
        return true;
    }
    public function cttaste_delivery($id)
    {
        // dd($id);
        $delivery = Delivery::where('uuid', $id)->first();
        $order = Order::find($delivery->order_id);
        return redirect()->away('https://wa.me/234' . substr($delivery->rider_phone, 1) . '?text=*DELIVERY%20%20REQUEST%20FROM%20' . $order->user->name . '*%20%0a%0a*DELIVER%20DETAILS*%0aDelivery%20ID%20:%20' . $delivery->order_id . '%0a-------------%0a*DELIVERY%20PRICE%20:%20NGN' . $delivery->delivery_price . '*%0a*DELIVERY%20ADDRESS%20:%20' . $delivery->order_to . '-' . $delivery->address . '*%0a------*CUSTOMER%20DETAILS*------%0aName%20:%20' . $order->name . '%0aPhone%20number%20:%20' . $order->phone . '*%0a------*CONFIRM%20PICKUP*------%0ahttps://cttaste.com/confirm_pickup/' . $delivery->uuid);


        dd($delivery, $order);
    }
    public function confirm_pickup($id)
    {
        $delivery = Delivery::where('uuid', $id)->first();
        $delivery->pick_up_time = Carbon::now();
        $delivery->save();
        return "Order Picked Up";
    }
    public function clear_rider()
    {
        $user = Auth::user();
        $riders = Rider::where('restaurant_id', $user->id)->get();
        foreach ($riders as $rider) {
            $rider->count = 0;
            $rider->amount = 0;
            $rider->save();
        }
        return true;
    }
    public function update_tracking_time(Request $request)
    {
        $this->validate($request, ['tracking_time' => 'required|numeric|min:10']);
        $user = Auth::user();
        $user->tracking_time = $request->tracking_time;
        $user->save();
        return true;
    }
    public function change_delivery_status($id)
    {
        if (Auth::user()->email !== 'fasanyafemi@gmail.com') {
            return redirect()->back()->with('message', 'Permission Denied');
        }
        $user = User::find($id);
        if ($user->delivery_status == 0) {
            $user->delivery_status = 1;
            $user->save();
            $check = Rider::where('name', 'CT-TASTE DELIVERY')->where('restaurant_id', $user->id)->first();
            if ($check == null) {
                $rider = Rider::create([
                    'name' => 'CT-TASTE DELIVERY',
                    'phone' => '09058744473',
                    'restaurant_id' => $user->id
                ]);
            }
            return redirect()->back()->with('message', 'Delivery Status Activated!');
        }
        $user->delivery_status = 0;
        $user->save();
        return redirect()->back()->with('message', 'Delivery Status De-activated!');
    }
}
