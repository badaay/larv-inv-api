@extends('layouts.manage')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card setting">
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
                  @foreach($products as $x)
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

  function copyToClipboard(element){
    var $temp = $("<input>");
    $('body').append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
  }
</script>
@endsection