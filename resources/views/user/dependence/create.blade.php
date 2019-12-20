@extends('layouts.app_fluid')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Nuevo usuario
        </div>
        <div class="card-body">
            <form method="POST" class="" action="{{ route('dependence.user_dependence.store') }}">
                @csrf
                <div class="pb-3">
                    <div class="form-row">
                        <div class="form-group required col-md-4">
                            <label for="name">Nombre(s):</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre(s)" required>
                            @error('name')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group required col-md-4">
                            <label for="last_name_1">Primer apellido:</label>
                            <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="last_name_1" value="{{ old('last_name_1') }}" placeholder="Primer apellido" required>
                            @error('last_name_1')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="last_name_2">Segundo apellido:</label>
                            <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ old('last_name_2') }}" placeholder="Segundo apellido">
                            @error('last_name_2')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-4">
                            <label for="position">Cargo:</label>
                            <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ old('position') }}" placeholder="Cargo" required>
                            @error('position')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group required col-md-4">
                            <label for="phone">Teléfono</label>
                            <input type="tel" pattern="[0-9]{10}" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Teléfono" required>
                            @error('phone')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone_extension">Extensión:</label>
                            <input type="text" class="form-control @error('phone_extension') is-invalid @enderror" id="phone_extension" name="phone_extension" value="{{ old('phone_extension') }}" placeholder="Extensión">
                            @error('phone_extension')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        {{--<div class="form-group col-md-4">
                            <label for="ascription">Área de adscripción</label>
                            
                            @error('ascription')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>--}}
                    </div>
                </div>
                <div class="border-top py-3">
                    <div class="form-row">
                        <div class="form-group required col-md-4">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
                            @error('email')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        {{--<div class="form-group col-md-4">
                            <label for="name">Nombre de usuario:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                            @error('name')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>--}}
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-4">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required="required">
                            @error('password')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group required col-md-4">
                            <label for="password_confirmation">Confirmar contraseña:</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required="required" autocomplete="new-password" placeholder="Confirmar contraseña" required>
                            @error('password_confirmation')
                                <div class="invalid-feedback active" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group required col-md-4">
                            <label for="role">Tipo de usuario:</label>
                            <select class="form-control @error('role') is-invalid @enderror" id="role" name="role" required>
                                <option value="" disabled="" selected="">Selecciona un rol</option>
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="invalid-feedback" role="alert">
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
</div>
@endsection
@section('extra_script')
<script type="text/javascript">
    $(function() {
        $('input[type=text]').keyup(function() {
            this.value = this.value.toLocaleUpperCase();
        });
        $('textarea').keyup(function() {
            this.value = this.value.toLocaleUpperCase();
        });
    });
</script>
@endsection
