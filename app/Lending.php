<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    protected $fillable = ['id', 'lending_date', 'return_date', 'client_id', 'movie_id'];

    public function movie()
    {
        return $this->belongsTo(\App\Movie::class);
    }

    public function client()
    {
        return $this->belongsTo(\App\Client::class);
    }
}
