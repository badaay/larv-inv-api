@extends('layouts.dashboard-no-sidebar')
@section('content')
<div id="lihat">
  <div style="padding: 10px;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-green-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-plus fa-4x"></i>
          <div class="content">
            <div class="title"> Product </div>
            <div class="value"><span class="sign"></span></div>
          </div>
        </div>
      </a>
  </div>
  <div style="padding: 10px;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-green-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-plus fa-4x"></i>
          <div class="content">
            <div class="title"> Suppliers </div>
            <div class="value"><span class="sign"></span></div>
          </div>
        </div>
      </a>
  </div>
  <div style="padding: 10px;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-green-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-plus fa-4x"></i>
          <div class="content">
            <div class="title"> Transaction </div>
            <div class="value"><span class="sign"></span></div>
          </div>
        </div>
      </a>
  </div>
  <div style="padding: 10px;" class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <a class="card card-banner card-green-light" id="setting-add">
        <div class="card-body">
          <i class="icon fa fa-plus fa-4x"></i>
          <div class="content">
            <div class="title"> Trash </div>
            <div class="value"><span class="sign"></span></div>
          </div>
        </div>
      </a>
  </div>
</div>
@endsection
@section('content1')
<div class="row">
  <div class="col-lg-12" style="padding: 0px;">
    <div class="col-md-3 col-lg-3 col-sm-12">
      <div class="card">
        <!--   <div class="card-header">
          list documentation
        </div> -->
        <div class="card-body">
          Products
          <div class="list-group __timeline">
            <a href="#" class="list-group-item">
              Add products
            </a>
            <a href="#" class="list-group-item">
              View products
            </a>
          </div>
          <div class="list-group __timeline">
            Brands
            <a href="#" class="list-group-item">
              Add Brands
            </a>
            <a href="#" class="list-group-item">
              View Brands
            </a>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-lg-9 col-sm-12">
      <div class="card">
        <div class="card-header">Add products</div>
        <div class="card-body">
          <ul>
            <li>URL
              <ul><pre><code> {{url('project/{projectName}/products')}}</code> </pre></ul>
            </li>
            <li>Method
              <ul><code>POST</code></ul>
            </li>
            <li>URL Params
              <!-- <ul>Required:</ul>
              <ul><code>id=[integer]</code></ul> -->
              <ul>none</ul>
            </li>
            <li>Data Param
              <ul>
                <table class="table table-bordered table-striped">
                  <thead>
                    <th>parameter</th>
                    <th>value</th>
                    <th>description</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td><code>name</code></td>
                      <td><code>varchar</code></td>
                      <td>name of identification item products</td>
                    </tr>
                    <tr>
                      <td><code>sku</code></td>
                      <td><code>varchar</code></td>
                      <td>sku or unique code of identification item products, you can fill this with your own code, or leave this empty to get random unique id for this item</td>
                    </tr>
                    <tr>
                      <td><code>description</code></td>
                      <td><code>text</code></td>
                      <td>description of identification item products</td>
                    </tr>
                    <tr>
                      <td><code>weight</code></td>
                      <td><code>double</code></td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <td><code>buy_price</code></td>
                      <td><code>double</code></td>
                      <td>buy_price of identification item products</td>
                    </tr>
                    <tr>
                      <td><code>sell_price</code></td>
                      <td><code>double</code></td>
                      <td>sell_price of identification item products</td>
                    </tr>
                    <tr>
                      <td><code>stock</code></td>
                      <td><code>double</code></td>
                      <td>initialisation stock of identification item products , when firts time insert products</td>
                    </tr>

                  </tbody>

                </table>
              </ul>
              <!-- <ul>Required:</ul> -->
             <!--  <ul>
                <code>
                  name=[varchar]
                  sku =[varchar](auto/manually)
                </code><code>
                  name=[varchar]
                  sku =[varchar](auto/manually)
                </code>
              </ul> -->
            </li>
            <li>Success Response
              <ul>Code : <code>200</code></ul>
              <ul>Content : <pre><code class="json">{ id : 12, name : "Michael Bloom" }</code></pre></ul>
            </li>
            <li>
              Error Response
              <ul>Code : <code>404</code> NOT FOUND </ul>
              <ul>Content : <pre><code>{ error : "User doesn't exist" }</code></pre></ul>
              OR
              <ul>Code : <code>401</code> UNAUTHORIZED </ul>
              <ul>Content : <pre><code>{ error : "You are unauthorized to make this request." }</code></pre></ul>

            </li>
            <li>
              <bold>Sample Call</bold>
              <!-- <div class="row"> -->
                <!-- <div class="col-lg-12">
                  <div class="card" >
                    <div class="card-body">

                      <div class="row">
                        <div class="col-md-12 col-sm-12"> -->
                          <!-- <div class="section"> -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">PHP</a></li>
                              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Javascript</a></li>
                              <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Java</a></li>
                              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Ruby</a></li> -->
                            </ul>
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="home">
                                <pre><code class="php">
                    curl -u 67287:lXymG93y83m6RHzZV5FY "https://api.bukalapak.com/v2/products/kxvi.json" -H "Content-Type: application/json" -X GET
                                </code></pre>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="profile">
                                  <pre><code class="javascript">
                     $.post('application', $value, function(data, textStatus, xhr){
                          console.log(data);
                          console.log(textStatus);
                          console.log(xhr);
                          if (xhr.status==200) {
                            location.reload();
                          }
                        });
                    atau ==========================================================
                    $.ajax({
                      type: 'POST',
                      url : "application",
                      data: $value,
                      error:function() { alert("Error Submitting Information") }

                    }).done(function(msg){
                          alert(msg);
                        });
                                </code></pre>
                              </div>
                            <!--   <div role="tabpanel" class="tab-pane" id="messages">
                              </div>
                              <div role="tabpanel" class="tab-pane" id="settings"> -->

                              </div>
                            <!-- </div> -->
                         <!--  </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              <!-- </div> -->
            </li>

          </ul>
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
