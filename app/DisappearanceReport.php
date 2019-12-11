<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisappearanceReport extends Model
{
    protected $fillable = [
        'date', 'time', 'description', 'person_id', 'circumstance_id'
    ];

    //Relaciones Catálogos
    public function circumstance()
    {
        return $this->hasOne('App\Catalogs\Circumstance', 'id', 'circumstance_id');
    }
}
