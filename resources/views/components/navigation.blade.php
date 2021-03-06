<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navToggle" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navToggle">

            <ul class="nav navbar-nav">
                <li><a href="{!! url('/') !!}" class="m-logo"></a></li>
                <li><a href="{{ url('/movies') }}"><span class="glyphicon glyphicon-blackboard"></span> Movies</a></li>
                <li><a href="{{ url('/cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                @if (!Auth::guest())
                <li><a href="{{ url('/admin') }}"><span class="glyphicon glyphicon-eye-open"></span> Admin</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form navbar-right" role="search" method="GET" action="{{url('/search')}}">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="term" id="srch-term">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                @if (Auth::guest())
                <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @else
                <li><a href="{{ url('/account') }}"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>