@extends('admin.components.global')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <h3>Now Showing</h3>
    <div class="row">
        @foreach($current as $cur)
        <div class="col-lg-3 boxHits">
            <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="290" height="200" />
            <div class="hiddenBox">
                <h2>{{$cur['movie_name']}}</h2>
                <a class="btn btn-info">Edit Movie</a>
                <a class="btn btn-danger">Delete Movie</a>
            </div>
        </div>
        @endforeach
    </div>

    <hr/>
    <h3>Coming Soon</h3>
</div>
@endsection