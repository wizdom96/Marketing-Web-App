<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postContent extends Controller
{      
    public function insertPost(Request $request)
    {

        request()->validate([
            'make' => ['required', 'string', 'max:255',],
            'model' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255',],
            'city' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'power' => ['required', 'string', 'max:255',],
            'transmission' => ['required', 'string', 'max:255'],
            'fuel' => ['required', 'string', 'max:255'],
            'km' => ['required', 'string', 'max:255',],
            'type' => ['required', 'string', 'max:255'],
                    ]);
        

        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
 
    public function create(array $data)
    {
      return User::create([
        'make' => $data['make'],
        'model' => $data['model'],
        'title' => $data['title'],
        'description' => $data['description'],
        'year' => $data['year'],
        'city' => $data['city'],
        'price' => $data['price'],
        'power' => $data['power'],
        'transmission' => $data['transmission'],
        'fuel' => $data['fuel'],
        'km' => $data['km'],
        'type' => $data['type'],
        'approved' => $data['approved'],
      ]);
    }
}
