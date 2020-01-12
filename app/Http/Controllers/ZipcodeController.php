<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zipcode;

class ZipcodeController extends Controller
{
    public function allZipcodes(Request $request){
        if($request->isMethod('get')){
          $zipcodes =   Zipcode::all();
          return $zipcodes->toJson();
        }
    }

    public function zipcodeAvailable($zipcode,Request $request){
        if($request->isMethod('get')){
            $available = Zipcode::where('zipcode',$zipcode)->exists();
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
