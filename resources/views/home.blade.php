@extends('components.global')

@section('content')
<div class="container carousel-placeholder"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <h1 class="title"></h1>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        @for($j = 0; $j < count($carousel); $j++)
        <li data-target="#myCarousel" data-slide-to="{{$j}}" class="{{$j==0 ? 'active' : ''}}"></li>
        @endfor
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($carousel as $k=>$h)
        <div class="item {{ $i++ == 0 ? 'active' : '' }}" style="background-image:url({{ url('/') }}/img/large-banners/{{$movies[$k]['carousel_url']}});">
            <img src="{{ url('/') }}/img/large-banners/{{$movies[$k]['carousel_url']}}" alt="{{$movies[$k]['movie_name']}}">
            <div class="carousel-caption">
                <h3>{{$movies[$k]['movie_name']}}</h3>
                @if(strlen($movies[$k]['carousel_sub']) > 0)
                <h4>{{$movies[$k]['carousel_sub']}}</h4>
                @endif
                <p>{{$movies[$k]['short_desc']}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <div class="backforwardSwitch">
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container topMovies">
    <div class="row">
        <p id="topMovies-header">WHAT'S HOT</p>
        @if(count($hot) < 1)
            <p>There are no movies to display.</p>
        @else
            @foreach($hot as $k=>$h)
            <div class="col-lg-3 boxHits">
                <img src="{{url('/')}}/img/{{$hotMovies[$k]['poster_url']}}" class="img-thumbnail" alt="{{$hotMovies[$k]['movie_name']}}" width="290" height="200" onclick="openBooking('{{$hotMovies[$k]['id']}}')">
            </div>
            @endforeach
        @endif
    </div>
</div>

<div class="container newsBox">
    <div class="row">
        <div class="col-lg-5 newsBox-left">
            <p>Don't be late,</p>
            <p>Book your ticket now!</p>
            <a href="{{url('/movies')}}" class="ticket"><i class="book"></i>BOOK TICKET</a>
        </div>
        <div class="col-lg-7 newsBox-right">
            <p id="newBoxRight-header">NEWS</p>
            <p class="subheading">A new beginning for Mavericks</p>
            <p>Introducing our brand new website featuring Facebook login, wishlists and the ability to book movies online. <b>Skip the queue.</b></p>
            <hr/>
            <p class="subheading">We are expanding!</p>
            <p>We've got a new cinema coming to Chadstone, due to open in February 2017! To celebrate, we are giving away 10 movie vouchers. Stay tuned for more information on the cinema and competition!</p>
        </div>
    </div>
</div>
@endsection


@section('additionalJs')
<script>
    function openBooking(id)
    {
        var id = parseInt(id);
        createClicker(movies[" " + id + " "]);
    }
</script>
@endsection