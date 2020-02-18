<?php

namespace App\Http\Controllers;
use App\Postadd;
use Illuminate\Http\Request;

class Postaddcontroller extends Controller
{
    public function index()
    {
        $results = \DB::select('select * from cars');
        $resultsmodel = \DB::select('select * from car_model');
        return view('addpost',['results'=>$results],['resultsmodel'=>$resultsmodel]);
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
