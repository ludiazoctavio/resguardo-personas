<?php

namespace App\Catalogs;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $fillable = ['name','inactive'];
}
