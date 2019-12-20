@extends('layouts.app_fluid')
@section('pleca_menu')
<li class="nav-item">
    <a href="{{ route('dashboard.user.index') }}" class="nav-link active">Usuarios</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Estadísticas</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Asignar permisos
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Usuario: </strong>{{$user->name}}</h5>
            <p class="card-text"><strong>Selecciona los permisos a asignar:</strong></p>
            <form method="POST" class="" action="{{ route('dependence.user_dependence.permission_assignment', $user) }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        @foreach ($roles as $role)
                            <h6>{{$role->name}}</h6>
                            @foreach ($role->permissions as $permission)
                            <div class="custom-control custom-checkbox pl-5">
                                <input type="checkbox" class="custom-control-input" id="{{ $permission->id }}" value="{{ $permission->id }}" name="permissions[]" @if ($user->has_permission($permission->id))
                                checked @endif>
                                <label class="custom-control-label" for="{{ $permission->id }}">{{ $permission->name }}</label>
                            </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection