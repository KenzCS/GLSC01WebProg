<?php

namespace App\Http\Controllers;



class WebsiteController extends Controller
{
   public function index(){
       return view('home');
   }

   public function compadium(){
    return view('compadium');
}
}
