<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Knowledge Management Consulting</title>
	<link rel="icon" href="{{asset('public/img/Fevicon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{asset('vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{asset('vendors/Magnific-Popup/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>


  <!--================ Header Menu Area start =================-->
  <header class="header_area">
     <!-- <div class="main_menu"> -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index">The Knowledge Management Consulting<!--<img src="{{asset('img/logo.png') }}" alt=""height="60">--></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="services">Our Services</a></li>
              <!-- <li class="nav-item submenu dropdown">
                <a href="#" id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
              
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="services">Knowledge Management</a>
                <a class="dropdown-item" href="services">ISO 9001:2005</a>
                <a class="dropdown-item" href="services">Legal Process Outsourcing</a>
                <a class="dropdown-item" href="services">Legal Services</a>
              </div>
                  
              </li> -->

              <li class="nav-item"><a class="nav-link" href="people">Our People</a>
              <!-- <li class="nav-item"><a class="nav-link" href="consult">Consult with Us</a> -->
              <li class="nav-item"><a class="nav-link" href="resources">Resources</a></li>
              <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
            </ul>
          </div> 
       <!-- </div>-->
      </nav>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Content start =================-->      
    @yield('content')
  <!--================ Content end =================-->  

  <!-- ================ start footer Area ================= -->
    <footer class = "bg-dark">
    <div class="footer-bottom ">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{asset('vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{asset('vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{asset('js/mail-script.js') }}"></script>
  <script src="{{asset('js/main.js') }}"></script>
</body>
</html>