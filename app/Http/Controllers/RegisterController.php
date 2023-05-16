<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Expectation;

class RegisterController extends Controller
{

  function __construct()
  {
    $this->middleware('guest');
  }
  
   public function index()
   {
     return view('auth.register');
   }

   public function store(Request $request)
   {
      $request->validate([
   'name'=> ['required'],
   'email'=>[ 'email','required', 'unique:users'],
   'password'=>['required','min:8','confirmed'],
      ]);
      try{

        User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=> Hash::make($request->password)

        ]);
        Auth::attempt($request->only('email','password'));

        return redirect()->route('login')->with('msg', 'Registration Successfull.Please Login');
      }catch(\Exception $e){

        return redirect()->back()->with('msg', 'User not register. Please try again');
      }
   }
}
