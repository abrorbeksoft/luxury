<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Support\Facades\DB;

class PagerController extends Controller
{
    public function home()
    {
        $brands=DB::table("brands")->limit(3)->get();
        $hitProducts=Product::where([['hit','1'],['status','1']])->limit(8)->get();
        return view("welcome",['brands'=>$brands,'products'=>$hitProducts]);
    }

}
