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

   public function viewmake() {
      $cars = \DB::select('select * from cars ');

      return view('make',['cars'=>$cars]);
      
   }

   public function createmake(request $request) {
      $name = $request->   input('name');
      \DB::insert('insert into cars (car) values(?)',[$name]);
     
      return  redirect()->back()->with("success","Record added successfully !");

  } 

  public function createmakemodel(request $request) {
   $name = $request->input('make');
   $idd = \DB::table('cars')->where('car', $name)->get('id');
   foreach($idd as $id)
   $i = $id->id;
   $model = $request->input('model');

   \DB::table('car_models')->insert(
      ['car_model' => $name, 'car_id' => $i]
  );
  
   return  redirect()->back()->with("success","Record added successfully !");

} 
      
   
}