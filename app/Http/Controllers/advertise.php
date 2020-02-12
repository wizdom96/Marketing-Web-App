<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class advertise extends Controller
{
    public function index() {
        $results = \DB::select('select * from content where approved=1');
        return view('index',['results'=>$results]);
     }
     public function view_product($id){
      
      $res = \DB::table('content')->where('id', $id)->get()->groupBy('id');
      return view('product',['res'=>$res]);
      

   }
  }