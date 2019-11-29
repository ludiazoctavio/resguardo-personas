<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Dependence;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

use Illuminate\Http\Request;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
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
        return view('user.index', [
            'users' => User::all(),
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
        return view('user.locatel.create', [
            'roles' => Role::all(),
            'dependences' => Dependence::all(),
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
        $user = $user->store($request);
        return redirect()->route('dashboard.user.show', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return view('user.show', [
            'user' =>$user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('user.locatel.edit', [
            'user' => $user,
            'dependences' => Dependence::where('id', '!=', $user->dependence_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        $user->my_update($request);
        return redirect()->route('dashboard.user.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        alert()->success('Éxito','Usuario eliminado', 'succes')->showConfirmButton();
        return redirect()->route('dashboard.user.index');
    }

    /**
     * Formulario rol.
     *
    */
    public function assign_role(User $user)
    {
        $this->authorize('assign_role', $user);
        return view('user.assign_role', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Asignar rol.
     *
    */
    public function role_assignment(Request $request, User $user)
    {
        $this->authorize('assign_role', $user);
        $user->role_assignment($request);
        return redirect()->route('dashboard.user.show', $user);
    }

    /**
     * Formulario permisos.
     *
    */
    public function assign_permission(User $user)
    {
        $this->authorize('assign_permission', $user);
        return view('user.assign_permission', [
            'user' => $user,
            'roles' => $user->roles,
        ]);
    }

    /**
     * Asignar permisos.
     *
    */
    public function permission_assignment(Request $request, User $user)
    {
        $this->authorize('assign_permission', $user);
        $user->permissions()->sync($request->permissions);    
        alert()->success('Éxito','Permisos asignados', 'succes')->showConfirmButton();
        return redirect()->route('dashboard.user.show', $user);
    }

    /**
     * Importar desde excel
     *
    */
    public function import(Request $request) 
    {
        $this->authorize('import', $user);
        return view('user.import');
    }

    /**
     * Importar desde excel
     *
    */
    public function make_import(Request $request) 
    {
        $this->authorize('import', $user);
        Excel::import(new UsersImport, $request->file('excel'));
        alert()->success('Éxito','Usuarios importados', 'succes')->showConfirmButton();
        return redirect()->route('dashboard.user.index');
    }
}
