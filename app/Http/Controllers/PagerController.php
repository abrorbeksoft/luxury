<?php

namespace App\Http\Controllers;


use App\Brand;
use App\Currency;
use App\Product;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class PagerController extends Controller
{


    public function home(Request $request)
    {
        $this->setDefaults();
        $defaultCurrency=Currency::where('code',Cookie::get('currency'))->first();

        $brands=Brand::all();
        $curencies=Currency::all();
        $hitProducts=Product::where([['status','1'],['hit','1']])->limit(8)->get();
        return view("welcome",['brands'=>$brands,
            'hitProducts'=>$hitProducts,'currencies'=>$curencies,
            'defaultCurrency'=>$defaultCurrency
        ]);
    }

    public function single(Request $request,$single)
    {
        $product=Product::where('alias',$single)->first();
        $this->setDefaults();

        $curencies=Currency::all();
        return view('single',['currencies'=>$curencies,'product'=>$product]);
    }

    public function men()
    {
        return view('men');
    }

    public function women()
    {
        return view('women');
    }

    public function kids()
    {
        return view('kids');
    }


    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contct');
    }
}
