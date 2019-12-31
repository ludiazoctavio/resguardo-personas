<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'phone_type_id', 'phone', 'phoneable_id', 'phoneable_type'
    ];

    public function phoneable()
    {
        return $this->morphTo();
    }
}
