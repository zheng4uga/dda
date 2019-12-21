<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;

class CountyController extends Controller
{
    //

    public function allCountry(Request $request){
        if($request->isMethod('get')){
           $allCounties = County::all();
           return response()->json($allCounties);
        }
    }
}
