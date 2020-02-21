<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

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
    //    ->pluck("car_model","id");
       ->get();
    //    return json_encode($model);
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
        if ($request->hasfile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move ('uploads/content/', $filename);
            $content->image=$filename;
        } else {
            
                return $request;
                $highlights->image = '';
            
        }

            $content->save();
            return back();
    }
}
