<div class="container">
    <div class="row">
        <div class="col-md-4">
            <!-- Logo -->
            <div class="logo">
                <h1><a href="/">Laravel Demo</a></h1>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                         <button class="btn btn-primary" type="button">Search</button>
                       </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="navbar navbar-inverse" role="banner">
                <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">

                            @if (Auth::user())
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
                                    <ul class="dropdown-menu animated fadeInUp">
                                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a href="{{ url('/login') }}">Login</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif


                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
