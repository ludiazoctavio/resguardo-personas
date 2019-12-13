<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HalfAffiliationOption extends Model
{
    protected $fillable = ['name','inactive','half_affiliation_type_id'];

    //Relaciones
    public function type_register()
    {
        return $this->hasOne('App\HalfAffiliationType', 'id', 'half_affiliation_type_id');
    }
}
