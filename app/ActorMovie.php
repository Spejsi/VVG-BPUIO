<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    protected $fillable = ['id', 'movie_id', 'actor_id'];
}
