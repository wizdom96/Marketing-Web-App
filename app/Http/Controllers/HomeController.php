<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $results = \DB::select('select * from content where approved=0');
        $resultss = \DB::select('select * from content where sponsored= 9 ');
        return view('home',['results'=>$results],['resultss'=>$resultss]);
        
    }

    public function approvead($id){
        \DB::table('content')->where('id', $id)->update(array('approved' => '1'));
            return back();
       }

       public function sponsored($id){
        \DB::table('content')->where('id', $id)->update(array('sponsored' => '9'));
            return back();
       }
       public function unsponsored($id){
        \DB::table('content')->where('id', $id)->update(array('sponsored' => '0'));
            return back();
       }

       public function deletead($id){
        \DB::table('content')->where('id', $id)->delete();
            return back();
       }

       public function approvespon($id){
        \DB::table('content')->where('id', $id)->update(array('sponsored' => '1'));
            return back();
       }

       public function deletespon($id){
        \DB::table('content')->where('id', $id)->update(array('sponsored' => '0'));
            return back();
       }


       public function deleteuser($id){
        \DB::table('users')->where('id', $id)->delete();
            return back();
       }
      
}
