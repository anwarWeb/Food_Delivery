<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Cart;
use App\Food;
use Auth;
class CartController extends Controller
{
    //
    public function index()
    {
        $carts = Cart::with('food')->get();

        return view('cart_list', compact('carts'));
    }


    public function addToCart($id, $q)
    {
        $food = Food::find($id);
            $cart = new Cart;

            $cart->user_id = Auth::user()->id;
            $cart->food_id = $food->id;
            $cart->price = $food->price;
            $cart->quantity = $q;
    
            $cart->save();
        
      

        return redirect()->route('cart')->with('success','Food added to cart successfully!');
    }


    public function updateCart($id, $q)
    {
        
            $cart = Cart::find($id);
           
            $cart->quantity = $cart->quantity + $q;
    
            $cart->save();
        
      

        return redirect()->route('cart')->with('success','Food added to cart successfully!');
    }

    public function removeFromCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

       return redirect()->route('cart')->with('success','Food removed from cart successfully!');
    }
}
