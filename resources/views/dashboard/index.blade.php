@extends('layout')
@section('title') Dashboard @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">Dashboard Page</div>

@endif

@endsection