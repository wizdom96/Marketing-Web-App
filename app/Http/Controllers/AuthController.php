<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

 
class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  
    public function registration()
    {
        return view('register');
    }
    

    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
                    // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function userRegistration(Request $request)
    {
        
        request()->validate([
            'name' => ['required', 'string', 'max:255',],
            'city' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => 'min:8|confirmed',
        ]);
        

        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'city' => $data['city'],
        'mobile' => $data['mobile'],
        'password' => Hash::make($data['password']),
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

  

    public function dashboard()
    {
 
      if(Auth::check()){
        return view('home');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
    public function viewads($user_id){

        $results = \DB::table('content')->where('user_id', $user_id)->get();
        return view('details',['results'=>$results]);
    }

    public function storeform(Request $request){

        $userId = Auth::id();
        $user = User::findOrFail($userId);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'mobile' => 'required|email|max:225|',
        ]);

        $user->fill([
            'name' => $request->name,
            'city' => $request->city,
            'mobile' => $request->mobile
        ]);
        $user->save();
        return  redirect()->back()->withwith("success","Details updated successfully !");

    } 

    public function showform(){
        return view ('updateprofile');
    }
    
    public function passwordform(){
        return view ('updatepassword');
    }

   


    public function passwordstore(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }

    public function allusers(){

        $users = \DB::select('select * from users where permission=0');
        return view('details', compact('users'));
    }
}


