<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="{{asset('js/app.js')}}"></script>
   <link href="((asset('css/app.js')))" rel="stylesheed"

    <title>@yield('title')</title>
    
</head>
<style>
    body {
        color: #fff;
        background: #abbddd;
        font-family: 'Roboto', sans-serif;
    }
    .form-control {		
        min-height: 41px;
        box-shadow: none;
        border-color: #e1e4e5;
    }
    .form-control:focus {
        border-color: #49c1a2;
    }
    .form-control, .btn {        
        border-radius: 3px;
    }
    .signup-form {
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signup-form form {
        color: #000000;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #7475b1;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .signup-form h2 {
        color: #5aa8a8;
        font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
    .signup-form .form-group {
        margin-bottom: 20px;
    }
    .signup-form label {
        font-weight: normal;
        font-size: 14px;
    }
    .signup-form .btn, .signup-form .btn:active {
        font-size: 16px;
        font-weight: bold;
        background: #9c9dbe !important;
        border: none;
        min-width: 140px;
    }
    .signup-form .btn:hover, .signup-form .btn:focus {
        background: #cbc9d4 !important;
    }
    .signup-form a {
        color: #860d0d7e;
        text-decoration: underline;
    }
    .signup-form a:hover {
        text-decoration: none;
    }
    .signup-form form a {
        color: #323330;
        text-decoration: none;
    }	
    .signup-form form a:hover {
        text-decoration: underline;
    }
    </style>


<body>
    @include('inc.nav')
   
    <div class="container">
        <div class="row">
            @yield('contents')
        </div>
    </div>
        
    
</body>
</html>