@extends('layouts.setting')
@section('content')
<!-- <div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-green-light" id="setting-add">
      <div class="card-body">
        <i class="icon fa fa-shopping-basket fa-3x"></i>
        <div class="content">
          <div class="title">Add New App</div>
          <div class="value"><span class="sign">$</span>420</div> -->
     <!--    </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-blue-light">
      <div class="card-body">
        <i class="icon fa fa-thumbs-o-up fa-3x"></i>
        <div class="content">
          <div class="title">User</div> -->
          <!-- <div class="value"><span class="sign"></span>2453</div> -->
   <!--      </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-yellow-light">
      <div class="card-body">
        <i class="icon fa fa-user-plus fa-3x"></i>
        <div class="content">
          <div class="title">New Registration</div> -->
     <!--      <div class="value"><span class="sign"></span>50</div>
        </div>
      </div>
    </a>
  </div> 
</div> -->
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-body">
      <div class="title">
          Server Key <button class="btn btn-default" style="padding: 0px" onclick="copyToClipboard('#token-field')"><span class="fa fa-clone"></span></button>
      </div>
        <code style="padding: 10px;font-size: 90%;color: #333;background-color: #d5ecf1;border-radius: 4px;border: 1px solid #c3e0f9;display: block;word-wrap: break-word;" id="token-field"> {{$token}} </code>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
  <!--     <div class="card-header">
        Active Applications
      </div> -->
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
                      <td>
                        
                        <code  style="padding: 10px;font-size: 90%;color: #333;background-color: #d5ecf1;border-radius: 4px;border: 1px solid #c3e0f9;display: block;word-wrap: break-word;" id="token-project"><button class="btn btn-link" style="padding: 0px;" onclick="copyToClipboard('#token-project')"><span class="fa fa-clone"></span></button>
                          {{$x['app_key']}}
                        </code>
                      </td>
                      <td>
                      <form action="{{url('application/'.$x['id'])}}" method="POST">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="button" class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                        <button type="submit" class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
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
  </div>
</div>
@endsection

@section('extraJs')
<script type="text/javascript">
  console.log($('#token-field').val());
  $('#setting-table').DataTable({
    'searching': false,
    'info' :false,
    'paging'  : false
  });
  $('#server-table').DataTable({
    'searching': false,
    'info' :false,
    'paging'  : false
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