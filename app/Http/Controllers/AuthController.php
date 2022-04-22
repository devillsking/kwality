<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User,plan};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }

      
    public function store(Request $request){
      $validation = Validator::make($request->all(),[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|min:6',
        ]);

        if($validation->fails()){
            return back()->withErrors($validation->errors());
        }

        $check = User::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>Hash::make($request->password)
            ]);

            return back()->with('status',"Login Success full");
    }

       public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return "login succsess full";
        }
        return redirect("login");
        }

        
}
