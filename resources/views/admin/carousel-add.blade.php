@extends('admin.components.global')

@section('content')
<div class="container">
    <h1>Add Movie to list</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        {!! Form::open(array('route' => 'admin.carousel.store','method'=>'POST')) !!}
        <div class="col-md-12">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="mPosition">List Position</label>
            <input type="number" min="0" id="mPosition" name="position" class="form-control" placeholder="Position on list" />

            <hr/>
            <label for="mMovie">Movie</label>
            <select id="mMovie" name="movie_id" class="form-control">
                <option selected disabled>Select a movie</option>
                @foreach($movies as $m)
                <option value="{{$m['id']}}">{{$m['movie_name']}}</option>
                @endforeach
            </select>

            <hr/>
            <input type="submit" value="Add Movie" class="btn btn-info"/>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection