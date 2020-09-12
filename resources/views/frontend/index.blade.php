@extends('layouts.frontend')

@section('content')

<h3>OUR SERVICES</h3>
<div class="categories-shop">
   <div class="container-fluid all">
       <div class="row">
           
        @foreach ($foods as $food)
       
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="{{$food->image? asset('storage/'.$food->image->url):'//placehold.it/100'}}"  alt="food image">
                    <div><p>{{$food->title}}</p></div>
                    <div>
                        <p>{{$food->price}}</p>
                    </div>
                    <div>
                    <a class="btn hvr-hover" href="#">{{$food->category->title}}</a>
                    <a class="btn hvr-hover" href="{{route('add_to_cart', [$food->id, 1])}}">Add to Cart</a>
                    </div>
                    
                </div>
            </div>
        @endforeach
           
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img class="img-fluid" src="{{asset('frontend/img/74.jpg')}}" alt="" />
                   <a class="btn hvr-hover" href="#">Fast food</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img class="img-fluid" src="{{asset('frontend/img/72.jpg')}}" alt="" />
                   <a class="btn hvr-hover" href="#">Drinks</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img class="img-fluid" src="{{asset('frontend/img/81.jpg')}}" alt="" />
                   <a class="btn hvr-hover" href="#">Indian special</a>
               </div>
           </div>
       </div>
   </div>
</div>



<h3>ENJOY OUR CUISINE! </h3>
<div class="categories-shop">
   <div class="container all">
       <div class="row">
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img src="{{asset('frontend/img/1.png')}}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"><br> 
                   <a class="btn1 hvr-hover" href="#"><p>Book your table</p></a>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img src="{{asset('frontend/img/2.jpg')}}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"><br> 
                   <a class="btn1 hvr-hover" href="#"><p>Call Now</p></a>
               </div>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="shop-cat-box">
                   <img src="{{asset('frontend/img/7.png')}}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"><br> 
                   <a class="btn1 hvr-hover" href="#"><p>Order Now</p></a>
               </div>
           </div>
           
       </div>
   </div>
</div>

@endsection