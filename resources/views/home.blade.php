@extends('layouts.dashboard')
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Register Your App first</div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/home">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Top Sale Today</div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="section">
          <div class="section-title">Step</div>
          <div class="section-body">
            <div class="step">
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="step">
                  <a href="#step1" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                    <div class="icon fa fa-shopping-cart"></div>
                    <div class="heading">
                      <div class="title">Shipping</div>
                      <div class="description">Enter your address</div>
                    </div>
                  </a>
                </li>
                <li role="step" class="active">
                  <a href="#step2" role="tab" id="step2-tab" data-toggle="tab" aria-controls="profile">
                    <div class="icon fa fa-credit-card"></div>
                    <div class="heading">
                      <div class="title">Payment</div>
                      <div class="description">Billing Information.</div>
                    </div>
                  </a>
                </li>
                <li role="step">
                  <a href="#step3" role="tab" id="step3-tab" data-toggle="tab" aria-controls="profile">
                    <div class="icon fa fa-check"></div>
                    <div class="heading">
                      <div class="title">Confirm Orders</div>
                      <div class="description">Confirmation your purchases</div>
                    </div>
                  </a>
                </li>
                <li role="step">
                  <a href="#step4" role="tab" id="step4-tab" data-toggle="tab" aria-controls="profile">
                    <div class="icon fa fa-truck "></div>
                    <div class="heading">
                      <div class="title">Purchase Successfully</div>
                      <div class="description">Wait for us shipping</div>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="step1">
                  <b>Step1</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                </div>
                <div role="tabpanel" class="tab-pane active" id="step2">
                  <b>Step2</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                </div>
                <div role="tabpanel" class="tab-pane" id="step3">
                  <b>Step3</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                </div>
                <div role="tabpanel" class="tab-pane" id="step4">
                  <b>Step4</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequa
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-green-light">
      <div class="card-body">
        <i class="icon fa fa-shopping-basket fa-4x"></i>
        <div class="content">
          <div class="title">Sale Today</div>
          <div class="value"><span class="sign">$</span>420</div>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-blue-light">
      <div class="card-body">
        <i class="icon fa fa-thumbs-o-up fa-4x"></i>
        <div class="content">
          <div class="title">Page Likes</div>
          <div class="value"><span class="sign"></span>2453</div>
        </div>
      </div>
    </a>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <a class="card card-banner card-yellow-light">
      <div class="card-body">
        <i class="icon fa fa-user-plus fa-4x"></i>
        <div class="content">
          <div class="title">New Registration</div>
          <div class="value"><span class="sign"></span>50</div>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="row">
  <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-mini">
      <div class="card-header">
        <div class="card-title">Last Statuses</div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body no-padding table-responsive">
        <table class="table card-table">
          <thead>
            <tr>
              <th>Products</th>
              <th class="right">Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>MicroSD 64Gb</td>
              <td class="right">12</td>
              <td><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td>
            </tr>
            <tr>
              <td>MiniPC i5</td>
              <td class="right">5</td>
              <td><span class="badge badge-warning badge-icon"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Pending</span></span></td>
            </tr>
            <tr>
              <td>Mountain Bike</td>
              <td class="right">1</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
            <tr>
              <td>Notebook</td>
              <td class="right">10</td>
              <td><span class="badge badge-danger badge-icon"><i class="fa fa-times" aria-hidden="true"></i><span>Cancelled</span></span></td>
            </tr>
            <tr>
              <td>Raspberry Pi2</td>
              <td class="right">6</td>
              <td><span class="badge badge-primary badge-icon"><i class="fa fa-truck" aria-hidden="true"></i><span>Shipped</span></span></td>
            </tr>
            <tr>
              <td>Flashdrive 128Mb</td>
              <td class="right">40</td>
              <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> -->
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="card card-tab card-mini">
      <div class="card-header">
        <ul class="nav nav-tabs tab-stats">
          <li role="tab1" class="active">
            <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Browsers</a>
          </li>
          <li role="tab2">
            <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">OS</a>
          </li>
          <li role="tab2">
            <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">More</a>
          </li>
        </ul>
      </div>
      <div class="card-body tab-content">
        <div role="tabpanel" class="tab-pane active" id="tab1">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-browser ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">Google Chrome</li>
                <li class="ct-label ct-series-b">Firefox</li>
                <li class="ct-label ct-series-c">Safari</li>
                <li class="ct-label ct-series-d">IE</li>
                <li class="ct-label ct-series-e">Opera</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab2">
          <div class="row">
            <div class="col-sm-8">
              <div class="chart ct-chart-os ct-perfect-fourth"></div>
            </div>
            <div class="col-sm-4">
              <ul class="chart-label">
                <li class="ct-label ct-series-a">iOS</li>
                <li class="ct-label ct-series-b">Android</li>
                <li class="ct-label ct-series-c">Windows</li>
                <li class="ct-label ct-series-d">OSX</li>
                <li class="ct-label ct-series-e">Linux</li>
              </ul>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="tab3">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection