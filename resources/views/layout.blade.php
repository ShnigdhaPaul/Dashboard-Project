<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="{{asset('js/app.js')}}"></script>
   <link href="{{asset('css/app.css')}}" rel="stylesheed">

 
   <title>@yield('title')</title>
    
</head>



<body>
    @yield('style') 
    @include('inc.nav')
   
    <div class="container">
        <div class="row">
            @yield('contents')
        </div>
    </div>
        
    
</body>
</html>