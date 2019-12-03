<div class="tab-pane fade show active" id="pills-person_report" role="tabpanel" aria-labelledby="pills-person_report-tab">
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="anonymous">*Anónimo:</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">No</label>
                </div>
                @error('accept')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
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
            <div class="form-group col-md-3">
                <label for="age">Edad:</label>
                <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" placeholder="Escribe la edad">
                @error('age')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
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
            <div class="form-group required col-md-3">
                <label for="relationship_id">Parentesco:</label>
                <select class="form-control @error('relationship_id') is-invalid @enderror" id="relationship_id" name="relationship_id" required>
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($relationships as $relationship)
                    <option value="{{$relationship->id}}">{{$relationship->name}}</option>
                    @endforeach
                </select>
                @error('relationship_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
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
            <div class="form-group required col-md-4">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico">
                @error('email')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Teléfono:</label>
                <input type="number" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="5555555555">
                @error('phone')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="phone_type_id">Tipo de teléfono:</label>
                <select class="form-control @error('phone_type_id') is-invalid @enderror" id="phone_type_id" name="phone_type_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($phone_types as $phone_type)
                    <option value="{{$phone_type->id}}">{{$phone_type->name}}</option>
                    @endforeach
                </select>
                @error('phone_type_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Domicilio</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first_name">Calle:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Escribe la calle">
                @error('first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_1">No. exterior:</label>
                <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="last_name_1" value="{{ old('last_name_1') }}" placeholder="Escribe el número exterior">
                @error('last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_2">No. interior:</label>
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ old('last_name_2') }}" placeholder="Escribe el número interior">
                @error('last_name_2')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="last_name_2">Código postal:</label>
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ old('last_name_2') }}">
                @error('last_name_2')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="physical_health_id">Colonia:</label>
                <select class="form-control @error('physical_health_id') is-invalid @enderror" id="physical_health_id" name="physical_health_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($physical_healths as $physical_health)
                    <option value="{{$physical_health->id}}">{{$physical_health->name}}</option>
                    @endforeach
                </select>
                @error('physical_health_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="mental_health_id">Alcaldía:</label>
                <select class="form-control @error('mental_health_id') is-invalid @enderror" id="mental_health_id" name="mental_health_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($mental_healths as $mental_health)
                    <option value="{{$mental_health->id}}">{{$mental_health->name}}</option>
                    @endforeach
                </select>
                @error('mental_health_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="mental_health_id">Entidad:</label>
                <select class="form-control @error('mental_health_id') is-invalid @enderror" id="mental_health_id" name="mental_health_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($mental_healths as $mental_health)
                    <option value="{{$mental_health->id}}">{{$mental_health->name}}</option>
                    @endforeach
                </select>
                @error('mental_health_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Identificación</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="occupation_id">Documento con el que se identifica:</label>
                <select class="form-control @error('occupation_id') is-invalid @enderror" id="occupation_id" name="occupation_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($occupations as $occupation)
                    <option value="{{$occupation->id}}">{{$occupation->name}}</option>
                    @endforeach
                </select>
                @error('occupation_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="first_name">Número o folio de la identificación:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="Escribe el número o folio ">
                @error('first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="occupation_id">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Selecciona un archivo JPG o PNG</label>
                </div>
                @error('occupation_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>