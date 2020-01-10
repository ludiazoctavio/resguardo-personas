<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticularSign extends Model
{
    protected $fillable = [
        'signal_type_id', 'body_part_id', 'size_id', 'description', 'person_id'
    ];

    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
