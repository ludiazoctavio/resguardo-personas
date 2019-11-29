<?php

namespace App;

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
        alert()->success('Éxito','El permiso se a guardado', 'succes')->showConfirmButton();
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
        alert()->success('Éxito','El permiso se actualizó', 'succes')->showConfirmButton();
    }
//Validacion

//Recuperacion de informacion

//Otras

}
