<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        
        return view('landing-page');
    }

    public function orders($id){
        $data = Product::find($id);
        return view('order')->with('data',$data);
    }
}
