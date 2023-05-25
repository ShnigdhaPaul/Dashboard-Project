<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Mail\UserMailer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    function __construct()
  {
    $this->middleware('auth');
  }
  
 function display()
 {
    $users= User::all();
    return view ('dashboard.users.index', compact(['users']));

    
 }
function create()
{
  $this->authorize('can-create');
    $roles=Role::all();
    return view('dashboard.users.create', compact(['roles']));
}
function store(Request $request)
{
  $this->authorize('can-create');
    $request->validate([
 'name'=> ['required'],
 'email'=>[ 'email','required', 'unique:users'],
 'password'=>['required','min:8','confirmed'],
    ]);
    try{

      $user= User::create([
          'name'=>$request->input('name'),
          'email'=>$request->input('email'),
          'password'=> Hash::make($request->password)

      ]);

$user->roles()->syncWithoutDetaching($request->roles,[]);
//send a mail
//Mail::to($user->email)->send(new UserMailer($user));

//add to queue

Mail::to($user->email)->later(now()->addSecond(20),new UserMailer($user));

      return redirect()->route('user.display')->with('msg', 'Member ADDED');
      
    }catch(\Exception $e){

      return redirect()->back()->with('msg', 'MEMBER NOT ADDED. Please try again');
}



 }


 
}
