@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Búsqueda de persona no localizada:
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.user.store') }}">
            @csrf
            <div class="pb-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="first_name">Autoriza que la información proporcionada sea utilizada exclusivamente para la búsqueda e identificación de la persona desaparecida o no localizada</label>
                            <input type="checkbox" class="custom-control-input" id="" value="" name="">
                            @error('name')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Autoriza que la información proporcionada sea pública</label>
                            <input type="checkbox" class="custom-control-input" id="" value="" name="">
                            @error('last_name_1')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="name">Nombre(s):</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="last_name_1">Primer apellido:</label>
                        <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="last_name_1" value="{{ old('last_name_1') }}" required>
                        @error('last_name_1')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name_2">Segundo apellido:</label>
                        <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ old('last_name_2') }}">
                        @error('last_name_2')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="name">Cargo:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="name">Teléfono</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Extensión:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="name">Dependencia</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Área de adscripción</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border-top py-3">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Correo electrónico:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Nombre de usuario:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Contraseña:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Confirmar contraseña:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">Tipo de usuario:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
