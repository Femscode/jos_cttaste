<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\FoodImage;
use App\Models\Restaurant;
use App\Models\School;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Compressor;

class FoodController extends Controller
{
        public function searchCategory(Request $request) {
        $val = $request->val;
        $cats = Category::where('name', 'like', '%' . $val . '%')
        ->where('user_id',Auth::user()->id)
        ->limit(5)
       ->get();


        return $cats;
    }
      public function view_profile($id) {
        $data['user'] = User::find($id);
        return view('frontend.profile', $data);
    }
     public function createreview(Request $request) {
       
        $this->validate($request,[
            'review' => 'required',
            'name' => 'required',
            'rest_id' => 'required'
        ]);

        Review::create([
            'restaurant_id' => $request->rest_id,
            'name' => $request->name,
            'review' => $request->review
        ]);
        return true;
    }
    
    
    public function searchFoodDashboard(Request $request) {
        $val = $request->val;
        $cats = Food::where('name', 'like', '%' . $val . '%')
        ->where('user_id',Auth::user()->id)
         ->limit(5)
        ->get();
        return $cats;
    }

     public function vendor($type, $food) {
        if($type == 'best') {
            $data['rests'] = User::latest()->where('approve',1)->where('rank','<=',3)->inRandomOrder()->get();
        }
        else if($type == 'trending') {
            $data['rests'] = User::latest()->where('approve',1)->latest()->limit(6)->inRandomOrder()->get();
        }
        else if($type == 'new') {
            $data['rests'] = User::latest()->where('approve',1)->latest()->limit(6)->inRandomOrder()->get();
        }
        else if($type == 'cheap') {
            $data['rests'] = User::latest()->where('approve',1)->where('rank','<=',3)->inRandomOrder()->get();
        }
        else {
            $data['rests'] = User::where('restaurant_category',$food)->where('approve',1)->get();
        }
       
        return view('frontend.vendors',$data);

    }
    public function searchfood(Request $request)
    {
        // dd($request->all());
        $foods = Food::where('name', 'like', '%' . $request->food . '%')->pluck('user_id');

        // $locations = User::where('id',);
        $data['restaurants'] = $res = User::whereIn('id', $foods)->where('school', $request->school)->where('approve', 1)->orderBy('rank')->get();
        // dd($res);
        $data['message'] = true;
        $data['food'] = $request->food;
        return view('frontend.home', $data)->with('message', 'List of restaurants based on your search');
    }

    public function changeschool(Request $request) {
       
        $data['restaurants'] = $res = User::where('school', $request->school)->where('approve', 1)->get();
        return $res;
        

    }

