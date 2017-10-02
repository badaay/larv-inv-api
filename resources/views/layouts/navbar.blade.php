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
                <li class="dropdown ">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        
                        <div class="title"> {{$projectName}} <i class="fa fa-sort-down" aria-hidden="true"></i></div>
                        <!-- <div class="icon"></div> -->
                        <!-- <div class="count">99</div> -->
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            @foreach(Session::get('app_list') as $x)
                            <li>
                                <a href="{{ url($x->name.'/overview') }}">
                                    <div class="message">
                                        <div class="content">
                                            <div class="title">{{$x->name}}</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            
                            
                            <li class="dropdown-footer">
                                <a href="{{ route('overview') }}">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    
                </li>
                <li><a href="{{ url('setting') }}"> Setting</a></li>
                <li><a href="{{ url($projectName.'/manage') }}"> Manage</a></li>
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