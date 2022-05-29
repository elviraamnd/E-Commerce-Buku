<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- title -->
	<title>BooksNow | Online Shopping</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ URL::asset('admintemplate/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/bootstrap/css/bootstrap.min') }}.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ URL::asset('admintemplate/css/responsive.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @livewireStyles
</head>
<body>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="index.html">
                               <h1 style="color:rgba(173, 115, 9, 0.998)">BooksNow</h1> {{-- <img src="{{ URL::asset('admintemplate/img/logo.png') }}" alt=""> --}}
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="{{ route('user.home') }}">Home</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html">Static Home</a></li>
                                        <li><a href="index_2.html">Slider Home</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li><a href="#">Pages</a> --}}
                                    {{-- <ul class="sub-menu">
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="news.html">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="single-news.html">Single News</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="contact.html">Contact</a></li> --}}
                                <li><a href="{{ route('user.shop.index') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="single-product.html">Single Product</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li>
                                    <div class="header-icons">
                                        @if(!empty(Auth::guard('web')->user()->id))
        
                                        @livewire('add-cart')
                                        @endif
                                        <a class="shopping-cart" href="{{ route('user.history.transaction.index') }}"><i class="fas fa-credit-card"></i></a>
                                        <a class="shopping-cart" href="{{ route('user.notification') }}"><i class="fas fa-bell"></i></a>
                                        <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        @if(empty(Auth::guard('web')->user()->id))
                                        <a class="shopping-cart" href="{{ route('user.login') }}"><i class="fas fa-user"></i></a>
                                        @else
                                        <form style="display: inline" action="{{ route('user.logout') }}" method="post">
                                            @csrf
                                            <button class="shopping-cart" style="background: transparent;color:white;border:none;" id="btn-submit" type="submit"><i class="fas fa-sign-out-alt"></i></button>
                                        </form>

                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->
	@yield('section')
	<!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About us</h2>
                        <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>nusa penida.</li>
                            <li>Booksnowt@gmail.com</li>
                            <li>+08 123 92 17 8291</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>Subscribe to our mailing list to get the latest updates.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy; 2022 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
                        Distributed By - <a href="https://themewagon.com/">Kelompok 17 praktikum prognet 2022</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('swal',function(e) {
            Swal.fire({
                title:  e.detail.title,
                type: "success",
                timer: 3000,
                toast: true,
                position: 'top-right',
                toast:  true,
                showConfirmButton:  false,
            });
        });
    </script>
    {{-- Sweetalert --}}
    @include('sweetalert::alert')   
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <!-- end copyright -->
	<!-- jquery -->
	<script src="{{ URL::asset('admintemplate/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ URL::asset('admintemplate/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ URL::asset('admintemplate/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ URL::asset('admintemplate/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ URL::asset('admintemplate/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ URL::asset('admintemplate/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ URL::asset('admintemplate/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ URL::asset('admintemplate/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ URL::asset('admintemplate/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ URL::asset('admintemplate/js/main.js') }}"></script>
    @livewireScripts
</body>
</html>