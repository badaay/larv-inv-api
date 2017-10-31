@extends('layouts.admin')

@section('_bottom')

    <script src="{{ asset('admin/plugins/tinymce/tinymce.js')}}"></script>
    <script src="{{ asset('admin/js/pages/forms/editors.js')}}"></script>

@endsection
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <h2>Documentation</h2>
    </div>
	
	<div class="row clearfix">
	    <!-- Basic Examples -->
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="card">
	            <div class="header">
	                <h2>
	                    BASIC EXAMPLES
	                    <small>Extend the default collapse behavior to create an accordion with the panel component.</small>
	                </h2>
	                <ul class="header-dropdown m-r--5">
	                    <li class="dropdown">
	                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                            <i class="material-icons">more_vert</i>
	                        </a>
	                        <ul class="dropdown-menu pull-right">
	                            <li><a href="javascript:void(0);">Action</a></li>
	                            <li><a href="javascript:void(0);">Another action</a></li>
	                            <li><a href="javascript:void(0);">Something else here</a></li>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
	            <div class="body">
	                <div class="row clearfix">
	                    <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
	                        <b>Panel Primary</b>
	                        <div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
	                            <div class="panel panel-primary">
	                                <div class="panel-heading" role="tab" id="headingOne_1">
	                                    <h4 class="panel-title">
	                                        <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
	                                            Collapsible Group Item #1
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapseOne_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
	                                    <div class="panel-body">
	                                       <div class="body">
	                                       		<form class="form-horizontal">
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label >Sample Call</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                               <textarea id="tinymce">
					                                               		curl -u 67287:lXymG93y83m6RHzZV5FY "https://api.bukalapak.com/v2/products/kxvi.json" -H "Content-Type: application/json" -X GET
									                               </textarea>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label for="password_2">Password</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <input type="checkbox" id="remember_me_3" class="filled-in">
					                                        <label for="remember_me_3">Remember Me</label>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
					                                    </div>
					                                </div>
					                            </form>
					                            <textarea id="tinymce">
					                               
					                            </textarea>
					                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="panel panel-primary">
	                                <div class="panel-heading" role="tab" id="headingTwo_1">
	                                    <h4 class="panel-title">
	                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
	                                           aria-controls="collapseTwo_1">
	                                            Collapsible Group Item #2
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
	                                    <div class="panel-body">
	                                        <form class="form-horizontal">
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label >Sample Call</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                               <textarea id="tinymce">
					                                               		curl -u 67287:lXymG93y83m6RHzZV5FY "https://api.bukalapak.com/v2/products/kxvi.json" -H "Content-Type: application/json" -X GET
									                               </textarea>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label for="password_2">Password</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <input type="checkbox" id="remember_me_3" class="filled-in">
					                                        <label for="remember_me_3">Remember Me</label>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
					                                    </div>
					                                </div>
					                            </form>
					                            <textarea id="tinymce">
					                               
					                            </textarea>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="panel panel-primary">
	                                <div class="panel-heading" role="tab" id="headingThree_1">
	                                    <h4 class="panel-title">
	                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
	                                           aria-controls="collapseThree_1">
	                                            Collapsible Group Item #3
	                                        </a>
	                                    </h4>
	                                </div>
	                                <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
	                                    <div class="panel-body">
	                                       <form class="form-horizontal">
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label >Sample Call</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                               <textarea id="tinymce">
					                                               		curl -u 67287:lXymG93y83m6RHzZV5FY "https://api.bukalapak.com/v2/products/kxvi.json" -H "Content-Type: application/json" -X GET
									                               </textarea>
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
					                                        <label for="password_2">Password</label>
					                                    </div>
					                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
					                                        <div class="form-group">
					                                            <div class="form-line">
					                                                <input type="password" id="password_2" class="form-control" placeholder="Enter your password">
					                                            </div>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <input type="checkbox" id="remember_me_3" class="filled-in">
					                                        <label for="remember_me_3">Remember Me</label>
					                                    </div>
					                                </div>
					                                <div class="row clearfix">
					                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
					                                        <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
					                                    </div>
					                                </div>
					                            </form>
					                            <textarea id="tinymce">
					                               
					                            </textarea>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- #END# Basic Examples -->
	</div>
@endsection