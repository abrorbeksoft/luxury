<!DOCTYPE html  >
<html lang="en" >
<head>
    <title>Luxury Watches A Ecommerce Category Flat Bootstrap Resposive Website Template | Home :: w3layouts</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />

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
                        <select id="currency" tabindex="4" class="dropdown drop">
                            @isset($defaultCurrency)
                            @if($defaultCurrency!=null)
                                    <option  value="" class="label">{{ $defaultCurrency->title }} :</option>
                                @else
                                    <option  value="" class="label">Dollar :</option>
                            @endif
                            @endisset
                            @foreach($currencies as $currency)
                                <option value="{{ $currency->id }}">{{ $currency->symbol_left ?? '' }} {{ $currency->title }} {{ $currency->symbol_right ?? '' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="box1">
                        <select id="lang" tabindex="4" class="dropdown">
                            <option value="" class="label">{{ \Illuminate\Support\Facades\App::getLocale() }} :</option>
                            <option value="1"> {{ __('home.en') }} </option>
                            <option value="2">{{ __('home.ru') }}</option>

                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">

                @auth
                <div class="cart box_1">
                    <div class="cart box_1 grid">
                        <ul class="memenu skyblue">
                            <li class="active">

                            <li class="grid">
                                <div  style="background-color:white; padding: 5px 10px; margin-left: 10px; border:1px solid white; border-radius: 100%;">U</div>
                                <div style="padding: 10px; width: 70px;" class="mepanel">
                                    <div onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</div>
                                    <form id="logout" style="display: none" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                </div>
                            </li>   
                        
                        </ul>
                    </div>
                    <a href="checkout.html">
                        <div class="total">
                            <span class="simpleCart_total"></span></div>
                        <img src="{{ asset('storage/images/cart-1.png') }}" alt="" />
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>

                @endauth
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="{{ route('home') }}"><h1>{{ __('home.title')  }}</h1></a>
</div>
<!--start-logo-->

<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="{{ route('home') }}">{{ __('home.home') }}</a></li>
                        <li class="grid"><a href="#">{{ __('home.men') }}</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>{{ __('home.shop') }}</h4>
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
                        <li class="grid"><a href="#">{{ __('home.women') }}</a>
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
                        <li class="grid"><a href="#">{{ __('home.kids') }}</a>
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
                        <li class="grid"><a href="typo.html">{{ __('home.blog') }}</a>
                        </li>
                        <li class="grid"><a href="contact.html">{{ __('home.contact') }}</a>
                        </li>
                        @guest
                            <li class="grid"><a href="{{ route('login') }}">{{ __('home.login') }}</a></li>
                            <li class="grid"><a href="{{ route('register')}}">{{ __('home.register') }}</a></li>
                        @endguest

                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="{{ __('home.search') }}" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
@show

@section('banner')
<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="{{ asset('storage/images/bnr-1.jpg') }}" alt=""/>
            </li>
            <li>
                <img src="{{ asset('storage/images/bnr-2.jpg') }}" alt=""/>
            </li>
            <li>
                <img src="{{ asset('storage/images/bnr-3.jpg') }}" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
@show

@yield('content')

@section('footer')
<!--information-starts-->
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

<script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>

<!-- FlexSlider -->
<script src="{{ asset('js/imagezoom.js') }}"></script>
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>

<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="{{ asset('js/simpleCart.min.js') }}"> </script>

<script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
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
<script>
    $("#lang").change(function () {
//        console.log($(this).val())
        switch ($(this).val())
        {
            case '1' : window.location='/lang?lang=en'; break;
            case '2' : window.location='/lang?lang=ru'; break;
            default : break;
        }
    });

    $("#currency").change(function () {
          console.log($(this));
        switch ($(this).val())
            {
            case '1' : window.location='/currency?currency=USD'; break;
            case '2' : window.location='/currency?currency=EUR'; break;
            case '3' : window.location='/currency?currency=UAH';  break;
            default :  break;
        }
    })
</script>
</body>
</html>