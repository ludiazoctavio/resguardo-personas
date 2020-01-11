@extends('layouts.app_fluid')
@section('pleca_menu')
<li class="nav-item">
    <a href="{{ route('dashboard.user.index') }}" class="nav-link hover-link border-right active">Usuarios</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link hover-link">Estadísticas</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Importar usuarios
        </div>
        <div class="card-body">
            <form method="POST" class="" action="{{ route('dashboard.user_make_import') }}" enctype="multipart/form-data">
                @csrf
                <div class="pb-3">
                    <div class="form-row">
                        <div class="form-group required col-md-6">
                            <label for="excel">Selecciona un archivo de excel:</label>
                            <input type="file" class="form-control @error('excel') is-invalid @enderror" id="excel" name="excel" value="{{ old('name') }}" placeholder="Nombre(s)" required="required">
                            @error('excel')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Importar</button>
            </form>
        </div>
    </div>
</div>
@endsection
