<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/main.css') }}">
    <title>Restaurant food</title>
</head>
<body>
    
    <div class="header" id="topheader">
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

          <section class="header-section">
            <div class="center-div">
                <h1 class="font-weight-bold">WE PROVIDE WORLD BEST MEAL</h1>
                <P>The best food with the top services</P>
                <div class="header-buttons">
                    <a href="#">Login</a>
                    <a href="#">Sign up</a>
                </div>
            </div>
        </section>
     </div>
      

     <h3>OUR SERVICES</h3>
     <div class="categories-shop">
        <div class="container-fluid all">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('frontend/img/90.jpg') }}" alt="" />
                        <a class="btn hvr-hover" href="#">Sweets</a>
                    </div>
                </div>
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
                  <h2>About</h2>
                  <p class="pr-5 text-50 font-weight-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
                  <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    </p>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                  <h4 class="mt-lg-0 mt-sm-3">Links</h4>
                    <ul class="m-0 p-0">
                      <li>- <a href="index.html">Home</a></li>
                      <li>- <a href="about.html">About</a></li>
                      <li>- <a href="menu.html">Menu</a></li>
                      <li>- <a href="franch.html">Franchise</a></li>
                      <li>- <a href="">Contact us</a></li>
                      
                    </ul>
                </div>
                <div class="col-lg-4 col-xs-12 location">
                  <h4 class="mt-lg-0 mt-sm-4">Location</h4>
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