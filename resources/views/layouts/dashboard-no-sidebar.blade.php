<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ config('app.name') }}</title>
        
        <meta name="viewport" content="width=device-width*0.5, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/flat-admin-no-sidebar.css') }}">
        <!-- Theme -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/blue-sky.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/blue.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/red.css') }}"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/yellow.css') }}">
    </head>
    <body>
        <div class="app app-default">
          
            <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
            <div class="dropdown-background">
                <div class="bg"></div>
            </div>
            <div class="dropdown-container">
                
            </div>
            </script>
            <div class="app-container">
                <nav class="navbar navbar-default" id="navbar">
                    <div class="container-fluid">
                        <div class="navbar-collapse collapse in">
                            <ul class="nav navbar-nav navbar-mobile">
                               <!--  <li>
                                    <button type="button" class="sidebar-toggle">
                                    <i class="fa fa-bars"></i>
                                    </button>
                                </li> -->
                                <li class="logo">
                                    <a class="navbar-brand" href="#"><span class="highlight">{{ config('app.name') }}</span> Admin</a>
                                </li>
                                <li>
                                    <button type="button" class="navbar-toggle">
                                    <img class="profile-img" src="{{ asset('images/profile.png') }}">
                                    </button>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-left">
                                <li class="navbar-title">INVENTO</li>
                                <li class="navbar-search hidden-sm">
                                    <input id="search" type="text" placeholder="Search..">
                                    <button class="btn-search"><i class="fa fa-search"></i></button>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{route('overview')}}"> Overview</a></li>
                                <li><a href="{{route('usage')}}"> Documentation</a></li>
                                <li><a href="{{route('price')}}"> Price</a></li>
                                <li class="dropdown profile">
                                    <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                                        <img class="profile-img" src="{{ asset('images/profile.png') }}">
                                        <div class="title">Profile</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="profile-info">
                                            <h4 class="username">{{ Auth::user()->name }}</h4>
                                        </div>
                                        <ul class="action">
                                            <li>
                                                <a href="#">
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">5</span>
                                                    My Inbox
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
                <div class="btn-floating" id="help-actions" style="display: none;">
                    <div class="btn-bg"></div>
                    <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
                    <i class="icon fa fa-plus"></i>
                    <span class="help-text">Shortcut</span>
                    </button>
                    <div class="toggle-content">
                        <ul class="actions">
                            <li><a href="#">Website</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Issues</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-success">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <footer class="app-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer-copyright">
                                Copyright © 2016 Company Co,Ltd.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/appFlat.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/my.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/ajax.my.js') }}"></script>

         @yield('extraJs')
    </body>
</html>