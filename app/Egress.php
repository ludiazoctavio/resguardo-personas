<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egress extends Model
{
    protected $fillable = [
        'date', 'time', 'description', 'person_id'
    ];

    public function companion()
    {
        return $this->morphOne('App\Companion', 'companionable');
    }

}
