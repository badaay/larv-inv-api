<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ config('app.name') }}</title>
        
        <meta name="viewport" content="width=device-width*0.5, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootsrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/flat-admin.css') }}">
        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/blue-sky.css') }}">
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/blue.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/red.css') }}"> -->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/theme/yellow.css') }}"> -->
    </head>
    <body>
        <div class="app app-default">
            <aside class="app-sidebar" id="sidebar">
                <div class="sidebar-header">
                    <a class="sidebar-brand" href="#"><span class="highlight">{{ config('app.name') }}</span> Admin</a>
                    <button type="button" class="sidebar-toggle">
                    <i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="sidebar-menu">
                    <ul class="sidebar-nav">
                        <li class="active">
                            <a href="{{ route('home') }}">
                                <div class="icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                                <div class="title">Dashboard</div>
                            </a>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                <div class="title">Documentation</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="section"><i class="fa fa-wrench" aria-hidden="true"></i> Getting Started</li>
                                    <li><a href="#">Installation</a></li>
                                    <li><a href="#">Configuration</a></li>
                                    <li class="line"></li>
                                    <li class="section"><i class="fa fa-edit " aria-hidden="true"></i> Usage / Example </li>
                                    <li><a href="#">PHP</a></li>
                                    <li><a href="#">JAVA ( Android )</a></li>
                                    <li><a href="#">JAVA ( Desktop )</a></li>
                                    <li><a href="#">AJAX Request</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                </div>
                                <div class="title">Test</div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Administrations</li>
                                    <li><a href="#">Last Statuses</a></li>
                                    <li><a href="#">Manage Products</a></li>
                                    <li><a href="#">Manage Supplier <span>(optional)</span></a></li>
                                    <li><a href="#">Chart <span>(optional)</span></a></li>

                                    <li class="line"></li>
                                    <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Clients</li>
                                    <li><a href="#">Order</a></li>
                                    <li><a href="#">Register Apps</a></li>
                                </ul>
                            </div>
                        </li>
                        <li >
                            <a href="{{ route('setting') }}">
                                <div class="icon">
                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                </div>
                                <div class="title">Setting</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-footer">
                    <ul class="menu">
                        <li>
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href="#"><span class="flag-icon flag-icon-id flag-icon-squared"></span></a></li>
                    </ul>
                </div>
            </aside>
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
                                <li>
                                    <button type="button" class="sidebar-toggle">
                                    <i class="fa fa-bars"></i>
                                    </button>
                                </li>
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
                                <li class="navbar-title">Dashboard</li>
                                <li class="navbar-search hidden-sm">
                                    <input id="search" type="text" placeholder="Search..">
                                    <button class="btn-search"><i class="fa fa-search"></i></button>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown notification warning">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="title">Unread Messages</div>
                                        <div class="count">99</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Message</li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">10</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Payment Confirmation.."</div>
                                                            <div class="description">Alan Anderson</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">5</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Hello World"</div>
                                                            <div class="description">Marco  Harmon</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-warning pull-right">2</span>
                                                    <div class="message">
                                                        <img class="profile" src="https://placehold.it/100x100">
                                                        <div class="content">
                                                            <div class="title">"Order Confirmation.."</div>
                                                            <div class="description">Brenda Lawson</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="dropdown notification danger">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                                        <div class="title">System Notifications</div>
                                        <div class="count">10</div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="dropdown-header">Notification</li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">8</span>
                                                    <div class="message">
                                                        <div class="content">
                                                            <div class="title">New Order</div>
                                                            <div class="description">$400 total</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">14</span>
                                                    Inbox
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="badge badge-danger pull-right">5</span>
                                                    Issues Report
                                                </a>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
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