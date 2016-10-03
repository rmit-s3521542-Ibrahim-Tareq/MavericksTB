@extends('admin.components.global')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>What's Hot</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning btn-lg" style="margin-top:10px;" href="{{ route('admin.hot.create') }}"> Add Movie to list</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
        @if(count($hot) < 1)
        <div class="col-md-12"><p>There are no movies to display.</p></div>
        @else
        @foreach($hot as $k=>$h)
        <div class="col-lg-3 boxHits">
            <img src="{{url('/')}}/img/{{$hotMovies[$k]['poster_url']}}" class="img-thumbnail" alt="{{$hotMovies[$k]['movie_name']}}" width="290" height="200">
            <div class="hiddenBox">
                <h2>{{$hotMovies[$k]['movie_name']}}</h2>
                <h4>Position: {{$h['position']}}</h4>
                {!! Form::open(['method' => 'DELETE','route' => ['admin.hot.destroy', $h['id']],'style'=>'display:inline']) !!}
                {!! Form::submit('Remove from list', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection