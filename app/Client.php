<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id', 'first_name', 'last_name', 'address', 'phone_number', 'vat_id'];

    public function lendings()
    {
        return $this->hasMany(\App\Lending::class);
    }
}
