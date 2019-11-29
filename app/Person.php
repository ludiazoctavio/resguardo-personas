<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'folio', 'first_name', 'last_name_1', 'last_name_2', 'age', 'age_range_id', 'gender_id', 'nationality_id', 'disability_id', 'priority_id', 'confidential', 'closed'
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

    public function nationality()
    {
        return $this->hasOne('App\Catalogs\Nationality', 'id', 'nationality_id');
    }
    public function disability()
    {
        return $this->hasOne('App\Catalogs\Disability', 'id', 'disability_id');
    }
    public function priority()
    {
        return $this->hasOne('App\Catalogs\Priority', 'id', 'priority_id');
    }
}
