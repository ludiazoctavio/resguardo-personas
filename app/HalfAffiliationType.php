<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HalfAffiliationType extends Model
{
    protected $fillable = ['name','inactive'];

    //Relaciones
    public function halfaffiliationoptions()
    {
        return $this->hasMany('App\HalfAffiliationOption');
    }
}
