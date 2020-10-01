
<!DOCTYPE html>
<html>
<head>
    <title>Luxury Watches A Ecommerce Category Flat Bootstrap Resposive Website Template | Home :: w3layouts</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />

    <script src="{{ asset("js/jquery-1.11.0.min.js") }}"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
@section('header')
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select id="money"  tabindex="4" class="dropdown ">
                            <option value="" class="label">Dollar :</option>
                            @foreach($money as $m)
                                <option value="{{ $m->id }}" >{{ $m->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="box1">
                        <select id="lang" tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="{{ asset('storage/images/cart-1.png') }}" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="index.html"><h1>Luxury Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
                        <li class="grid"><a href="#">Men</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Women</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Kids</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
@show

@yield('content')

@section('footer')
    <div class="information">
        <div class="container">
            <div class="infor-top">
                <div class="col-md-3 infor-left">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                        <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                        <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="#"><p>Specials</p></a></li>
                        <li><a href="#"><p>New Products</p></a></li>
                        <li><a href="#"><p>Our Stores</p></a></li>
                        <li><a href="contact.html"><p>Contact Us</p></a></li>
                        <li><a href="#"><p>Top Sellers</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="account.html"><p>My Account</p></a></li>
                        <li><a href="#"><p>My Credit slips</p></a></li>
                        <li><a href="#"><p>My Merchandise returns</p></a></li>
                        <li><a href="#"><p>My Personal info</p></a></li>
                        <li><a href="#"><p>My Addresses</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Store Information</h3>
                    <h4>The company name,
                        <span>Lorem ipsum dolor,</span>
                        Glasglow Dr 40 Fe 72.</h4>
                    <h5>+955 123 4567</h5>
                    <p><a href="mailto:example@email.com">contact@example.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--information-end-->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-6 footer-left">
                    <form>
                        <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="col-md-6 footer-right">
                    <p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--footer-end-->
@show
<!--Slider-Starts-Here-->
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="{{ asset('js/simpleCart.min.js') }}"> </script>
<script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
<script>
    let currency=null;
    $('#money').change(function () {
        window.location='/?currency='+$(this).val();
        console.log($(this).val());
    });
    function changedCuurency(){
        currency=$('#money').val();
        window.location=`/?currency=${currency}`
    }
</script>
<!--End-slider-script-->
</body>
</html>




{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4">--}}
            {{--@yield('content')--}}
        {{--</main>--}}
    {{--</div>--}}
{{--</body>--}}
{{--</html>--}}
