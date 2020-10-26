@extends('layouts.app')

@section('content')

    <!--about-starts-->
    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                @foreach($brands as $brand)
                <div class="col-md-4 about-left">
                    <figure class="effect-bubba">
                        <img class="img-responsive" src="{{ asset('storage/'.$brand->img) }}" alt=""/>
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
                    @foreach($hitProducts as $hitProduct)
                    <div style="margin-bottom: 15px" class="col-md-3   product-left">
                        <div class="product-main   simpleCart_shelfItem">
                            <a href="{{ route('single',['alias'=>$hitProduct->alias]) }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('storage/'.$hitProduct->img) }}" alt="" /></a>
                            <div class="product-bottom">
                                <h3>Smart Watches</h3>
                                <p>Explore Now</p>
                                <h4><a class="item_add" href="#"><i></i></a>
                                    @if($defaultCurrency!=null)
                                        <span class=" item_price">{{ $hitProduct->symbol_left ?? '' }} {{ $hitProduct->price * $defaultCurrency->value }} {{ $hitProduct->symbol_right ?? '' }}</span>
                                    @else
                                        <span class=" item_price">{{ $hitProduct->symbol_left ?? '' }} {{ $hitProduct->price }} {{ $hitProduct->symbol_right ?? '' }}</span>
                                    @endif
                                    @if($hitProduct->old_price)
                                        <span class="item_price text-muted">
                                            @if($defaultCurrency!=null)
                                                <del>{{ $hitProduct->old_price * $defaultCurrency->value }}</del>
                                            @else
                                                <del>{{ $hitProduct->old_price }}</del>
                                            @endif
                                        </span>
                                    @endif
                                </h4>
                            </div>
                            @if($hitProduct->old_price>$hitProduct->price)
                                <div class="srch">
                                    <span>-{{ floor(($hitProduct->old_price-$hitProduct->price)/$hitProduct->old_price*100) }}%</span>
                                </div>
                            @endif

                        </div>
                    </div>
                    @endforeach
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--product-end-->

@endsection
