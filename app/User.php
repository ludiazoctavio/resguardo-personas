<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


//Relaciones
    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

//Almacenamiento

//Validacion
    public function is_admin()
    {
        $admin = config('app.adminrole');
    }

    public function has_role($id)
    {
        foreach ($this->roles as $role) {
            if($role->id == $id || $role->slug == $id) return true;
        }
        return false;
    }

    public function has_permission($id)
    {
        foreach ($this->permissions as $permission) {
            if($permission->id == $id || $permission->slug == $id) return true;
        }
        return false;
    }

//Recuperacion de informacion

//Otras

    public function verify_permission_integrity()
    {
        $permissions = $this->permissions;
        foreach ($permissions as $permission) {
            if (!$this->has_role($permission->role->id)) {
                $this->permissions()->detach($permission->id);
            }
        }
    }

}
