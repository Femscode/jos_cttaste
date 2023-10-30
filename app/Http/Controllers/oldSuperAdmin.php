<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SuperAdmin extends Controller
{
    //function for the super admin
    public function index() {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['users'] = $users = User::latest()->get();
            $data['admins'] = User::where('user_type','admin')->latest()->get();
           
         

            return view('superadmin.index',$data);
          
        }
        else {
            return redirect()->back();
        }

    }
    public function userprofile($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->user_type == 'admin') {
            $data['user'] = User::find($id);
            $data['active'] = 'userprofile';
            return view('superadmin.users',$data);
          
        }
        else {
            return redirect()->back();
        }

    }
    public function userfood($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->user_type == 'admin') {
            $user = User::find($id);
            $data['categories'] = Category::where('user_id',$user->id)->get();
            $data['foods'] = Food::where('user_id',$user->id)->get();
            $data['active'] = 'userfood';
            return view('superadmin.userfood',$data);
          
        }
        else {
            return redirect()->back();
        }
        
    }
    public function userorder($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->user_type == 'admin') {
            $data['user'] = $user = User::find($id);
            $data['orders'] = Order::where('user_id',$user->id)->get();
            $data['active'] = 'userorder';
            return view('superadmin.userorder',$data);
          
        }
        else {
            return redirect()->back();
        }
        
    }

    public function makevendor($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          $user = User::find($id);
          $user->user_type = 'vendor';
          $user->save();
          return redirect()->back()->with('message','User has been made vendor successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }

    public function makeadmin($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          $user = User::find($id);
          $user->user_type = 'admin';
          $user->save();
          return redirect()->back()->with('message','User has been made vendor successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }
    public function approveuser($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          $user = User::find($id);
          $user->approve = 1;
          $user->save();
          return redirect()->back()->with('message','User has been approved successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }
    public function disable($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->user_type == 'admin') {
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

    public function disapproveuser($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          $user = User::find($id);
          $user->approve = 0;
          $user->save();
          return redirect()->back()->with('message','User has been dissaproved successfully!');
          
        }
        else {
            return redirect()->back();
        }

    }
    public function assignadmin(Request $request) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          
            $user = User::find($request->user_id);
            $user->assigned = $request->admin_id;
            $user->save();
            return $user;
          
        }
        else {
            return redirect()->back();
        }

    }
    public function deleteuser($id) {
        if(Auth::user()->email == 'fasanyafemi@gmail.com') {
          
            $user = User::find($id);
            $user->delete();
            return redirect()->back()->with('message','User deleted successfully');
            
        }
        else {
            return redirect()->back();
        }

    }
    // route for the admin
    public function admindashboard() {
        if(Auth::user()->user_type == 'admin') {
          
            $data['users'] = $users = User::where('assigned',Auth::user()->name)->latest()->get();
            $data['admins'] = User::where('user_type','admin')->latest()->get();
           
         

            return view('admin.index',$data);
          
        }
        else {
            return redirect()->back();
        }


    }
}
