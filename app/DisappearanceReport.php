<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisappearanceReport extends Model
{
    protected $fillable = [
        'date', 'time', 'description', 'cell_phone', 'circumstance_id', 'person_id',
    ];

    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    //Relaciones Catálogos
    public function circumstance()
    {
        return $this->hasOne('App\Catalogs\Circumstance', 'id', 'circumstance_id');
    }

}
