<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');

   }
   public function getIndex(){

       $data=[];
       $data['id']=5;
       $data['name']= 'hanane';
       return view('welcome', $data);
   }
}
