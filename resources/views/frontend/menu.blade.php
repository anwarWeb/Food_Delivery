@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="sec.css">
    <title>Restaurant food</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container text-uppercase p-2 m2">
        <a class="navbar-brand font-weight-bold" href="index.html"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;&nbsp;FOOD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active ">
              <a class="nav-link " href="index.html">&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">&nbsp;&nbsp;&nbsp;About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.html">&nbsp;&nbsp;&nbsp;Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="franch.html">&nbsp;&nbsp;&nbsp;Franchise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">&nbsp;&nbsp;&nbsp;Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">&nbsp;&nbsp;<i class="fa fa-cart-plus"></i></a>
              </li>
            
          </ul>
        </div>
        </div>
      </nav>



      <section class="menu_list mt-60 mb-60">
        <div class="container">
           <div class="row">
              <div class="col-xl-12">
                 <div class="section-title text-center mb-60">
                    <h4>our menu</h4>
                 </div>
              </div>
           </div>
           <div class="row pro">
              <ul class="nav nav-tabs menu_tab" id="myTab" role="tablist">
                 <li class="nav-item">
                    <a class="nav-link" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab" aria-selected="false">Fast food</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab" aria-selected="false">Sweets</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link active show" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab" aria-selected="true">Indian</a>
                 </li>
                 
              </ul>
           </div>

          </section>

          <div class="py-4 container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <img src="img/80.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>French Fries</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>
              <div class="col-lg-4">
                <img src="img/10.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                  <h5>Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

              <div class="col-lg-4">
                <img src="img/9.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>Large Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

            </div>

            <div class="row">
              <div class="col-lg-4">
                <img src="img/80.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>French Fries</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>
              <div class="col-lg-4">
                <img src="img/10.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                  <h5>Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

              <div class="col-lg-4">
                <img src="img/9.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>Large Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

            </div>


            <div class="row">
              <div class="col-lg-4">
                <img src="img/80.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>French Fries</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>
              <div class="col-lg-4">
                <img src="img/10.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                  <h5>Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

              <div class="col-lg-4">
                <img src="img/9.jpg" alt="" class="w-100 mb-4 border border-md border-black shadow-sm">
                <h5>Large Berger</h5>
                <p class="font-weight-normal">150/-</p>
                <a class="btn hvr-hover" href="#"><p>Add to cart</p></a>
              </div>

            </div>


          </div>
            




      <div class="footer" >
        <footer class="page-footer bg-light">
          <div class="bg-success">
           <div class="container">
             <div class="row py-4 d-flex align-item-center">
               <div class="col-md-12 text-center">
                 <a href="#"><i class="fa fa-facebook-square  mr-4 face"></i></a>
                 <a href="#"><i class="fa fa-instagram  mr-4 inst"></i></a>
                 <a href="#"><i class="fa fa-linkedin-square  mr-4 link"></i></a>
                 <a href="#"><i class="fa fa-google-plus-square  mr-4 go"></i></a>
                 <a href="#"><i class="fa fa-twitter-square  twit"></i></a>
               </div>
             </div>
           </div>
          </div>
          
          <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
              <div class="row  by">
                <div class="col-lg-5 col-xs-12 about-company">
                  <h2 style="color:white; font-family:cursive;">About</h2>
                  <p class="pr-5 text-50 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                  <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    </p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                  <h4 class="mt-lg-0 mt-sm-3" style="color:white; font-family:cursive; font-size: 22px;">Links</h4>
                    <ul class="m-0 p-0">
                      <li>- <a href="index.html">Home</a></li>
                      <li>- <a href="about.html">About</a></li>
                      <li>- <a href="menu.html">Menu</a></li>
                      <li>- <a href="franch.html">Franchise</a></li>
                      <li>- <a href="contact.html">Contact us</a></li>
                      
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                  <h4 class="mt-lg-0 mt-sm-4" style="color:white; font-family:cursive; font-size: 22px;">Location</h4>
                  <p>B-33 Gautam nagar behind ondoor concept mp nagar Bhopal</p>
                  <p class="mb-0"><i class="fa fa-phone mr-3"></i>07554012502</p>
                  <p><i class="fa fa-envelope-o mr-3"></i>contact@bytezip.in</p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col copyright">
                  <p class="per"><small class="text-center-50">© 2020. All Rights Reserved.</small></p>
                </div>
              </div>
            </div>
            </div>
          </footer>
         </div>
        


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection