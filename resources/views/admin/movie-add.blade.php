@extends('admin.components.global')

@section('content')
<div class="container">
    <h1>Add New Movie</h1>

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
        {!! Form::open(array('route' => 'admin.movies.store','method'=>'POST')) !!}
        <div class="col-md-12">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label for="mName">Name</label>
            <input type="text" id="mName" name="movie_name" class="form-control" placeholder="Movie Name" />

            <hr/>
            <label for="mReleaseDate">Release Date (timestamp)</label>
            <input type="text" id="mReleaseDate" name="release_date" class="form-control" />

            <hr/>
            <label for="mGenre">Genre</label>
            <input type="text" id="mGenre" placeholder="Movie Genre" class="form-control" name="genre"/>

            <hr/>
            <div class="row">
                <div class="col-md-7">
                    <label for="mSypnosis">Sypnosis</label>
                    <textarea class="form-control" id="mSypnosis" placeholder="Movie Sypnosis" name="sypnosis" style="min-height:250px;"></textarea>
                </div>

                <div class="col-md-5">
                    <label for="mShort">Short Description</label>
                    <textarea class="form-control" id="mShort" placeholder="Short Description" name="short_desc" style="min-height:250px;"></textarea>
                </div>
            </div>

            <hr/>
            <label for="mActors">Actors</label>
            <textarea class="form-control" id="mActors" placeholder="Actors" name="actors" style="min-height:150px;"></textarea>

            <hr/>
            <label for="mPoster">Poster URL</label>
            <input type="text" id="mPoster" placeholder="Movie Poster URL" class="form-control" name="poster_url" />

            <hr/>
            <label for="mYouTube">YouTube Trailer URL</label>
            <input type="text" id="mYouTube" placeholder="Movie YouTube Trailer URL" class="form-control" name="youtube_url"/>

            <hr/>
            <div class="row">
                <div class="col-md-7">
                    <label for="mRating">Rating</label>
                    <select id="mRating" name="rating" class="form-control">
                        <option selected disabled>Select a rating</option>
                        <option value="G">G</option>
                        <option value="PG">PG</option>
                        <option value="M">M</option>
                        <option value="MA">MA</option>
                        <option value="R">R</option>
                        <option value="Unrated">Unrated</option>
                    </select>
                </div>

                <div class="col-md-5">
                    <label for="mIMDB">IMDB Rating</label>
                    <input type="number" min="1" max="10" id="mIMDB" placeholder="IMDB Rating" class="form-control" name="imdb_rating"/>
                </div>
            </div>

            <hr/>
            <label for="mRuntime">Movie Runtime</label>
            <input type="number" min="1" id="mRuntime" placeholder="Movie Runtime" class="form-control" name="runtime" />

            <hr/>
            <h3>Carousel Settings</h3>
            <div class="row">
                <div class="col-md-7">
                    <label for="mSub">Carousel Subtext</label>
                    <input type="text" id="mSub" placeholder="Carousel Subtext" class="form-control" name="carousel_sub" />
                </div>

                <div class="col-md-5">
                    <label for="mCarouselUrl">Carousel URL</label>
                    <input type="text"  id="mCarouselUrl" placeholder="Carousel URL" class="form-control" name="carousel_url" />
                </div>
            </div>

            <hr/>
            <input type="submit" value="Add Movie" class="btn btn-info"/>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection