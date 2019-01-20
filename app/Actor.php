<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['id', 'first_name', 'last_name'];

    public function movie()
    {
        return $this->belongsTo(\App\Movie::class);
    }
}
