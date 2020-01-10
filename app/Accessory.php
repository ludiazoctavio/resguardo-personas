<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = [
        'accessory_type_id', 'color_1_id', 'color_1_id', 'body_part_id', 'description', 'person_id'
    ];
    
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
