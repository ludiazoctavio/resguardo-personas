<?php

namespace App\Catalogs;

use Illuminate\Database\Eloquent\Model;

class Address_city extends Model
{
    protected $fillable = ['name','state_id','inactive'];
}
