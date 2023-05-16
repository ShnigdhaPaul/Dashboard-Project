@extends('layout')
@section('title') Home @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">{{session('msg')}}</div>
    
@endif

    

    </head>
    <body>
    <div class="signup-form">
        <form action="{{route('register')}}" method="post">
            @csrf
            <h2>Sign Up</h2>
            <p>It's free and only takes a minute.</p>
            <hr>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="name" required="required">
                @error('name'){{$message}}@enderror
                    
                
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" required="required">
                @error('email'){{$message}}@enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="required">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
            <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a></p>
        </form>
        <div class="text-center">Already have an account? <a href="{{route('login')}}">Login here</a></div>
    </div>
    </body>

@endsection