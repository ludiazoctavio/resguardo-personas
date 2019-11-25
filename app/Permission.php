<?php

namespace App;
use App\Http\Requests\Permission\StoreRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'role_id'
    ];

//Relaciones
    public function role()
    {
        return $this->belongsTo('App\Role');
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