    public function home()
    {
        $data['restaurants'] = User::where('approve', 1)->orderBy('rank')->get();
        $data['message'] = false;
        $data['food'] = '';
        return view('frontend.home', $data);
    }
    public function selectinstitution()
    {

        $data['restaurants'] = User::where('approve', 1)->get();
        $data['schools'] = School::all();
        // dd($data['schools']);
        return view('frontend.selectinstitution', $data);
    }
    public function restaurant($slug)
    {
        // dd(session()->get('cart'),session()->get('pack1'),session()->all());
        // session()->flush(); 

        $data['rest'] = $rest = User::where('slug', $slug)->first();

        if (Auth::user()) {


            if (session()->has('cart')) {
                if ($rest->id !== session()->get('cart')->restaurant) {
                    // session()->forget('cart');
                    session()->flush();
                }
            }
            if (session()->has('cart')) {
                $c_plate = session()->get('cart')->items;
                $plate = 1;
                foreach ($c_plate as $d) {
                    $pp = $d['plate'];
                    // dd($pp,session()->get('cart'));
                    foreach ($pp as $c) {
                        if ($c > $plate) {
                            $plate = $c;
                        }
                    }
                }
                $data['plate'] = $plate;
            } else {
                $data['plate'] = null;
            }
            $data['menus'] = $food = Food::where('user_id', $rest->id)->where('available', 1)->orderBy('rank', 'asc')->get();
            
            $data['cats'] = $cat = Category::where('user_id', $rest->id)->orderBy('rank', 'asc')->get();
            // dd($food);

            return view('frontend.menu', $data);
        } elseif ($rest->approve == 0 || $rest->availability == 0) {

            return redirect()->route('home');
        } else {



            if (session()->has('cart')) {
                if ($rest->id !== session()->get('cart')->restaurant) {
                    // session()->forget('cart');
                    session()->flush();
                }
            }
            if (session()->has('cart')) {
                $c_plate = session()->get('cart')->items;
                $plate = 1;
                foreach ($c_plate as $d) {
                    $pp = $d['plate'];
                    // dd($pp,session()->get('cart'));
                    foreach ($pp as $c) {
                        if ($c > $plate) {
                            $plate = $c;
                        }
                    }
                }
                $data['plate'] = $plate;
            } else {
                $data['plate'] = null;
            }
            $data['menus'] = $food = Food::where('user_id', $rest->id)->where('available', 1)->orderBy('rank', 'asc')->get();
            // dd($food);
            $data['cats'] = $cat = Category::where('user_id', $rest->id)->orderBy('rank', 'asc')->get();
            // dd($food);

            return view('frontend.menu', $data);
        }
    }
    public function availability(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        $food = Food::find($id);
        if ($status == 'false') {
            $food->available = 1;
            $food->save();

            return true;
        } else {

            $food->available = 0;
            $food->save();
            return false;
        }
    }
    public function index()
    {
        $data['foods'] = Food::where('user_id', Auth::user()->id)->orderBy('rank','asc')->get();
        $data['categories'] = Category::where('user_id', Auth::user()->id)->orderBy('rank','asc')->get();
        $data['foodimages'] = FoodImage::latest()->get();
        $data['active'] = 'food';
        return view('backend.food', $data);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);
        // dd($request->all());
        $check = Food::where('name', $request->name)->where('category_id', $request->category_id)->where('user_id', Auth::user()->id)->get();
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
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $imagename
                ]);
            } elseif ($request->selectedimage !== null) {
                $food =  Food::create([
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $request->selectedimage
                ]);
            } else {
                $food =  Food::create([
                    'user_id' => Auth::user()->id,
                    'category_id' => $request->category_id,
                    'name' => $request->name,
                    'price' => $request->price,
                ]);
            }
        }
        return $food;
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $food = Food::find($id);
        $food->delete();

        return "Food deleted successfully";
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $food = Food::find($id);
        return $food;
    }
    public function update(Request $request)
     
    {

        $this->validate($request, [
            'name' => ['required'],
            'id' => ['required'],
            'category_id' => ['required'],
            'price' => ['required'],

        ]);


        $food = Food::find($request->id);
       

        if ($request->image !== 'undefined') {

            $pathname = public_path() . '/foodimages/' . $food->image;
            // dd(strlen($food->image));
            if (file_exists($pathname) && $food->image != null && strlen($food->image) >= 44) {
                unlink($pathname);
            }

            $food->name = $request->name;
            $food->price = $request->price;
            $food->category_id = $request->category_id;
            $food->quantity = $request->quantity;

            $image = $request->image;
            $imagename = $image->hashName();
            $image->move(public_path() . '/foodimages/', $imagename);
            $food->image = $imagename;
            $food->save();


            $category = Category::where('id', $request->category_id)->first()->name;

            FoodImage::create(['category' => $category, 'image' => $imagename]);
        }
        // dd($request->all());
        elseif ($request->selectedimage !== null) {
            $food->name = $request->name;
            $food->price = $request->price;
            $food->category_id = $request->category_id;
            $food->image = $request->selectedimage;
            $food->quantity = $request->quantity;
            $food->save();
        } else {
            $food->name = $request->name;
            $food->price = $request->price;
            $food->category_id = $request->category_id;
            $food->quantity = $request->quantity;
            $food->save();
        }
          return $food;
    }
}
