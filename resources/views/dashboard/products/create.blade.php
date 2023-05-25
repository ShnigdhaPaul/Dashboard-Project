@extends('layout')
@section('style')   <link href="{{asset('css/auth.css')}}" rel="stylesheed">@endsection

@section('title') New Product @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">{{session('msg')}}</div>
    
@endif

    

    </head>
    <body>
        
    <div class="signup-form">
        <form action="{{route('product.store')}}" method="post">
            @csrf
            <h2>Add A new product</h2>
            <p>It's free and only takes a minute.</p>
            <hr>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" required="required">
                @error('name'){{$message}}@enderror
                <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" name="quantity" required="required">
                @error('quantity'){{$message}}@enderror
            </div>
                  
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="number" class="form-control" name="amount" required="required">
                @error('amount'){{$message}}@enderror
            </div>
            
             
            </select>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Add Product</button>
            
    </body>

@endsection