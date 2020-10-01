<?php

namespace App\Http\Controllers;


use App\Currency;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagerController extends Controller
{
    public function home(Request $request)
    {
        if ($request->currency)
        {
            $id=$request->currency;
            $currency=Currency::find($id);
            if ($currency)
            {
                $brands=DB::table("brands")->limit(3)->get();
                $hitProducts=Product::where([['hit','1'],['status','1']])->limit(8)->get();

                return view('welcome',['currency'=>$currency,'products'=>$hitProducts,'brands'=>$brands]);
            }
            else
            {

            }
        }
        $brands=DB::table("brands")->limit(3)->get();
        $hitProducts=Product::where([['hit','1'],['status','1']])->limit(8)->get();
        return view("welcome",['brands'=>$brands,'products'=>$hitProducts]);
    }

}
