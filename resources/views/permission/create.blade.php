@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Crear permiso
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.permission.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                    @error('name')
                        <div class="invalid-feedback active" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="role_id">Rol</label>
                    <select class="form-control @error('role_id') is-invalid @enderror" id="role_id" name="role_id">
                        <option value="" disabled="" selected="">Selecciona un rol</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="description">Descripción</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
