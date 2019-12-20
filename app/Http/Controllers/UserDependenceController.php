<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Dependence;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserDependenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index', User::class);
        return view('user.dependence.index', [
            'users' => User::where('dependence_id', '=', Auth::user()->dependence->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        return view('user.dependence.create', [
            'roles' => Role::whereIn('id', [5,6])->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request, User $user)
    {
        $user = $user->store_dependence($request);
        return redirect()->route('dependence.user_dependence.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user_dependence)
    {
        $this->authorize('view', $user_dependence);
        return view('user.dependence.show', [
            'user' =>$user_dependence,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user_dependence)
    {
        $this->authorize('update', $user_dependence);
        return view('user.dependence.edit', [
            'user' => $user_dependence,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user_dependence)
    {
        $user_dependence->my_update($request);
        return redirect()->route('dependence.user_dependence.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user_dependence)
    {
        $this->authorize('delete', $user_dependence);
        $user_dependence->delete();
        alert()->success('Éxito','Usuario eliminado', 'succes')->showConfirmButton();
        return redirect()->route('dependence.user_dependence.index');
    }

    /**
     * Formulario rol.
     *
    */
    public function assign_role(User $user_dependence)
    {
        $this->authorize('assign_role', $user_dependence);
        return view('user.dependence.assign_role', [
            'user' => $user_dependence,
            'roles' => Role::whereIn('id', [5,6])->get(),
        ]);
    }

    /**
     * Asignar rol.
     *
    */
    public function role_assignment(Request $request, User $user_dependence)
    {
        $this->authorize('assign_role', $user_dependence);
        $user_dependence->role_assignment($request);
        return redirect()->route('dependence.user_dependence.show', $user_dependence);
    }

    /**
     * Formulario permisos.
     *
    */
    public function assign_permission(User $user_dependence)
    {
        $this->authorize('assign_permission', $user_dependence);
        return view('user.dependence.assign_permission', [
            'user' => $user_dependence,
            'roles' => $user_dependence->roles,
        ]);
    }

    /**
     * Asignar permisos.
     *
    */
    public function permission_assignment(Request $request, User $user_dependence)
    {
        $this->authorize('assign_permission', $user_dependence);
        $user_dependence->permissions()->sync($request->permissions);    
        alert()->success('Éxito','Permisos asignados', 'succes')->showConfirmButton();
        return redirect()->route('dependence.user_dependence.show', $user_dependence);
    }
}
