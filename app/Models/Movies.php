<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['movie_name', 'imdb_id', 'release_date', 'genre', 'sypnosis', 'actors', 'poster_url', 'rating', 'imdb_rating',
        'youtube_url', 'runtime', 'short_desc', 'carousel_url', 'carousel_sub'];
}
