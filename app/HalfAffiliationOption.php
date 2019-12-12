<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HalfAffiliationOption extends Model
{
    protected $fillable = ['name','inactive','type_id'];
}
