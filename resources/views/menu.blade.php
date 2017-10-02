@extends('layouts.dashboard')

@section('content')

<div class="row" >
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a href=" {{url('project/'.$projectName.'/products')}} " class="card card-banner card-green-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-cube fa-4x"></i>
          <div class="content">
            <div class="title">  </div>
            <div class="value"><span class="sign">Products</span></div>
          </div>
        </div>
      </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-orange-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-flag fa-4x"></i>
          <div class="content">
            <div class="title">  </div>
            <div class="value"><span class="sign">Brands</span></div>
          </div>
        </div>
      </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-blue-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-cubes fa-4x"></i>
          <div class="content">
            <div class="title">  </div>
            <div class="value"><span class="sign">Categories</span></div>
          </div>
        </div>
      </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-yellow-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-group fa-4x"></i>
          <div class="content">
            <div class="title">  </div>
            <div class="value"><span class="sign">Supplier</span></div>
          </div>
        </div>
      </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-red-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-calendar fa-4x"></i>
          <div class="content">
            <div class="title">  </div>
            <div class="value"><span class="sign">History</span></div>
          </div>
        </div>
      </a>
  </div>
</div>
@endsection
