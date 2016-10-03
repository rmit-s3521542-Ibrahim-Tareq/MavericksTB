@extends('admin.components.global')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Movies</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning btn-lg" style="margin-top:10px;" href="{{ route('admin.movies.create') }}"> Add New Movie</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <h3>Now Showing</h3>
    <div class="row">
        @if(count($current) < 1)
            <div class="col-md-12">
                <p>There are no movies to display.</p>
            </div>
        @else
            @foreach($current as $cur)
            <div class="col-lg-3 boxHits">
                <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="290" height="200" />
                <div class="hiddenBox">
                    <h2>{{$cur['movie_name']}}</h2>
                    <a class="btn btn-info" href="{{ route('admin.movies.edit', $cur['id']) }}">Edit Movie</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.movies.destroy', $cur->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete Movie', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        @endif
    </div>

    <hr/>
    <h3>Coming Soon</h3>
    <div class="row">
        @if(count($soon) < 1)
            <div class="col-md-12">
                <p>There are no movies to display.</p>
            </div>
        @else
            @foreach($soon as $cur)
            <div class="col-lg-3 boxHits">
                <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="290" height="200" />
                <div class="hiddenBox">
                    <h2>{{$cur['movie_name']}}</h2>
                    <a class="btn btn-info" href="{{ route('admin.movies.edit', $cur['id']) }}">Edit Movie</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['admin.movies.destroy', $cur->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete Movie', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection