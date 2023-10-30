<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Delivery;

use App\Models\Cart;
use App\Models\Food;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function menuplate(Request $request)
    {
        $id = $request->id;
        $myA = [];
        if (session()->has('cart')) {
            $plates = session()->get('cart')->items;
            foreach ($plates as $plate)
                // if($id == $plate['plate']) {
                if (in_array($id, $plate['plate'])) {
                    array_push($myA, $plate);
                }
        }
        return $myA;
    }
    public function deleteplate(Request $request)
    {
        $id = $request->id;
        $cart = session()->get('cart');
        // dd($cart,$id);
        $rcart = new Cart(session()->get('cart'));
         if (session()->has('cart')) {
            $cart_item = session()->get('cart')->items;
            foreach ($cart_item as $plate) {
                     // if($id == $plate['plate']) {
                for($i = 0;$i<=15;$i++ ) {
                
                if (in_array($id, $plate['plate'])) {
                    
                    $key = array_search($id, $plate['plate']);
                    // dd($key,$id,$plate);
                    // dd($plate['plate']);
                    array_splice($plate['plate'], $key, 1);
                    // dd($plate['plate'],$plate);
                    $plateid = $plate['id'];
                    $items = $rcart->items;
                    // dd($items['14']['plate'],$plateid);
                   
                    $price = intval($items[$plateid]['price']);
                    // dd(intval($price));
                    unset($items[$plateid]);
                    $ritems = array_add($items, $plateid, $plate);
                    // dd($ritems,$items,'the guru the',$plate,$plateid);

                    //delete element in array by value "green"
                    //you are almost there, just make sure you find a way to remove $plateid index from $rcart->items
                    //and then putit back to the $rcart as a main

                    // dd($rcart->items);
                    $rcart->totalQty -= 1;
                    $rcart->totalPrice -= $price; 
                    $rcart->items = $ritems;
                    // dd($rcart);
                    session()->forget('cart');
                    session()->put('cart', $rcart);
                    // dd($rcart,$plate['id'],$plate['qty']-1);

                    // $rcart->update(['items' => $ritems]);


                    //   dd($plate['plate']);

                    //here is the code that removes the plate from the cart
                    //   dd($plate['plate']);

                    // session()->put('cart', $plate['plate']);
                    // array_push($myA, $plate);
                    // dd($plate,$rcart);

                    $gg =  $rcart->updateQty2($plate['id'], $plate['qty'] - 1);
                    // dd($rcart);
                    // $gg =  $rcart->updateQty($plate['id'], $item_quantity);
                    session()->forget('cart');
                    session()->put('cart', $rcart);

                    // dd($gg,session()->get('cart'));
                    //pelumi oo

                    //I am trying to get all the rcart items then remove the one that has an id of the plate
                    //delete it and then push it back, but the problem is that, it will affect the array index
                    session()->forget('pack['.$id.']');
                }
            }//here

            }

            }
            // $arrD = array_diff($rcart->items,$myA);

        return $rcart->totalPrice;
      
    }
     public function multiplyPlate(Request $request)
    {

        if (session()->has('plates')) {
            session()->push('plates', ['plate1' => 2]);
        } else {
            session()->put('plates', []);
            session()->push('plates', ['plate1' => 1]);
        }
        $cart = new Cart(session()->get('cart'));
        $items = session()->get('cart')->items;
        
        $current = intval($request->current);
        foreach ($items as $item) {
            $food = Food::find($item['id']);
            $t_plate = count($item['plate']);
            
            for($i =0;$i<$t_plate;$i++) {
                if( $item['plate'][$i] == $current -1 ) {
                    $cart->add($food, $current);
                }
            }

            session()->put('cart', $cart);
            if (session()->has('pack[' . $current . ']')) {
                $s = session()->get('pack[' . $current . ']');
                $si = $s + 1;
                session()->put('pack[' . $current . ']', $si);
            } else {
                session()->put('pack[' . $current . ']', 1);
            }

        }
        return array($cart->totalQty, $cart->totalPrice);
    }
   
    public function addPlate()
    {

        if (session()->has('plates')) {
            session()->push('plates', ['plate1' => 2]);
        } else {
            session()->put('plates', []);
            session()->push('plates', ['plate1' => 1]);
        }
        // dd(session()->get('plates'));
    }
    public function addToCart(Food $food)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($food);
        session()->put('cart', $cart);
        // dd($cart, session()->get('cart'));
        return redirect()->back();
    }
    public function addToCart2(Request $request)
    {
        $id  = explode(',', $request['data'], 2)[0];
        $plate  = explode(',', $request['data'], 2)[1];
        $food = Food::find($id);

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($food, $plate);

        session()->put('cart', $cart);
        if (session()->has('pack[' . $plate . ']')) {
            $s = session()->get('pack[' . $plate . ']');
            $si = $s + 1;
            session()->put('pack[' . $plate . ']', $si);
        } else {
            session()->put('pack[' . $plate . ']', 1);
        }
        // dd($cart->totalQty);
        // dd($cart, session()->get('cart'));
        return array($cart->totalQty,$cart->totalPrice);
        return redirect()->back();
    }
    public function addToCart3(Request $request)
    {
        $id  = explode(',', $request['data'], 2)[0];
        $plate  = explode(',', $request['data'], 2)[1];
        $food = Food::find($id);

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($food, $plate);

        session()->put('cart', $cart);
        if (session()->has('pack[' . $plate . ']')) {
            $s = session()->get('pack[' . $plate . ']');
            $si = $s + 1;
            session()->put('pack[' . $plate . ']', $si);
        } else {
            session()->put('pack[' . $plate . ']', 1);
        }
        // dd($cart, session()->get('cart'));

        return $cart->totalPrice;
    }
    public function removeMenu(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $plate = $request->plate;
        // dd($request->all());
        $food = Food::find($id);

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $realfood = $cart->items[$id];
        unset($cart->items[$id]);
        $realplate = $realfood['plate'];
        $key2 = array_search($plate, $realplate);
        array_splice($realplate, $key2, 1);

        $realfood['plate'] = $realplate;
        $ritem = array_add($cart->items, $id, $realfood);
        $cart->items = $ritem;
        session()->put('cart', $cart);
        $quantity = $cart->items[$id]['qty'];

        // dd($cart->items,$cart);

        //what is meant to be done here is that, once a product is removed, it should check the $cart->plate
        //and decrement the value of the quantity of that plate id, secondly, the quantity of the food will be reduced.
        //pelumi o
        // dd($quantity);
        if ($quantity == 1) {
            $cart->remove($food->id);
            if ($cart->totalQty <= 0) {
                session()->forget('cart');
            } else {
                session()->put('cart', $cart);
            }
            
            // return 404;
            return $cart->totalPrice;
        } else {

            $cart->updateQty($food->id, $quantity - 1);
            }
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        //here is where we'd deal with the packs and plates
        if (session()->has('pack[' . $plate . ']')) {
            $s = session()->get('pack[' . $plate . ']');
            $si = $s - 1;
            session()->put('pack[' . $plate . ']', $si);
        } else {
            session()->put('pack[' . $plate . ']', 1);
        }
        return $cart->totalPrice;
    }
    public function removeMenu2(Request $request) {
        $values = explode(",",$request->value);
        $id = $values[0];
        $qty = $values[1];
        $plate = $values[2];
        // dd($request->all());
        $food = Food::find($id);

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $realfood = $cart->items[$id];
        unset($cart->items[$id]);
        $realplate = $realfood['plate'];
        $key2 = array_search($plate, $realplate);
        array_splice($realplate, $key2, 1);

        $realfood['plate'] = $realplate;
        $ritem = array_add($cart->items, $id, $realfood);
        $cart->items = $ritem;
        session()->put('cart', $cart);
        $quantity = $cart->items[$id]['qty'];

        // dd($cart->items,$cart);

        //what is meant to be done here is that, once a product is removed, it should check the $cart->plate
        //and decrement the value of the quantity of that plate id, secondly, the quantity of the food will be reduced.
        //pelumi o
        if ($quantity == 1) {
            $cart->remove($food->id);
            if ($cart->totalQty <= 0) {
                session()->forget('cart');
            } else {
                session()->put('cart', $cart);
            }
            //here is the normal one which will return 404
            //return 404
            return $cart->totalPrice;
        } else {

            $cart->updateQty($food->id, $quantity - 1);
            }
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        //here is where we'd deal with the packs and plates
        if (session()->has('pack[' . $plate . ']')) {
            $s = session()->get('pack[' . $plate . ']');
            $si = $s - 1;
            session()->put('pack[' . $plate . ']', $si);
        } else {
            session()->put('pack[' . $plate . ']', 1);
        }
        return $cart->totalPrice;
    }

    public function showCart()
    {
        // dd(session()->all());
        if (session()->has('cart')) {
            $data['carts'] =  $cart = new Cart(session()->get('cart'));
        } else {
            $data['carts'] = $cart = null;
        }
          $data['rest'] = $rest = User::find($cart->restaurant);
        for ($i = 0; $i <= 15; $i++) {
            $pack[$i] = [];
            foreach ($cart->items as $item) {

                if (in_array($i, $item['plate'])) {
                    $tmp = array_count_values($item['plate']);
                    $cnt = $tmp[$i];

                    $item['qty'] = $cnt;
                    array_push($pack[$i], $item);
                }
            }
        }
        $cc = 0;
        for ($j = 0; $j <= 15; $j++) {
            if (session()->has('pack[' . $j . ']')) {
           
                $data['pack' . $j . ''] = $pack[$j];
                $cc += 1;
            }
        }
        $data['cc'] = $cc;
        // dd($data, $pack[1], $pack[2],session()->all());
        $data['del'] = Delivery::where('user_id',$rest->id)->first();

        return view('frontend.cart', $data);
    }
    public function updatecart(Request $request)
    {

        $id = $request->id;
        $qty = $request->qty;
        $food = Food::find($id);
        $cart  = new Cart(session()->get('cart'));



        $cart->updateQty($food->id, $qty);
        // dd($cart, $product->id,$qty);

        session()->put('cart', $cart);

        return $cart->totalPrice;
    }
    public function deletecart(Request $request)
    {
        $id = $request->id;
        $product = Food::find($id);

        $cart = new Cart(session()->get('cart'));
        $cart->remove($product->id);
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        return $cart->totalPrice;
    }
    public function cancelcart()
    {
        if (session()->has('cart')) {
            session()->forget('cart');
        }
        return redirect()->route('home');
    }
}
