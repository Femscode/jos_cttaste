<?php

namespace App\Http\Controllers;
use DateTime;
use \Carbon\Carbon;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function records() {
        $data['orders'] = $orders = Order::where('user_id', Auth::user()->id)->latest()->get();
        $data['foods'] = $pro = Food::where('user_id',Auth::user()->id)->get();
        $products = [];
        $tt = 0;
        //this will get all the products in one array stored in product variable
        foreach($orders as $order) {
            $tt += $order->total_price;
            $pro1 =  unserialize($order->cart);
            foreach($pro1->items as $pro) {
                  array_push($products,$pro);
            }
        }
        //the tt contains the total sum of all orders
        $data['total_sales'] = $tt;
        $foods = [];
        $data['food'] = $food = collect($products)->groupBy('name');
        //this will sum the quatity of a particular product and put it inside an array, ff->first for taking just one of each product
        foreach($food as $ff) {
            $k = $ff->sum('qty');
            array_push($foods,[$ff->first(),$k]);
        }
        //this performs the sorting by using sortBy and reverse.
        $foodie = collect($foods)->sortBy(1)->reverse();
       
        $data['foods'] = $foodie;
        $data['active'] = 'records';
     
        return view('backend.record', $data);
       
    }
    public function checkout(Request $request,$fee)
    {
        if (session()->has('cart')) {
            $data['carts'] =  $cart = new Cart(session()->get('cart'));
        } else {
            $data['carts'] = $cart = null;
        }
        // dd($cart->items);
        $user = User::find($cart->restaurant);
       

        $admin = User::where('name', $user->assigned)->first();
        for ($i = 0; $i < 15; $i++) {
            $pack[$i] = [];
            foreach ($cart->items as $item) {
              
              
              if (in_array($i, $item['plate'])) {
                    // $f_u = Food::find($item['id']);
                    // $f_u->quantity -= $item['qty'];
                    // $f_u->save();
                    $tmp = array_count_values($item['plate']);
                    $cnt = $tmp[$i];

                    $item['qty'] = $cnt;
                    unset($item['plate']);
                    unset($item['id']);
                    unset($item['price']);
                    unset($item['image']);
                    array_push($pack[$i], $item);
                }
            }
        }
      
        $agba = [];
        for ($j = 1; $j <= 15; $j++) {
            if (session()->has('pack[' . $j . ']')) {
               
            $data['pack' . $j . ''] = $pack[$j];
            array_push($agba, ['pack' . $j . '' => $pack[$j]]);
            }
        }
    
        $firi = json_encode($agba);
        $therest = str_replace(['{','::','id','"','pack0','[',']','name:',',',':'], '', $firi);
        // $therest2 = str_replace('}', '%0a--�--%0a', $therest);
        $therest2 = str_replace('}', '%0a', $therest);
        $pack1 = str_replace('pack1', 'PACK1%0a--�--%0a', $therest2);
        $pack2 = str_replace('pack2', 'PACK2%0a--�--%0a', $pack1);
        $pack3 = str_replace('pack3', 'PACK3%0a--�--%0a', $pack2);
        $pack4 = str_replace('pack4', 'PACK4%0a--�--%0a', $pack3);
        $pack5 = str_replace('pack5', 'PACK5%0a--�--%0a', $pack4);
        $pack6 = str_replace('pack6', 'PACK6%0a--�--%0a', $pack5);
        $pack7 = str_replace('pack7', 'PACK7%0a--�--%0a', $pack6);
        $pack8 = str_replace('pack8', 'PACK8%0a--�--%0a', $pack7);
        $pack9 = str_replace('pack9', 'PACK9%0a--�--%0a', $pack8);
        $pack10 = str_replace('pack10', 'PACK10%0a--�--%0a', $pack9);
       
        $packs = str_replace('qty', ' | qty:', $pack9);
        
        // dd($packs,json_encode($data['pack1']), $data,session()->all());

        // dd($admin);

        // $number = substr($admin->phone,1);
         $delivery_amount = $request->delivery_amount;
        Order::create([
            'user_id' => $cart->restaurant,
            'order_id' => substr(str_shuffle("012ABCD3456EFGHIJKLMNOP7890ZXVNM"),0,4),
            'name' => $request->name,
            'phone' => $request->phone,
            'location' => $request->location,
            'address' => $request->address,
            'name' => $request->name,
            'quantity' => $cart->totalQty,
            'delivery_amount' => $delivery_amount,
            'total_price' => $cart->totalPrice+intval($fee),
            'cart' => serialize(session()->get('cart')),
        ]);
       
        if($user->id == 53 || $user->id == 38) {
            $f_price = $cart->totalPrice+intval($fee)+intval($delivery_amount)+50;
            $d_price = intval($request->delivery_amount);
            $s_price = $cart->totalPrice+intval($fee)+50;
        }
        else {
            $f_price = $cart->totalPrice+intval($fee)+intval($delivery_amount);
            $d_price = intval($request->delivery_amount);
            $s_price = $cart->totalPrice+intval($fee);
        }
      
        
        return redirect()->away('https://wa.me/234' . substr($user->phone,1) . '?text=*ORDER%20%20FROM%20CTTASTE*%20%0a%0a*ORDER%20DETAILS*%0a--�--%0a' . $packs . '%0a*SUB%20TOTAL→₦' . $s_price. '*%0a*DELIVERY%20PRICE→₦' . $d_price. '*%0a*TOTAL%20PRICE→₦' . $f_price. '*%0a------*CUSTOMER%20DETAILS*------%0aName→' . $request->name . '%0aLocation→' . $request->location . '%0aAddress→' . $request->address . '%0aPhone%20number→' . $request->phone . '%0a(Input%20other%20message%20here)%20');


 
    }
    public function userorder()
    {
        $data['orders'] = $order = Order::where('user_id', Auth::user()->id)->latest()->get();
        // dd(unserialize($order[0]->cart));
        $data['active'] = 'orders';
        return view('backend.order', $data);
    }
    public function orderdetails($id)
    {
        $data['order'] = $order = Order::find($id);
        $data['carts'] = unserialize($order->cart);
        $data['active'] = 'orders';
        return view('backend.orderdetails', $data);
    }
    
    public function record_day(Request $request) {
        if($request->has('rest_id')) {
            $user = User::find($request->rest_id);
        }
        else {
            $user = Auth::user();

        }
       if($request->val == 'today') {
        $today = new  DateTime('today');
        $orders = Order::where('user_id',$user->id)->whereDay('created_at', $today)->get();
        return $orders;

       }
       elseif($request->val == 'yesterday') {
        $today = new  DateTime('yesterday');
        $orders = Order::where('user_id',$user->id)->whereDay('created_at', $today)->get();
        return $orders;

       }
       elseif($request->val == 'week') {
   
        $orders = Order::where('user_id',$user->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return $orders;

       }
       elseif($request->val == 'month') {
        $today = date('m');
        $orders = Order::where('user_id',$user->id)->whereMonth('created_at', $today)->get();
        return $orders;

       }
       else {
        $today = date('Y');
        $orders = Order::where('user_id',$user->id)->whereYear('created_at', $today)->get();
        return $orders;
       }
    }
}
