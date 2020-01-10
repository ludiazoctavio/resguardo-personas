<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    protected $fillable = [
        'clothing_type_id', 'color_1_id', 'color_2_id', 'description', 'person_id'
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
