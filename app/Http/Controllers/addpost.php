<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class addpost extends Controller
{
    public function index()
    {
        $results = \DB::select('select * from cars');
        $resultsmodel = \DB::select('select * from car_model');
        return view('addpost',['results'=>$results],['resultsmodel'=>$resultsmodel]);
    }

    public function insert(Request $request){

        request()->validate([     

            $make = $request->input('make'),
            $model = $request->input('model'),
            $title = $request->input('title'),
            $description =$request->input('description'),
            $phone = $request->input('phone'),
            $year = $request->input('year'),
            $city = $request->input('city'),
            $price = $request->input('price'),
            $power = $request->input('power'),
            $transmission = $request->input('transmission'),
            $fuel = $request->input('fuel'),
            $km = $request->input('km'),
            $type = $request->input('type'),
           
                 ]);

            $data = array(
                'make'=>$make,
                'model'=>$model,
                'title'=>$title,
                'description'=>$description,
                'phone'=>$phone,
                'year'=>$year,
                'city'=>$city,
                'price'=>$price,
                'power'=>$power,
                'transmission'=>$transmission,
                'fuel'=>$fuel,
                'km'=>$km,
                'type'=>$type,
            
            );
            
            DB::table('content')->insert($data);


            
    }

    public function getImageAttribute()
    {
       return $this->profile_image;
    }

}
