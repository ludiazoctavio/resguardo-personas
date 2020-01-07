<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street', 'number', 'outdoor_number', 'pc', 'suburb', 'city_id', 'state_id', 'between_streets',
        'reference', 'position', 'addressable_id', 'addressable_type',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
