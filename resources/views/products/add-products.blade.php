@extends('layouts.manage')
@section('content')

@if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
@endif

@if ($message = Session::get('error'))
  <div class="alert alert-danger" role="alert">
    {{ Session::get('error') }}
  </div>
@endif
<div class="row">
  <div class="col-lg-12">
    <div class="card setting" >
      <div class="card-body">
        
        <div class="row" id="insert-content">
          <div class="col-md-12 col-sm-12">
            <div class="section">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">From Excel</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">input Manually</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <form action="{{ url('project/'.$projectName.'/products/importExcel') }}" class=" form form-horizontal" method="POST"  enctype="multipart/form-data">
                      <br>
                      <input type="file" name="import_file" />
                      {{ csrf_field() }}
                      <br/>

                      <button type="submit" class="btn btn-primary">Import CSV or Excel File</button>

                    </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                      <div class="card setting" id="tambah" >
                        <div class="card-body">
                          
                          <div class="row">
                            <div class="col-md-12 col-sm-12">
                              <form id="setting-form" class="form form-horizontal" method="POST">
                                <!-- {{ csrf_field() }} -->
                                <div class="section">
                                  <div class="section-title">Add Products</div>
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

            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</div>
@if(isset($upload))
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        Import Preview
      </div>
      <div class="card-body">
        
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="section">
              <table id="preview-table" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Weight</th>
                    <th>Buy Price</th>
                    <th>Sell Price</th>
                    <th>Stock</th>
                  
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- {{ $i=1}} -->
                  @foreach($upload as $x)
                    <tr>
                      <th scope="row"> {{$i++}} </th>
                      <td>{{$x['sku']}}</td>
                      <td>{{$x['name']}}</td>
                      <td>{{$x['description']}}</td>
                      <td>{{$x['weight']}}</td>
                      <td>{{$x['buy_price']}}</td>
                      <td>{{$x['sell_price']}}</td>
                      <td>{{$x['stock']}}</td>
                      <td><input type="checkbox" name="include">
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="button" id="import-save" class="btn btn-primary">Save</button>
      </div>
    </div>
   
  </div>
</div>
@endif

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