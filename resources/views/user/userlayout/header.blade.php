  <!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width"/>
      
       <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/user-assets/images/GTS-Global-round.png') }}"/>
      <meta name="next-head-count" content="4"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/css/158b2a346bfb7eda80a3.css') }}" as="style"/>
      <link rel="stylesheet" href="{{ asset('public/user-assets/next/static/css/158b2a346bfb7eda80a3.css') }}" data-n-g=""/>

    
    <!-- Stylesheet -->
    <link href="{{ asset('public/user-assets/next/static/vendor/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user-assets/next/static/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user-assets/next/static/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user-assets/next/static/vendor/animate/animate.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
      <!-- <link rel="stylesheet" href="../xhtml/css/style.css"> -->
    <link class="skin" rel="stylesheet" href="{{ asset('public/user-assets/next/static/css/skin/skin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('public/user-assets/next/static/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user-assets/next/static/vendor/swiper/css/swiper.min.css') }}">

      <noscript data-n-css=""></noscript>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/webpack-50bee04d1dc61f8adf5b.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/framework.f8bd46fc02868c500bda.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/67044d3529d6f9aa75e89e61f51902ea57726f32.862422b2d088409d6c1d.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/main-d047991b67491617ea74.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/d7a2cd7762beabb9a19bc09926694afe42eca740.ad70fe1da384bd80f19c.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/pages/_app-1f26206e5a91959688cd.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/dbf3ce33.a75dcf8e6301c92719e0.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/df7357496874b1a0514c89d4b5d0c1f068efc4f5.ea7fa9398135cc60c46c.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/12845cff6ffd9841f3514a31494c4d2c6a2ff140.4e83925b380d09396120.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/a2e524a6acb989193fbd4cf29eeae0557245c112.5cff41d2c50207a33386.js') }}" as="script"/>
      <link rel="preload" href="{{ asset('public/user-assets/next/static/chunks/pages/index-101ce744431eab1d665a.js') }}" as="script"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   

   <div id="__next">
         <div class="page-wraper">

    <header class="site-header  mo-left">
               <div class="sticky-header main-bar-wraper navbar-expand-lg">
                  <div class="main-bar clearfix ">
                     <div class="container clearfix">
                        <div class="logo-header mostion logo-dark">
                           <a href="{{route('/home')}}">
                              <img class="custom-logo" src="{{ asset('public/user-assets/images/GTS-Global-Big.png') }}" alt="" />
                            </a>
                        </div>
                        <button class="navbar-toggler collapsed navicon justify-content-end "><span></span><span></span><span></span></button>
                        <div class="extra-nav">
                           <div class=""><a class="btn btn-corner gradient btn-primary" href="{{route('/contact_us')}}"><i class="fa fa-angle-right m-r10"></i>Free Consultation</a></div>
                        </div>
                        <div class="header-nav navbar-collapse collapse justify-content-end " id="navbarNavDropdown">
                           <div class="logo-header"><a href="{{route('/home')}}"><img src="{{ asset('public/user-assets//images/logo-3.png') }}" alt=""/></a></div>
                           <ul class="nav navbar-nav navbar">
                              <li><a href="{{route('/home')}}">Home</a></li>
                              <!-- <li><a href="study-abroad.php">Study Abroad</a></li> -->

                              <li><a href="{{route('/students')}}">Students</a></li>
                              <li><a href="{{route('/recruitment')}}">Recruitment Partners </a></li>
                              
                              <li class="">
                                 <a href="{{route('/study_abroad')}}">Course Finder <i class="fa fa-chevron-down"></i></a>
                                 <ul class="sub-menu">
                                    <!-- <li><a href="services-3.php">Services</a></li> -->
                                    <li><a href="{{url('/search_univercity')}}">Universities Search</a></li>
                                    <li><a href="{{route('/course_search')}}">Course Search</a></li>
                                </ul>
                              </li>
                              
                              
                              <li><a href="{{route('/coaching')}}">Coaching</a></li>
                             
                           </ul>
                           <div class="dlab-social-icon">
                              <ul><a class="fa fa-facebook" href="#"></a><a class="fa fa-twitter" href="#"></a><a class="fa fa-linkedin" href="#"></a><a class="fa fa-instagram" href="#"></a></ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
     </header>
  



 