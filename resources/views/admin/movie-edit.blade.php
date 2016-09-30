@extends('admin.components.global')

@section('content')
<div class="container">
    <h1>Edit Movie</h1>
    <div class="row">
        {!! Form::open(array('method'=>'POST')) !!}
        <div class="col-md-12">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="mName">Name</label>
            <input type="text" id="mName" name="movie_name" class="form-control" placeholder="Movie Name" value="{{$movie['movie_name']}}" />

            <hr/>
            <label for="mReleaseDate">Release Date - TO BE FIXED</label>
            <input type="date" id="mReleaseDate" name="release_date" class="form-control" value="{{$movie['release_date']}}" />

            <hr/>
            <label for="mGenre">Genre</label>
            <input type="text" id="mGenre" placeholder="Movie Genre" class="form-control" name="genre" value="{{$movie['genre']}}"/>

            <hr/>
            <div class="row">
                <div class="col-md-7">
                    <label for="mSypnosis">Sypnosis</label>
                    <textarea class="form-control" id="mSypnosis" placeholder="Movie Sypnosis" name="sypnosis" style="min-height:250px;">{{$movie['sypnosis']}}</textarea>
                </div>

                <div class="col-md-5">
                    <label for="mShort">Short Description</label>
                    <textarea class="form-control" id="mShort" placeholder="Short Description" name="short_desc" style="min-height:250px;">{{$movie['short_desc']}}</textarea>
                </div>
            </div>

            <hr/>
            <label for="mActors">Actors</label>
            <textarea class="form-control" id="mActors" placeholder="Actors" name="actors" style="min-height:150px;">{{$movie['actors']}}</textarea>

            <hr/>
            <label for="mPoster">Poster URL</label>
            <input type="text" id="mPoster" placeholder="Movie Poster URL" class="form-control" name="poster_url" value="{{$movie['poster_url']}}"/>

            <hr/>
            <label for="mYouTube">YouTube Trailer URL</label>
            <input type="text" id="mYouTube" placeholder="Movie YouTube Trailer URL" class="form-control" name="youtube_url" value="{{$movie['youtube_url']}}"/>

            <hr/>
            <div class="row">
                <div class="col-md-7">
                    <label for="mRating">Rating</label>
                    <select id="mRating" name="rating" class="form-control">
                        <option selected disabled>Select a rating</option>
                        <option value="G" {{$movie['rating'] == 'G' ? 'selected' : ''}}>G</option>
                        <option value="PG" {{$movie['rating'] == 'PG' ? 'selected' : ''}}>PG</option>
                        <option value="M" {{$movie['rating'] == 'M' ? 'selected' : ''}}>M</option>
                        <option value="MA" {{$movie['rating'] == 'MA' ? 'selected' : ''}}>MA</option>
                        <option value="R" {{$movie['rating'] == 'R' ? 'selected' : ''}}>R</option>
                        <option value="Unrated" {{$movie['rating'] == 'Unrated' ? 'selected' : ''}}>Unrated</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="mIMDB">IMDB Rating</label>
                    <input type="number" min="1" max="10" id="mIMDB" placeholder="IMDB Rating" class="form-control" name="imdb_rating" value="{{$movie['imdb_rating']}}"/>
                </div>
            </div>

            <hr/>
            <label for="mRuntime">Movie Runtime</label>
            <input type="number" min="1" id="mRuntime" placeholder="Movie Runtime" class="form-control" name="runtime" value="{{$movie['runtime']}}"/>

            <hr/>
            <h3>Carousel Settings</h3>
            <div class="row">
                <div class="col-md-7">
                    <label for="mSub">Carousel Subtext</label>
                    <input type="text" id="mSub" placeholder="Carousel Subtext" class="form-control" name="carousel_sub" value="{{$movie['carousel_sub']}}"/>
                </div>

                <div class="col-md-5">
                    <label for="mCarouselUrl">Carousel URL</label>
                    <input type="text"  id="mCarouselUrl" placeholder="Carousel URL" class="form-control" name="carousel_url" value="{{$movie['carousel_url']}}"/>
                </div>
            </div>

            <hr/>
            <input type="submit" value="Accept Changes" class="btn btn-info"/>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection