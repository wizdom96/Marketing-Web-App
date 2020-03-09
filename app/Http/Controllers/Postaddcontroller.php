<?php

namespace App\Http\Controllers;

use App\Postadd;
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
        if ($request->hasfile('filename')){

            foreach($request->file('filename') as $image)

            {
                $name=$image->getClientOriginalName();
                $image->move('uploads/content/', $name);
                $data[] = $name;
            }
        }
            else {
            
                return $request;
                $highlights->image = '';
            
        }

            $content->image = json_encode($data);
            $content->save();
            return back();
    }
}
