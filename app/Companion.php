<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    protected $fillable = [
        'first_name', 'last_name_1', 'last_name_2', 'person_id',
    ];

    public function companionable()
    {
        return $this->morphTo();
    }

    //Relaciones
    public function aliases()
    {
        return $this->morphMany('App\Alias', 'aliasable');
    }
    
    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function identification()
    {
        return $this->morphOne('App\Identification', 'identificationable');
    }
}
