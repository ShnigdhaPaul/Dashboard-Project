
@extends('layout')
@section('style')   <link href="{{asset('css/auth.css')}}" rel="stylesheed">@endsection

@section('title') Product Information Page @endsection
@section('contents')
<a href="{{route('product.create')}}">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
            aria-controls="contentId">
        Add new Product
    </button>
</p>
<div class="collapse" id="contentId">
    
</div>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">quantity</th>
      <th scope="col">amount</th>
      <th scope="col">Created By</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product )
    @can('view', $product)
        
 
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->user->name}}</td>
      </tr>
      @endcan
    @endforeach
    
   
</table>