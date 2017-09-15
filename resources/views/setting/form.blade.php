@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-green-light" id="setting-add">
      <div class="card-body">
        <i class="icon fa fa-shopping-basket fa-3x"></i>
        <div class="content">
          <div class="title">Add New App</div>
          <!-- <div class="value"><span class="sign">$</span>420</div> -->
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-blue-light">
      <div class="card-body">
        <i class="icon fa fa-thumbs-o-up fa-3x"></i>
        <div class="content">
          <div class="title">User</div>
          <!-- <div class="value"><span class="sign"></span>2453</div> -->
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-yellow-light">
      <div class="card-body">
        <i class="icon fa fa-user-plus fa-3x"></i>
        <div class="content">
          <div class="title">New Registration</div>
          <!-- <div class="value"><span class="sign"></span>50</div> -->
        </div>
      </div>
    </a>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card card-banner">
      <div class="card-body">
        <!-- <i class="icon fa fa-shopping-basket fa-3x"></i> -->
        <div class="content">
          <div class="title">token</div>
          <div class="value">{{ $token }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card setting" id="lihat" onload="setting_data_view({{ $apps }})" >
      <div class="card-header">
        Active Applications
      </div>
      <div class="card-body">
        
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="section">
              <table id="setting-table" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Tipe</th>
                    <th>key</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- {{ $i=1}} -->
                  @foreach($apps as $x)
                    <tr>
                      <th scope="row"> {{$i++}} </th>
                      <td>{{$x['name']}}</td>
                      <td>{{$x['description']}}</td>
                      <td>{{$x['tipe']}}</td>
                      <td>{{$x['app_key']}}</td>
                      <td><button type="button" class="btn btn-defaul btn-sm"><span class="fa fa-edit"></span></button>
                      <form action="{{url('application/'.$x['id'])}}" method="POST">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-default btn-sm"><span class="fa fa-remove"></span></button>
                      </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card setting" id="tambah" style="display: none;">
      <div class="card-header">
        Add New Applications
      </div>
      <div class="card-body">
        
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <form id="setting-form" class="form form-horizontal" method="POST">
              <!-- {{ csrf_field() }} -->
              <div class="section">
                <div class="section-title">Information</div>
                <div class="section-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Name</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="name" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-3">
                      <label class="control-label">Description</label>
                      <p class="control-label-help">( short detail of products , 150 max words )</p>
                    </div>
                    <div class="col-md-9">
                      <textarea class="form-control" name="description" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Type</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name="type" placeholder="" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-footer">
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('extraJs')
<script type="text/javascript">
  $('#setting-table').DataTable({
    'searching': false
  });
</script>
@endsection