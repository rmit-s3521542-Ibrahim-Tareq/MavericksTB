@extends('components.global')

@section('content')
<div class="container">
    <h1><b>Results for: </b>{{$term}}</h1>



    <h1>Movies</h1>
    <h3>Now Showing</h3>
    <div class="row">
        @if(count($movies) < 1)
            <div class="col-md-12">
                <p>There are no movies to display.</p>
            </div>
        @else
            @foreach($movies as $cur)
                <div class="col-md-2 boxHits">
                    <img src="{{url('/')}}/img/{{$cur['poster_url']}}" class="img-thumbnail" alt="{{$cur['movie_name']}}" width="180" onclick="openBooking('{{$cur['id']}}')" />
                </div>
            @endforeach
        @endif
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