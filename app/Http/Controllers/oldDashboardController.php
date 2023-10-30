<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Food;
use App\Models\Delivery;

use App\Models\FoodImage;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $data['user'] = $user = Auth::user();
        $data['categories'] = Category::where('user_id',$user->id)->orderBy('rank','asc')->get();
        $data['foods'] = Food::where('user_id',$user->id)->orderBy('rank','asc')->get();
        $data['orders'] = Order::where('user_id',$user->id)->latest()->limit(5)->get();
        $data['foodimages'] = FoodImage::latest()->get();
        $delivery = Delivery::where('user_id',$user->id)->get();
        if($delivery->isEmpty()) {
           $data['delivery'] = $dd = Delivery::where('user_id',0)->first();
           
        }
        else {
           $data['delivery'] = Delivery::where('user_id',$user->id)->first();
        }
      
        $data['active'] = 'dashboard';
      
        return view('backend.dashboard',$data);
    }
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
      public function set_pack_price(Request $request) {
        $user = Auth::user();
        $this->validate($request,[
            'pack_fee' => 'required',
            'pack_limit' => 'required'
        ]);
        if($request->pack_limit > 15) {
            return false;
        }
        else {
            $user->pack_limit = $request->pack_limit;
            $user->pack_fee = $request->pack_fee;
            $user->save();
            return true;
        }
       
    }
    
    public function set_delivery_price(Request $request) {
        $user = Auth::user();
        $this->validate($request,[
            'labuta' => 'required',
            'harmony' => 'required',
            'kofesu' => 'required',
            'accord' => 'required',
            'zoo' => 'required',
            'user_id' => 'required',
            'camp_ilupeju' => 'required',
            'camp_surulere' => 'required',
            'camp_fatola' => 'required',
            'ashero' => 'required',
        ]);
        $delivery = Delivery::where('user_id',$request->user_id)->get();

        if($delivery->isEmpty()) {
           Delivery::create($request->all());
        }
        else {
           $delivery[0]->update($request->all());
        }
        return true;
    }
}
