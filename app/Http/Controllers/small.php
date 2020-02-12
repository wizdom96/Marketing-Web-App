<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class small extends Controller
{
    public function index()
    {
        return view('small');
    }

    public function insert(Request $request){

        request()->validate([
            $smalltest = $request->input('smalltest')
            ]);
            $data = array ('smalltest'=>$smalltest);
            DB::table('smalltest')->insert($data);
            
    }

  
}