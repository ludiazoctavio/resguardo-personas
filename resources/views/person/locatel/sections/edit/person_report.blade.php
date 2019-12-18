<div class="tab-pane fade show active" id="pills-person_report" role="tabpanel" aria-labelledby="pills-person_report-tab">
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="anonymous">*Anónimo:</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" name="person_report[confidential]" value="true" class="custom-control-input" @if ($person->person_report->confidential) checked @endif>
                    <label class="custom-control-label" for="customRadioInline1">Sí</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="person_report[confidential]" value="false" class="custom-control-input" @if (!$person->person_report->confidential) checked @endif>
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
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="person_report[first_name]"
                    value="{{ old('person_report[first_name]', $person->person_report->first_name) }}" placeholder="Escribe el nombre(s)" required>
                @error('first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="person_report[last_name_1]"
                    value="{{ old('last_name_1', $person->person_report->last_name_1) }}" placeholder="Escribe el primer apellido" required>
                @error('last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="person_report[last_name_2]"
                    value="{{ old('last_name_2', $person->person_report->last_name_2) }}" placeholder="Escribe el segundo apellido">
                @error('last_name_2')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="age_id">Edad:</label>
                <select class="form-control @error('age_id') is-invalid @enderror" id="age_id" name="person_report[age_id]">
                    @if (is_null($person->person_report->age))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($ages as $age)
                    @if (old('person_report[age_id]', $person->person_report->age_id) == $age->id)
                    <option value="{{$age->id}}" selected="">{{$age->name}}</option>
                    @else
                    <option value="{{$age->id}}">{{$age->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('age_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="gender_id">Sexo:</label>
                <select class="form-control @error('gender_id') is-invalid @enderror" id="gender_id" name="person_report[gender_id]">
                    @if (is_null($person->person_report->gender))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($genders as $gender)
                    @if (old('person_report[gender_id]', $person->person_report->gender_id) == $gender->id)
                    <option value="{{$gender->id}}" selected="">{{$gender->name}}</option>
                    @else
                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endif
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
                <select class="form-control @error('relationship_id') is-invalid @enderror" id="relationship_id" name="person_report[relationship_id]" required>
                    @if (is_null($person->person_report->relationship))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($relationships as $relationship)
                    @if (old('person_report[relationship_id]', $person->person_report->relationship_id) == $relationship->id)
                    <option value="{{$relationship->id}}" selected="">{{$relationship->name}}</option>
                    @else
                    <option value="{{$relationship->id}}">{{$relationship->name}}</option>
                    @endif
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
                <select class="form-control @error('nationality_id') is-invalid @enderror" id="nationality_id" name="person_report[nationality_id]">
                    @if (is_null($person->person_report->nationality))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($nationalities as $nationality)
                    @if (old('person[nationality_id]', $person->person_report->nationality_id) == $nationality->id)
                    <option value="{{$nationality->id}}" selected="">{{$nationality->name}}</option>
                    @else
                    <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                    @endif
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
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="person_report[email]" value="{{ old('email', $person->person_report->email) }}" placeholder="Correo electrónico">
                @error('email')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="phone">Teléfono:</label>
                <input type="tel" pattern="[0-9]{10}" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" placeholder="5555555555">
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
                <label for="street">Calle:</label>
                <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="street" value="{{ old('street') }}" placeholder="Escribe la calle">
                @error('street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="number">No. exterior:</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number') }}" placeholder="Escribe el número exterior">
                @error('number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="outdoor_number">No. interior:</label>
                <input type="text" class="form-control @error('outdoor_number') is-invalid @enderror" id="outdoor_number" name="outdoor_number" value="{{ old('outdoor_number') }}" placeholder="Escribe el número interior">
                @error('outdoor_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="pc">Código postal:</label>
                <input type="text" class="form-control @error('pc') is-invalid @enderror" id="pc" name="pc" value="{{ old('pc') }}">
                @error('pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="suburb">Colonia:</label>
                <input type="text" class="form-control @error('suburb') is-invalid @enderror" id="suburb" name="suburb" value="{{ old('suburb') }}">
                @error('suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="city_id">Alcaldía:</label>
                <select class="form-control @error('city_id') is-invalid @enderror" id="city_id" name="city_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
                @error('city_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="state_id">Entidad:</label>
                <select class="form-control @error('state_id') is-invalid @enderror" id="state_id" name="state_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                @error('state_id')
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
                <label for="identification_type_id">Documento con el que se identifica:</label>
                <select class="form-control @error('identification_type_id') is-invalid @enderror" id="identification_type_id" name="identification_type_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($identification_types as $identification_type)
                    <option value="{{$identification_type->id}}">{{$identification_type->name}}</option>
                    @endforeach
                </select>
                @error('identification_type_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="number_identification">Número o folio de la identificación:</label>
                <input type="text" class="form-control @error('number_identification') is-invalid @enderror" id="number_identification" name="number_identification" value="{{ old('number_identification') }}" placeholder="Escribe el número o folio ">
                @error('number_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image_identification">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image_identification" name="image_identification" accept="image/*" lang="es">
                    <label class="custom-file-label" for="customFileLang">Selecciona un archivo JPG o PNG</label>
                </div>
                @error('image_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>