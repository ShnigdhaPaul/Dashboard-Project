@extends('layout')
@section('title') Dashboard @endsection
@section('contents')

@if (session()->has('msg'))
<div class="alert alert-primary ">Dashboard Page</div>

@endif
			              
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="container bootstrap snippets bootdey">
    <div class="col-md-12">
        <h2 class="text-primary"> 
            <i class="fa fa-tachometer"></i>
            Home menu
        </h2>
        <hr>
        <div class="row">  
            <div class="col-md-3">
                <div class="panel panel-info ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-calculator fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">&nbsp;</p>
                                <p class="announcement-text">User-List</p>
                            </div>
                        </div>
                       
                    </div>
                    <a href="{{route('user.create')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">Add a member</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                    
                    <a href="{{route('user.display')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">View</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="panel panel-success ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-leanpub fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">&nbsp;</p>
                                <p class="announcement-text">Product-List</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('product.create')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">Add a product</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                    <a href="{{route('product.index')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">View</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="panel panel-warning ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-flask fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">&nbsp;</p>
                                <p class="announcement-text">Science</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('user.create')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">View</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="panel panel-danger ">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <i class="fa fa-video-camera fa-5x"></i>
                            </div>
                            <div class="col-xs-6 text-right">
                                <p class="announcement-heading">&nbsp;</p>
                                <p class="announcement-text">Video</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('user.create')}}">
                        <div class="panel-footer announcement-bottom">
                            <div class="row">
                                <div class="col-xs-6">View</div>
                                <div class="col-xs-6 text-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div> 
            </div>
        </div>
    </div>
    
    <div class="col-md-12">     
      <div class="container bootstrap snippets bootdey">     
        <footer class="footer">
            <hr/>
            <p>&copy; Paul Learning</p>
        </footer>
      </div>
    </div>
</div>

@endsection