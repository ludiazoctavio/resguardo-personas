<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person_report extends Model
{
    protected $fillable = [
        'first_name', 'last_name_1', 'last_name_2', 'age_id', 'gender_id', 'relationship_id', 'nationality_id', 'person_id'
    ];

    //Relaciones
    public function phones()
    {
        return $this->morphMany('App\Phone', 'phoneable');
    }
    
    public function address()
    {
        return $this->morphOne('App\Address', 'addressable');
    }

    public function identification()
    {
        return $this->morphOne('App\Identification', 'identificationable');
    }

    //Catálogos
    public function age()
    {
        return $this->hasOne('App\Catalogs\Age', 'id', 'age_id');
    }

    public function gender()
    {
        return $this->hasOne('App\Catalogs\Gender', 'id', 'gender_id');
    }

    public function nationality()
    {
        return $this->hasOne('App\Catalogs\Nationality', 'id', 'nationality_id');
    }

    public function relationship()
    {
        return $this->hasOne('App\Catalogs\Relationship', 'id', 'relationship_id');
    }


}
