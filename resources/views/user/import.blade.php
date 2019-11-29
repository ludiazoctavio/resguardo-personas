@extends('layouts.app')

@section('content')
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
@endsection
