<?php

namespace App;

use App\Http\Requests\Role\StoreRequest;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

//Relaciones
    public function permissins()
    {
        return $this->hasMany(App\Permission);
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    
//Almacenamiento
    public function store($request)
    {
        $slug = Str::slug($request->name, '-');
        return self::create($request->all() + [
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug = Str::slug($request->name, '-');
        self::update($request->all() + [
            'slug' => $slug,
        ]);
    }

//Validacion

//Recuperacion de informacion

//Otras

}
