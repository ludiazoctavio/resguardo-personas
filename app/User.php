<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name_1', 'last_name_2', 'position', 'phone', 'phone_extension', 'dependence_id', 'ascription_id', 'email', 'password',
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

    public function dependence()
    {
        return $this->belongsTo('App\Dependence');
    }

//Almacenamiento
    public function store($request)
    {
        $user = self::create($request->all());
        $user->update(['password' => Hash::make($request->password)]);
        $roles = [$request->role];
        $user->role_assignment(null, $roles);
        alert()->success('Éxito','El usuario se a guardado', 'succes')->showConfirmButton();
        return $user;
    }

    public function my_update($request)
    {
        self::update($request->all());
        alert()->success('Éxito','El usuario se actualizó', 'succes')->showConfirmButton();
    }

    public function role_assignment($request, array $roles = null)
    {
        $roles = (is_null($roles)) ? $request->roles : $roles;
        $this->has_permissio_mass_assignment($roles);
        $this->roles()->sync($roles);
        $this->verify_permission_integrity($roles);
        alert()->success('Éxito','Roles asignados', 'succes')->showConfirmButton();
    }

//Validacion
    public function is_admin()
    {
        $admin = config('app.admin_role');
    }

    public function has_role($id)
    {
        foreach ($this->roles as $role) {
            if($role->id == $id || $role->slug == $id) return true;
        }
        return false;
    }

    public function has_any_role(array $roles)
    {
        foreach ($roles as $role) {
            if ($this->has_role($role)) return true;
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

    public function verify_permission_integrity(array $roles)
    {
        $permissions = $this->permissions;
        foreach ($permissions as $permission) {
            if (!in_array($permission->role->id, $roles)) {
                $this->permissions()->detach($permission->id);
            }
        }
    }

    public function has_permissio_mass_assignment(array $roles)
    {
        foreach ($roles as $role) {
            if(!$this->has_role($role)){
                $role_obj = \App\Role::findOrFail($role);
                $permissions = $role_obj->permissions;
                $this->permissions()->syncWithoutDetaching($permissions);
            }
        }
    }

}
