<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectGallery;

class EstimateController extends Controller
{
    public function index(){
       $projects = ProjectGallery::find(1);
       var_dump($projects->directusFiles);
       exit;
    }
}
