<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use Auth;
use App\OrderItem;

class OrderController extends Controller
{
    //
    public function storeOrder(Request $request){
        // validation goes here
        $order = Order::create($request->all());
        return $order;
    }

    public function getAllOrders(){
        $orders = Order::all();
        //if you want to get contacts on where condition use below code
        //$contacts = Contact::Where('tenant_id', "1")->get();
        return view('order_list', compact('orders'));
    }


    public function cartCheckout(){
        $carts = Auth::user()->cart;
        $sub_total = 0;
        $tax = 0;
        $discount = 0;
        $total = 0;
        foreach($carts as $cart){

            $sub_total = $sub_total + ($cart->price * $cart->quantity);
        }
        $total = ($sub_total + $tax) - $discount;

        $order_id = Order::create([
            'user_id'=> Auth::user()->id,
            'sub_total'=> $sub_total,
            'tax'=> $tax,
            'discount'=> $discount,
            'total'=>$total,

        ])->id;

        foreach($carts as $cart){
            
            OrderItem::create([
                'order_id'=>$order_id,
                'food_id'=> $cart->food->id,
                'price'=> $cart->price,
                'quantity'=> $cart->quantity,
                'sub_total'=>$cart->price * $cart->quantity,
                'discount'=> $discount,
                'tax'=>$tax,
                'total'=> ($cart->price * $cart->quantity) + $tax -$discount,
            ]);
           
           
        }
        return redirect()->route('thanku')->with('success','Your order is placed successfully!');
    }
}
