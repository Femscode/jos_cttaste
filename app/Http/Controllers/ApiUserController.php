<?php

namespace App\Http\Controllers;
use App\Models\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CreateCategory;
use App\Models\User;
use App\Models\Order;
use App\Models\Food;
use App\Models\Category;
use App\Models\FoodImage;
use Compressor;

class ApiUserController extends Controller
{
    use CreateCategory;
    function index() {
        
        $data['user'] = $user = Auth::user();
        if($user->user_type == 'admin') {
        $data['restaurants'] = User::where('assigned',$user->id)->latest()->get();
        $uu = User::where('assigned',$user->id)->latest()->pluck('id');
        $data['orders'] = Order::whereIn('user_id',$uu)->get();
       
        $data['foods'] = Food::whereIn('user_id',$uu)->get();
        return view('api.index',$data);
        } else {
            return redirect()->route('home');
        }

    }
    public function manager_profile() {
        $data['user'] = Auth::user();
        return view('api.profile',$data);
    }
    public function createrestaurant() {
        $data['user'] = Auth::user();
        $data['address'] = Town::get();
        return view('api.create',$data);
    }
    public function saverestaurant(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => 'required',
            'restaurant_category' => 'required',
            'selections' => 'required',
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'image' => 'required'
        ]);
        $user = Auth::user();
        $email = $user->email;
        $assigned = $user->id;
        $password = $user->password;
        $image = $request->image;
                $imagename = $image->hashName();
                $img = Compressor::make($image->path());
                $good = $img->resize(250, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('profilePic') . '/' . $imagename);
        // dd($request->all(),$email,$password);

        $user = User::create([
            'name' => $request->name,
            'slug' => ucwords(str_replace(' ','',$request->name)),
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'school' => $request->school,
            'user_type' => 'api_vendor',
            'assigned' => $assigned,
            'opening_hour' => $request->opening_hour,
            'closing_hour' => $request->closing_hour,
            'restaurant_category' => $request->restaurant_category,
            'password' => $password,
            'image' => $imagename
           
        ]);
       
        // event(new Registered($user));
       
        $this->create_category_api($user->id,$request->selections);
       
        return redirect()->route('managers')->with('message','Restaurant Created Successfully');
       
        
    }
    public function viewrestaurant($id) {
        $data['user'] = Auth::user();
        $data['vendor'] = User::find($id);
        $data['address'] = Town::get();
        return view('api.view',$data);
    }
    public function updaterestaurant(Request $request) {
        $user = User::where('id',$request->id)->first();
        $normalImage = $user->image;
       
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->opening_hour = $request->opening_hour;
        $user->closing_hour = $request->closing_hour;
        if($request->has('image')) {
            $pathname = public_path() . '/profilePic/' . $normalImage;
            // dd(strlen($food->image));
            if (file_exists($pathname)) {
                unlink($pathname);
            }


                $image = $request->image;
                $imagename = $image->hashName();
                $img = Compressor::make($image->path());
                $good = $img->resize(250, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('profilePic') . '/' . $imagename);
        }
        $user->save();
        return redirect()->route('managers')->with('message','Restaurant Updated Successfully');

     
    }
    public function deleterestaurant($id) {
        $user = User::find($id);
         $food = Food::where('user_id',$user->id)->delete();
             $categories = Category::where('user_id',$user->id)->delete();
        $user->delete();
        return redirect()->back()->with('message','Restaurant Deleted Successfully');

    }
    public function userorder($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
            $data['user'] = $user = User::find($id);
            $data['orders'] = Order::where('user_id',$user->id)->get();
            $data['active'] = 'this';
            return view('api.userorder',$data);
          
        }
        else {
            return redirect()->back();
        }
        
    }
    public function orderdetails($id)
    {
        $data['order'] = $order = Order::find($id);
        $data['carts'] = unserialize($order->cart);
        $data['active'] = 'orders';
        $data['user'] = Auth::user();
        return view('api.orderdetails', $data);
    }
    public function disable($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
            $data['user'] = $user = User::find($id);
            if($user->availability == 1) {
                $user->availability = 0;
                $user->save();
            }
            else {
                $user->availability = 1;
                $user->save();

            }
           return redirect()->back()->with('message','Account Disabled successfully');
          
        }
        else {
            return redirect()->back();
        }
        
    }
    public function approveuser($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
          $user = User::find($id);
          $user->approve = 1;
          $user->save();
          return redirect()->back()->with('message','User has been approved successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }

    public function disapproveuser($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
          $user = User::find($id);
          $user->approve = 0;
          $user->save();
          return redirect()->back()->with('message','User has been dissaproved successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }
    public function userprofile($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
            $data['user'] = User::find($id);
            $data['active'] = 'this';
            return view('api.users',$data);
          
        }
        else {
            return redirect()->back();
        }

    }
    public function manager_createfood(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);
        // dd($request->all());
        $check = Food::where('name', $request->name)->where('category_id', $request->category_id)->where('user_id', $request->user_id)->get();
        if ($check->isEmpty()) {

            if ($request->has('image') && $request->selectedimage == null) {
                $image = $request->image;
                $imagename = $image->hashName();
                $img = Compressor::make($image->path());
                $good = $img->resize(250, 150, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('foodimages') . '/' . $imagename);
                $category = Category::where('id',$request->category_id)->first()->name;
               
                FoodImage::create(['category'=>$category,'image'=>$imagename]);
                $food =  Food::create([
                    'user_id' => $request->user_id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $imagename
                ]);
            } elseif ($request->selectedimage !== null) {
                $food =  Food::create([
                    'user_id' => $request->user_id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $request->selectedimage
                ]);
            } else {
                $food =  Food::create([
                    'user_id' => $request->user_id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                ]);
            }
            return $food;
          
        }
    }
    public function userfood($id) {
        $user = User::find($id)->assigned;
        $access = User::where('id',$user)->first();
       
        if( $access !== null) {
            $data['vendor'] = $user = User::find($id);
            $data['categories'] = Category::where('user_id',$user->id)->orderBy('rank','asc')->get();
            $data['foods'] = Food::where('user_id',$user->id)->orderBy('rank','asc')->get();
            $data['user'] = Auth::user();

            $data['foodimages'] = FoodImage::latest()->get();

            return view('api.userfood',$data);
          
        }
        else {
            return redirect()->route('managers');
        }
        
    }
    
}
