<?php

namespace App\Http\Controllers;
use DB;
use App\Postadd;
use Illuminate\Http\Request;

class advertise extends Controller
{
    public function index() {
      $make = DB::table("cars")->pluck("car","id");
        $results = Postadd::where('approved', '=', 1)->paginate(7);
        return view('index',['results'=>$results,'make'=>$make]);
        
     }

     public function modelselect($id){
      $model = DB::table("car_models")
      ->where("car_id",$id)
   
      ->get();
  
      return $model;
   }

   public function search(Request $request) {
        
      $make = DB::table("cars")->pluck("car","id");
      $query = DB::table('content');

      if($request)
      $query->where('approved', '=', 1);


      if($request->title)
      $query->where('title', 'LIKE', '%' . $request->title . '%');
   

      if($request->make)
      $query->where('make', '=', $request->make);

      if($request->model)
      $query->where('model', '=', $request->model);


       if($request->minprice)
      $query->where('price', '>', $request->minprice);
   
      if($request->maxprice)
       $query->where('price', '<', $request->maxprice);
   
      if($request->fyear)
      $query->where('year', '>', $request->fyear);

      if($request->toyear)
      $query->where('year', '<', $request->toyear);
   
      if($request->fuel)
      $query->where('fuel', '=', $request->fuel);
  
   
       $results = $query->paginate(7);
        return view('index',['results'=>$results,'make'=>$make]);
        
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