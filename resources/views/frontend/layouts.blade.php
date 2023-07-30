<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/css/favicon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/lightcase.css')}}">

    <!-- main css for template -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.min.css')}}">
</head>

<body>

    <!-- ================> preloader start here <================ -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ================> preloader ending here <================ -->

    <!-- ================> Header Search <================ -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ================> Header Search <================ -->

    <!-- ================> Header Cart <================ -->
    <div class="overlay"></div>
    <div class="cart-sidebar-area">
        <div class="top-content">
            <img src="{{ URL::asset('assets/images/logo/02.png')}}" alt="logo">
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Login</h4>
				<div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="https://demos.codexcoder.com/themeforest/html/peace/peace/contact.php" id="contact-form" method="POST">
                        <input type="text" placeholder="Username" id="name" name="name" required="required">
                        <input type="password" placeholder="Password" id="email" name="email" required>
                        
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>Login Now</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p> 
                </div> 
				<br/><br/>
				
				<h4 class="title">Register</h4>
				<div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="https://demos.codexcoder.com/themeforest/html/peace/peace/contact.php" id="contact-form" method="POST">
                        <input class="w-100" type="text" placeholder="Your Name" id="name" name="name" required="required">
                        <input class="w-100" type="text" placeholder="Mobile No" id="mobile" name="mobile" required>
						<input class="w-100" type="text" placeholder="Your Email" id="email" name="email" required>
                        <textarea placeholder="Your Address" rows="8" name="address" id="address" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>Register Now</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p> 
                </div> 
                
            </div>
        </div>
    </div>
    <!-- ================> Header Cart <================ -->



    <!-- ================> header section start here <================== -->
    <header class="header">
        <div class="navbar-expand-xl">
            <div class="collapse navbar-collapse" id="menubar2">
                <div class="header__top w-100">
                    <div class="container">
                        <div class="header__top-area">
                            <div class="header__top-left">
                                <ul>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        +91 90000 00000
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        info@cleansalem.in
                                    </li>
                                </ul>
                            </div>
                            <div class="header__top-center">
                                <div class="header__top-logo d-none d-md-block">
                                    <a href="index.php"><img src="{{ URL::asset('assets/images/logo/01.png')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="header__top-right">
                                <div class="header__top-socialsearch">
                                    <div class="header__top-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="header__top-search">
                                        
                                        <ul>
                                            @guest
                                            <li class="search__icon"><i class="fas fa-search"></i></li>
											<li><a href="{{ url('login') }}"> Login & Register</a> <i class="fas fa-user"></i></li>
                                            
                                            @else
                                            <li>Hello  {{ Auth::user()->name }}  <i class="fas fa-user"></i></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 Logout
                                             </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header__bottom">
            <div class="container">
                <div class="header__mainmenu navbar navbar-expand-xl navbar-light">
                    <div class="header__logo">
                        <a href="index.phpl" class="d-none d-xl-block"><img src="{{ URL::asset('assets/images/logo/02.png')}}" alt="logo"></a>
                        <a href="index.php" class="d-xl-none"><img src="{{ URL::asset('assets/images/logo/01.png')}}" alt="logo"></a>
                    </div>
                    <div class="header__bar">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menubar" aria-controls="menubar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button class="navbar-toggler header__bar-info" type="button" data-bs-toggle="collapse" data-bs-target="#menubar2" aria-controls="menubar2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-info"></span>
                        </button>
                    </div>
                    <div class="header__menu navbar-expand-xl">
                        <div class="collapse navbar-collapse" id="menubar">
                            <ul>
								<?php
                                        $pagename = basename($_SERVER['PHP_SELF']);
                                        ?>
                                <li class="<?php if ($pagename == 'index.php') echo "active"; ?>">
                                    <a href="index.php">Home</a>
                                    
                                </li>
								<li class="<?php if ($pagename == 'aboutus.php') echo "active"; ?>">
                                    <a href="#0">About Us</a>
                                    <ul>
                                        <li><a href="aboutus.php">About Clean Salem</a></li>
                                        <li><a href="trustee.php">Our Trustee </a></li>
                                        
                                    </ul>
                                </li>
                                <li class="<?php if ($pagename == 'news-events.php') echo "active"; ?>">
                                    <a href="news-events.php">News &amp; Events</a>
                                   
                                </li>
                                <li class="<?php if ($pagename == 'gallery.php') echo "active"; ?>">
                                    <a href="#0">Gallery</a>
                                    <ul>
                                        <li><a href="gallery.php">Photos Gallery</a></li>
                                        <li><a href="video.php">Video Gallery</a></li>
                                    </ul>
                                </li>
                                
                                <li class="<?php if ($pagename == 'contact.php') echo "active"; ?>"><a href="contact.php">Contact Us</a></li>
                            </ul>
                            <a href="complaint.php" class="default-btn"><span>Complaint Register <i class="fas fa-heart"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ================> header section end here <================== -->





    @yield('content')

   
     <!-- ================> Social section start here <================== -->
     <div class="social">
        <div class="container">
            <div class="social__area">
                <ul class="social__list">
                    <li class="social__list-facebook">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                            <span>facebook</span>
                        </a>
                    </li>
                    <li class="social__list-twitter">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                            <span>twitter</span>
                        </a>
                    </li>
                    <li class="social__list-linkedin">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                            <span>linkedin</span>
                        </a>
                    </li>
                    <li class="social__list-instagram">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                            <span>instagram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ================> Social section end here <================== -->



   

<!-- ================> Footer section start here <================== -->
    <footer class="footer">
        
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-area text-center">
                    <div class="footer__bottom-logo">
                        <a href="index-2.html"><img src="{{ URL::asset('assets/images/logo/01.png')}}" alt="footer logo"></a>
                    </div>
                    <div class="footer__bottom-content">
                        <p>Copyright &copy; 2023 <a href="index.php">Clean Salem</a> | Designed by <a href="https://4mdesigner.com">4MDesigner</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================> Footer section end here <================== -->

    

    

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->

    <!-- vendor plugins -->
    <script src="{{ URL::asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/waypoints.min.js')}}"></script>
    <!-- <script src="{{ URL::asset('assets/js/all.min.js')}}"></script> -->
    <script src="{{ URL::asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/lightcase.js')}}"></script>
    <script src="{{ URL::asset('assets/js/isotope.pkgd.min.js')}}"></script>
    
    <script src="{{ URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/wow.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom.js')}}"></script>
</body>


</html>