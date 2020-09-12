@extends('layouts.frontend')

@section('content')

<div class="container">
                
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carts as $cart)
        <tr>
        <td><img src="{{$cart->food->image? asset('storage/'.$cart->food->image->url):'//placehold.it/100'}}" wodth='50' height='50' class="avatar img-circle" alt="avatar"></td>
          <td>{{$cart->food->title}}</td>
          <td>{{$cart->price}}</td>
          <td>
          <a href="{{route('update_cart', [$cart->id, -1])}}"><i class="fa fa-minus" aria-hidden="true"></i></a>
            {{$cart->quantity}}
            <a href="{{route('update_cart', [$cart->id, 1])}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
          </td>
          <td>{{$cart->quantity * $cart->food->price}}</td>

        <td><a href="{{route('remove_from_cart', $cart->id)}}"><i class="fa fa-times" aria-hidden="true"></i>
        </a></td>
        </tr>
        @endforeach
        
     
      </tbody>
    </table>
    <br><br><br>
    <a href="{{route('cart_checkout')}}">Cart Checkout</a>
  </div>
  

@endsection