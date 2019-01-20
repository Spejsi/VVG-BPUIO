<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id', 'name', 'year', 'duration', 'prize'];

    public function actors()
    {
        return $this->hasMany(\App\Actor::class);
    }

    public function genres()
    {
        return $this->hasMany(\App\Genre::class);
    }

    public function lendings()
    {
        return $this->hasMany(\App\Lending::class);
    }
    /*
    public function genres()
    {
        return $this->hasMany
    }
    */
}
