<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    protected $fillable = ['id', 'movie_id', 'genre_id'];
}
