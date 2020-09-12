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


      <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
      </div>
         
          
            <div class="py-5 container">
              <div class="row">
                <div class="col-lg-5">
                  <img src="img/r1.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                </div>
                <div class="col-lg-7">
                  <h3>Our Chefs</h3>
                  <p class="font-italic text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsum quaerat, itaque sint odit id beatae, vero aliquam numquam placeat officiis fugiat, consequuntur est ut fugit amet illum obcaecati sed.</p>
                  <p class="font-italic text-muted"> div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure dolore dolorum eum ex, expedita voluptate est adipisci repudiandae. Minus tenetur ut veritatis non hic beatae velit? Eius, totam, officia?</p>
                  <p class="font-italic text-muted">Enim numquam autem, suscipit repellat vero, voluptas adipisci provident ad quidem dolorum minus, architecto. Nostrum deleniti nesciunt consequatur tempora repudiandae quos quas, animi perspiciatis nam consectetur earum adipisci, repellendus laudantium.</p>
                </div>
              </div>
            </div>
              
      
            <div class="py-5 container">
              <div class="row">
                <div class="col-lg-7">
                  <p class="font-italic text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsum quaerat, itaque sint odit id beatae, vero aliquam numquam placeat officiis fugiat, consequuntur est ut fugit amet illum obcaecati sed.</p>
                  <p class="font-italic text-muted"> div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure dolore dolorum eum ex, expedita voluptate est adipisci repudiandae. Minus tenetur ut veritatis non hic beatae velit? Eius, totam, officia?</p>
                  <p class="font-italic text-muted">Enim numquam autem, suscipit repellat vero, voluptas adipisci provident ad quidem dolorum minus, architecto. Nostrum deleniti nesciunt consequatur tempora repudiandae quos quas, animi perspiciatis nam consectetur earum adipisci, repellendus laudantium.</p>
                </div>
                <div class="col-lg-5">
                  <img src="img/r2.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                </div>
              </div>
            </div>
              
      
            <div class="py-5 container">
              <div class="row">
                <div class="col-lg-5">
                  <img src="img/P1.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                </div>
                <div class="col-lg-7">
                  <p class="font-italic text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsum quaerat, itaque sint odit id beatae, vero aliquam numquam placeat officiis fugiat, consequuntur est ut fugit amet illum obcaecati sed.</p>
                  <p class="font-italic text-muted"> div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure dolore dolorum eum ex, expedita voluptate est adipisci repudiandae. Minus tenetur ut veritatis non hic beatae velit? Eius, totam, officia?</p>
                  <p class="font-italic text-muted">Enim numquam autem, suscipit repellat vero, voluptas adipisci provident ad quidem dolorum minus, architecto. Nostrum deleniti nesciunt consequatur tempora repudiandae quos quas, animi perspiciatis nam consectetur earum adipisci, repellendus laudantium.</p>
                </div>
              </div>
            </div>
              
      
            <div class="py-5 container">
              <div class="row">
                <div class="col-lg-7">
                  <p class="font-italic text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ipsum quaerat, itaque sint odit id beatae, vero aliquam numquam placeat officiis fugiat, consequuntur est ut fugit amet illum obcaecati sed.</p>
                  <p class="font-italic text-muted"> div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur iure dolore dolorum eum ex, expedita voluptate est adipisci repudiandae. Minus tenetur ut veritatis non hic beatae velit? Eius, totam, officia?</p>
                  <p class="font-italic text-muted">Enim numquam autem, suscipit repellat vero, voluptas adipisci provident ad quidem dolorum minus, architecto. Nostrum deleniti nesciunt consequatur tempora repudiandae quos quas, animi perspiciatis nam consectetur earum adipisci, repellendus laudantium.</p>
                </div>
                <div class="col-lg-5">
                  <img src="img/cc2.jpg" alt="" class="w-100 mb-4 border border-md border-white shadow-sm">
                </div>
              </div>
            </div>
            <br>
              
            
      
      
      
      
      
      
      
      
            <h2 style="text-align:center; background: lightgoldenrodyellow;">-------Our Team------</h2>
            <br><br>
            <div class="row">
              <div class="column">
                <div class="card">
                  <img src="img/P4.png" alt="Jane" style="width:100%">
                  <div class="container">
                    <h3>Jane deo</h3>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                  </div>
                </div>
              </div>
            
              <div class="column">
                <div class="card">
                  <img src="img/P4.png" alt="Mike" style="width:100%">
                  <div class="container">
                    <h3>Mike Ross</h3>
                    <p class="title">MD</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                  </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <img src="img/P4.png" alt="John" style="width:100%">
                  <div class="container">
                    <h3>John Doe</h3>
                    <p class="title">Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
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
                      <li>- <a href="">Contact us</a></li>
                      
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