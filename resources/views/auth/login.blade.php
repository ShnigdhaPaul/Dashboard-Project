@extends('layout')
@section('title') Home @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">{{session('msg')}}</div>
    
@endif



    </head>
    <body>
    <div class="login-form">
        <form action="{{route('login')}}" method="post">
            @csrf
            <h2 class="text-center">Login</h2>   
            <div class="form-group has-error">

                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>        
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </div>
            <p><a href="#">Lost your Password?</a></p>
        </form>
        <p class="text-center small">Don't have an account? <a href="#">Sign up here!</a></p>
    </div>
    </body>
    @endsection