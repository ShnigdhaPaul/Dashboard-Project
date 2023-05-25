
@extends('layout')
@section('style')   <link href="{{asset('css/auth.css')}}" rel="stylesheed">@endsection

@section('title') User Information Page @endsection
@section('contents')
<a href="{{route('user.create')}}">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#contentId" aria-expanded="false"
            aria-controls="contentId">
        Add new User
    </button>
</p>
<div class="collapse" id="contentId">
    
</div>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">role</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user )
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            @foreach ($user->roles as $role )
             <span class="badge bg-danger">{{$role->name}}</span>
                
            @endforeach
        </td>
      </tr>
    @endforeach
    
   
</table>