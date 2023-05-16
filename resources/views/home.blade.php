@extends('layout')
@section('title') Home @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">{{session('msg')}}</div>

@endif

@endsection