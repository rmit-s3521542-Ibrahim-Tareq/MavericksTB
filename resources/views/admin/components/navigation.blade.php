<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/admin')}}">Mavericks Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{url('/admin')}}">Home <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('admin/movies') ? 'active' : '' }}"><a href="{{url('/admin/movies')}}">Movies</a></li>
                <li class="{{ Request::is('admin/hot') ? 'active' : '' }}"><a href="{{url('/admin/hot')}}">What's Hot</a></li>
                <li class="{{ Request::is('admin/carousel') ? 'active' : '' }}"><a href="{{url('/admin/carousel')}}">Carousel</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left"></span> Back Home</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>