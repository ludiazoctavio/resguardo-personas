@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Búsqueda de persona no localizada:
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.person.store') }}">
            @csrf
            <div class="pb-3">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="custom-control custom-checkbox pl-5">
                                <input type="checkbox" class="custom-control-input" id="accept" value="" name="accept">
                                <label class="custom-control-label" for="accept">Autoriza que la información proporcionada sea utilizada exclusivamente para la búsqueda e identificación de la persona desaparecida o no localizada</label>
                                @error('accept')
                                    <div class="invalid-feedback active" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="custom-control custom-checkbox pl-5">
                                <input type="checkbox" class="custom-control-input" id="accept_public" value="" name="accept_public">
                                <label class="custom-control-label" for="accept_public">Autoriza que la información proporcionada sea pública</label>
                                @error('accept_public')
                                    <div class="invalid-feedback active" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="first_name">Nombre(s):</label>
                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Escribe el nombre(s)" required>
                        @error('first_name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="last_name_1">Primer apellido:</label>
                        <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="last_name_1" value="{{ old('last_name_1') }}" placeholder="Escribe el primer apellido" required>
                        @error('last_name_1')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name_2">Segundo apellido:</label>
                        <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ old('last_name_2') }}" placeholder="Escribe el segundo apellido">
                        @error('last_name_2')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="alias">Responde al nombre de:</label>
                        <input type="text" class="form-control @error('alias') is-invalid @enderror" id="alias" name="alias" value="{{ old('alias') }}" placeholder="Especifica el apodo o alias con el que responde la persona">
                        @error('alias')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="age">Edad:</label>
                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" placeholder="Escribe la edad">
                        @error('age')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="gender_id">Sexo:</label>
                        <select class="form-control @error('gender_id') is-invalid @enderror" id="gender_id" name="gender_id">
                            <option value="" disabled="" selected="">Selecciona</option>
                            @foreach ($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                            @endforeach
                        </select>
                        @error('gender_id')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nationality_id">Nacionalidad:</label>
                        <select class="form-control @error('nationality_id') is-invalid @enderror" id="nationality_id" name="nationality_id">
                            <option value="" disabled="" selected="">Selecciona</option>
                            @foreach ($nationalities as $nationality)
                            <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                            @endforeach
                        </select>
                        @error('nationality_id')
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
                        <label for="time">Hora de desaparición:</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time') }}">
                        @error('time')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="date">Fecha de desaparición:</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                        @error('date')
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
                        <label for="phone">Teléfono celular:</label>
                        <input type="number" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="5555555555">
                        @error('phone')
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
                        <label for="disability_id">Tipo de discapacidad:</label>
                        <select class="form-control @error('disability_id') is-invalid @enderror" id="disability_id" name="disability_id">
                            <option value="" disabled="" selected="">Selecciona</option>
                            @foreach ($disabilities as $disability)
                            <option value="{{$disability->id}}">{{$disability->name}}</option>
                            @endforeach
                        </select>
                        @error('disability_id')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Condiciones de salud física:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Condiciones de salud mental:</label>
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
                        <label for="name">Ocupación:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Escolaridad:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="name">Estado civil:</label>
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
