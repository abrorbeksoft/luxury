@extends('layouts.app')

@section('header')
    @parent
@endsection

@section('content')
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

    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                @foreach($brands as $brand)
                    <div class="col-md-4 about-left">
                        <figure class="effect-bubba">
                            <img class="img-responsive" src="{{ asset('storage')}}/{{ $brand->img }}" alt=""/>
                            <figcaption>
                                <h2>{{ $brand->name }}</h2>
                                <p>{{ $brand->description }}</p>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--about-end-->

    <!--product-starts-->
    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">
                    @foreach($products as $product)
                        <div class="col-md-3 product-left mb-3">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="single.html" class="mask">
                                    <img class="img-responsive zoom-img" src="{{ asset('storage') }}/{{ $product->img  }}" alt="" /></a>
                                <div class="product-bottom">
                                    <h3>{{ $product->title }}</h3>
                                    <p>Explore Now</p>
                                    <h4>
                                        <a class="item_add" href="#"><i></i></a>
                                        <span class=" item_price">$ {{ $product->price }}</span>
                                        @if($product->old_price)
                                            <span><small><del>{{ $product->old_price }}</del></small></span>
                                        @endif
                                    </h4>
                                </div>
                                <div class="srch">
                                    @if($product->old_price)
                                        <span>- {{  round(($product->old_price-$product->price)/$product->old_price,3)*100 }} %</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
    <!--product-end-->
    <!--information-starts-->
@endsection

@section('footer')
    @parent
@endsection
