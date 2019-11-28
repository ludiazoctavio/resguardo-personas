@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Importar usuarios
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.user.store') }}">
            @csrf
            <div class="pb-3">
                <div class="form-row">
                    <div class="form-group required col-md-6">
                        <label for="name">Selecciona un archivo de excel:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre(s)">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Crear usuario</button>
        </form>
    </div>
</div>
@endsection
