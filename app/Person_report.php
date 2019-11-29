<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person_report extends Model
{
    protected $fillable = [
        'first_name', 'last_name_1', 'last_name_2', 'age', 'age_range_id', 'gender_id', 'nationality_id', 'person_id'
    ];

    //Relaciones
    public function age_range()
    {
        return $this->hasOne('App\Catalogs\Age_range', 'id', 'age_range_id');
    }

    public function gender()
    {
        return $this->hasOne('App\Catalogs\Gender', 'id', 'gender_id');
    }
}
