<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 function __construct()
 {
   $this->middleware('guest')->except('logout');
   $this->middleware('auth')->only('logout');
 }
   public function index()
   {
     return view('auth.login');
   }

   public function store(Request $request)
   {
      $request->validate([
   'email'=>[ 'email','required'],
   'password'=>['required','min:8'],
      ]);
      try{

        Auth::attempt($request->only('email','password'));
        $request->session()->regenerate();
        return redirect()->route('home');
        
      }catch(\Exception $e){

        return redirect()->back()->with('msg', 'Problem in Login. Please try again');
      }
   }

   public function logout()
   {
      Auth::logout();
    return redirect()->route('login');
   }
}
