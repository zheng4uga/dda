<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;
use App\AvailableCounty;

class CountyController extends Controller
{
    //

    public function allCountry(Request $request){
        if($request->isMethod('get')){
           $allCounties = County::all();
           return response()->json($allCounties);
        }
    }

    public function countyAvailable($id, Request $request){
        if($request -> isMethod('get')){
           $response=array();
           $available =  AvailableCounty::where('county',$id)->exists();
           if($available){
               $response = array(
                   'status'=>'success',
                   'message'=> 'We service your area'
               );
           }else{
               $response = array(
                   'status'=>'failed',
                   'message'=>'We currently do not serve your area'
               );
           }
           return response()->json($response);
        }
    }
}
