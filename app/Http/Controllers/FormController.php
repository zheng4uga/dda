<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\Contactus;
use App\Mail\Estimate;


class FormController extends Controller
{
    public function submitContactUs(Request $request){
        if($request->isMethod('post')){
            $inputs = $request->all();
            unset($inputs['_token']); 
            Mail::to('travis@ddanow.com')->send(new ContactUs($inputs));
        }
    }

    public function submitEstimate(Request $request){
        if($request->isMethod('post')){
            $inputs= $request->all();
            unset($inputs['_token']);
            Mail::to(['travis@ddanow.com'])->send(new Estimate($inputs));
        }
    }
}
