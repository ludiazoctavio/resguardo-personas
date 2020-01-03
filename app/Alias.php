<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alias extends Model
{
    protected $fillable = [
        'alias',
    ];

    public function aliasable()
    {
        return $this->morphTo();
    }
}
