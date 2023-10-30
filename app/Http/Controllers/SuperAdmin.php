<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Food;
use App\Models\User;
use App\Models\Order;
use App\Models\Review;
use App\Models\Category;
use App\Models\Discount;
use App\Models\FoodImage;
use App\Models\Transaction;
use App\Models\WorkingHour;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DiscountedUser;
use Illuminate\Support\Facades\Auth;

class SuperAdmin extends Controller
{
    //function for the super admin
    public function index()
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['users'] = $users = User::latest()->get();
            $data['active'] = 'this';
            $data['admins'] = User::where('user_type', 'admin')->latest()->get();
            return view('superadmin.index', $data);
        } else {
            return redirect()->back();
        }
    }
    public function view_transaction($id)
    {
        $data['user'] = User::find($id);
        $data['transactions'] = Transaction::where('rest_id', $id)->latest()->get();
        return view('superadmin.transaction', $data);
    }
    public function block_user($id)
    {
        $user = User::find($id);
        if ($user->block == 1) {
            $user->block = 0;
        } else {
            $user->block = 1;
        }

        $user->save();
        return redirect()->back()->with('message', "User blocked successfully!");
    }
    public function mark_paid($id)
    {
        $user = User::find($id);
        if ($user->payment_status == 1) {
            $user->payment_status = 0;
        } else {
            $user->payment_status = 1;
            $user->last_paid = Carbon::today();
        }

        $user->save();
        return redirect()->back()->with('message', "User payment status updated successfully!");
    }
    public function vendor()
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['users'] = $users = User::orderBy('balance', 'desc')->get();
            $data['user'] = Auth::user();
            $data['total_amount'] = User::get()->sum('balance');
            $data['active'] = 'this';
            $data['admins'] = User::where('user_type', 'admin')->latest()->get();
            return view('superadmin.vendor', $data);
        } else {
            return redirect()->back();
        }
    }

    public function superadmin()
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->email == 'awealexander7@gmail.com' || Auth::user()->email == 'omiloblessing@gmail.com' || Auth::user()->email == 'oseniowolabi247@gmail.com') {

            $data['users'] = $users = User::latest()->get();
            $data['active'] = 'this';
            $data['admins'] = User::where('user_type', 'admin')->latest()->get();



            return view('superadmin.manager', $data);
        } else {
            return redirect()->back();
        }
    }
    public function vendor_order($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com' || Auth::user()->email == 'awealexander7@gmail.com' || Auth::user()->email == 'omiloblessing@gmail.com' || Auth::user()->email == 'oseniowolabi247@gmail.com') {
            $data['user'] = $user = User::find($id);
            $data['orders'] = Order::where('user_id', $user->id)->latest()->paginate(50);
            $data['mycount'] = Count(Order::where('user_id', $user->id)->latest()->get());
            $data['active'] = 'this';
            return view('superadmin.managerorder', $data);
        } else {
            return redirect()->back();
        }
    }
    public function discount()
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {

            $data['active'] = 'this';
            $data['discount'] = Discount::find(1);
            $data['admins'] = User::where('user_type', 'admin')->latest()->get();
            $data['users'] = $users = DiscountedUser::latest()->get();

            return view('superadmin.discount', $data);
        } else {
            return redirect()->back();
        }
    }
    public function update_discount_unit(Request $request)
    {

        $discount = Discount::find(1);
        $discount->promo = $request->discount;
        if ($request->has('sponsor')) {
            $discount->sponsor = $request->sponsor;
        }
        $discount->save();
        return redirect()->back()->with('message', 'Discounted price updated successfully');
    }
    public function userprofile($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['user'] = User::find($id);
            $data['active'] = 'this';
            return view('superadmin.users', $data);
        } else {
            return redirect()->back();
        }
    }
    public function userfood($id)
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['user'] = Auth::user();
            $data['vendor'] = $user = User::find($id);
            $data['categories'] = Category::where('user_id', $user->id)->get();
            $data['foods'] = Food::where('user_id', $user->id)->get();
            $data['active'] = 'this';
            $data['foodimages'] = FoodImage::latest()->get();
            return view('superadmin.userfood', $data);
        } else {
            return redirect()->back();
        }
    }
    public function superworking_hours($id)
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['user'] = Auth::user();
            $data['vendor'] = $user = User::find($id);

            $data['active'] = 'profile';
            $data['working_hours'] = WorkingHour::where('vendor_id', $user->id)->get();
            return view('superadmin.super_working_hours', $data);
        } else {
            return redirect()->back();
        }
    }
    public function checkreview($id)
    {
        $data['user'] = $user = User::find($id);
        $data['reviews'] = Review::where('rest_id', $user->id)->latest()->paginate(10);
        $data['active'] = 'reviews';
        return view('backend.reviews', $data);
        return view('newdashboard.reviews', $data);
    }
    public function userorder($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['user'] = $user = User::find($id);
            $data['orders'] = Order::where('user_id', $user->id)->latest()->paginate(50);
            $data['mycount'] = Count(Order::where('user_id', $user->id)->latest()->get());
            $data['active'] = 'this';
            return view('superadmin.userorder', $data);
        } else {
            return redirect()->back();
        }
    }
    public function update_bonus(Request $request)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($request->user_id);
            $user->bonus = $request->bonus;
            $user->save();
            return redirect()->back()->with('message', 'Bonus updated successfully');
        } else {
            return redirect()->back();
        }
    }
    public function update_rank(Request $request)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($request->user_id);
            $user->rank = $request->rank;
            $user->save();
            return redirect()->back()->with('message', 'Rank updated successfully');
        } else {
            return redirect()->back();
        }
    }

    public function disable($id)
    {
        $user_email = Auth::user();
        $r_user = User::find($id);


        if (Auth::user()->email == 'fasanyafemi@gmail.com' || $user_email->email == $r_user->email) {

            $data['user'] = $user = User::find($id);
            // dd($user);

            if ($user->availability == 1) {
                // dd('here',$user);
                $user->opening_hour = '9:00';
                $user->closing_hour = '9:00';
                $user->availability = 0;
                $user->save();
                return redirect()->back()->with('message', 'Account Closed successfully');
            } else {
                $user->opening_hour = '9:00';
                $user->closing_hour = '21:00';
                $user->availability = 1;
                $user->save();

                return redirect()->back()->with('message', 'Account Opened successfully');
            }
        } else {
            return redirect()->back();
        }
    }

    public function makevendor($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->user_type = 'vendor';
            $user->save();
            return redirect()->back()->with('message', 'User has been made vendor successfully!');
        } else {
            return redirect()->back();
        }
    }

    public function makeadmin($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->user_type = 'admin';
            $user->save();
            return redirect()->back()->with('message', 'User has been made vendor successfully!');
        } else {
            return redirect()->back();
        }
    }
    public function approveuser($id)
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->approve = 1;
            $user->save();
            //   dd($user);
            return redirect()->back()->with('message', 'User has been approved successfully!');
        } else {
            return redirect()->back();
        }
    }

    public function disapproveuser($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->approve = 0;
            $user->save();
            return redirect()->back()->with('message', 'User has been dissaproved successfully!');
        } else {
            return redirect()->back();
        }
    }
    public function assignadmin(Request $request)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {

            $user = User::find($request->user_id);
            $user->assigned = $request->admin_id;
            $user->save();
            return $user;
        } else {
            return redirect()->back();
        }
    }
    public function deleteuser($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {

            $user = User::find($id);
            $food = Food::where('user_id', $user->id)->delete();
            $categories = Category::where('user_id', $user->id)->delete();
            $user->delete();
            return redirect()->back()->with('message', 'User deleted successfully');
        } else {
            return redirect()->back();
        }
    }
    // route for the admin
    public function admindashboard()
    {
        if (Auth::user()->user_type == 'admin') {

            $data['users'] = $users = User::where('assigned', Auth::user()->name)->latest()->get();
            $data['admins'] = User::where('user_type', 'admin')->latest()->get();



            return view('admin.index', $data);
        } else {
            return redirect()->back();
        }
    }
    public function manual_with($id)
    {
        $data['user'] = User::find($id);

        $data['transactions'] = Transaction::where('rest_id', $id)->get();
        return view('superadmin.manual_with', $data);
    }
    public function manual_withdraw(Request $request)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($request->user_id);
            if ($request->amount > $user->balance) {
                return redirect()->back()->with('message', 'Vendor balance not upto the withdraw request');
            }
            // $user->dd($request->all(), $user);
           
            $tranx = Transaction::create([
                'reference' => 'manual_fund_withdr_'. Str::random(5),
                'title' => 'Manual Fund Withdraw',
                'rest_id'=> $user->id,
                'details' => 'Manual Fund Withdraw of NGN'.$request->amount,
                'amount' => $request->amount,
                'type' => 'debit',
                'before_balance' => $user->balance

            ]);
            $user->balance -=$request->amount;
            $user->save();
            $tranx->after_balance = $user->balance;
            $tranx->status = 1;
            $tranx->save();
            return redirect()->back()->with('message', 'Vendor balance updated successfully!');
            
            

        } else {
            return "Access Denied";
        }
    }
}
