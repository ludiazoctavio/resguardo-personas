<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    protected $fillable = [
        'identification_type_id', 'folio',
    ];

    //Relaciones Catálogos
    public function identification_type()
    {
        return $this->hasOne('App\Catalogs\Identification_type', 'id', 'identification_type_id');
    }
}
