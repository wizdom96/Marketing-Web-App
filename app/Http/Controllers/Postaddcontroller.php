<?php

namespace App\Http\Controllers;

use App\Postadd;
use Illuminate\Http\Request;
use DB;
use App\ImagesUpload;

class Postaddcontroller extends Controller
{
    public function myform()
    {
        $make = DB::table("cars")->pluck("car","id");
        return view('newad',compact('make'));   
    
    }

    

    public function myformAjax($id){
       $model = DB::table("car_models")
       ->where("car_id",$id)
    
       ->get();
   
       return $model;
    }

    public function store(Request $request) {

        $content = new Postadd();
       
        $content->make = $request->input('make');
        $content->model = $request->input('model');
        $content->title = $request->input('title');
        $content->description = $request->input('description');
        $content->phone = $request->input('phone');
        $content->year = $request->input('year');
        $content->city = $request->input('city');
        $content->price = $request->input('price');
        $content->transmission = $request->input('transmission');
        $content->fuel = $request->input('fuel');
        $content->km = $request->input('km');
        $content->power = $request->input('power');
        $content->type = $request->input('type');
        $content->user_id = $request->input('invisible');
        $content->sponsored = $request->input('sponsored');
        $content->save();


        $images       =       array();
        if($files     =       $request->file('images')) {
            foreach($files as $file) {
                $name     =    rand(1,9999).'.'.$file->getClientOriginalExtension();

                $destinationPath = public_path('/uploads/content');

                if($file->move($destinationPath, $name)) {

                    $images[]   =   $name;
                   
                    $saveResult   =   ImagesUpload::create(['image_name' => $name, 'content_id'=> $content->id]);
                }

            }



        }

            return back();
    }
}
