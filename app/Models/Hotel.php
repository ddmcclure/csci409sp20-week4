<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'location',
        'description',
        'image',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip'
    ];

    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }
}
