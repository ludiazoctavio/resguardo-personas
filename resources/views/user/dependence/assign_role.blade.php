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
            Asignar roles
        </div>
        <div class="card-body">
            <h5 class="card-title"><strong>Usuario: </strong>{{$user->name}}</h5>
            <p class="card-text"><strong>Selecciona los roles a asignar:</strong></p>
            <form method="POST" class="" action="{{ route('dependence.user_dependence.role_assignment', $user) }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        @foreach ($roles as $role)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="{{ $role->id }}" value="{{ $role->id }}" name="roles[]" @if ($user->has_role($role->id))
                            checked @endif>
                            <label class="custom-control-label" for="{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection