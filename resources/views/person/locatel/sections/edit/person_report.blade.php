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
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="person_report[email]" value="{{ old('email', $person->person_report->email) }}" placeholder="Correo electrónico">
                @error('email')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            @foreach($person->person_report->phones as $obj)
            <div class="form-group col-md-4">
                <label for="phone">Teléfono:</label>
                <input type="tel" pattern="[0-9]{10}" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone"
                    name="person_report_phone[phone]" value="{{ old('phone', $obj->phone) }}" placeholder="5555555555">
                @error('phone')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="phone_type_id">Tipo de teléfono:</label>
                <select class="form-control @error('phone_type_id') is-invalid @enderror" id="phone_type_id"
                    name="person_report_phone[phone_type_id]">
                    @if (is_null($obj->phone_type_id))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($phone_types as $phone_type)
                    @if (old('identification[identification_type_id]', $obj->phone_type_id) == $phone_type->id)
                    <option value="{{$phone_type->id}}" selected="">{{$phone_type->name}}</option>
                    @else
                    <option value="{{$phone_type->id}}">{{$phone_type->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('phone_type_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            @endforeach
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Domicilio</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="street">Calle:</label>
                <input type="text" class="form-control @error('street') is-invalid @enderror" id="street"
                    name="person_report_address[street]" value="{{ old('street', $person->person_report->address->street) }}" placeholder="Escribe la calle">
                @error('street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="number">No. exterior:</label>
                <input type="text" class="form-control @error('number') is-invalid @enderror" id="number"
                    name="person_report_address[number]" value="{{ old('number', $person->person_report->address->number) }}" placeholder="Escribe el número exterior">
                @error('number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="outdoor_number">No. interior:</label>
                <input type="text" class="form-control @error('outdoor_number') is-invalid @enderror" id="outdoor_number"
                    name="person_report_address[outdoor_number]" value="{{ old('outdoor_number', $person->person_report->address->outdoor_number) }}" placeholder="Escribe el número interior">
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
                <input type="text" pattern="[0-9]{5}" maxlength="5" minlength="5" class="form-control @error('pc') is-invalid @enderror" id="pc"
                    name="person_report_address[pc]" value="{{ old('pc', $person->person_report->address->pc) }}">
                @error('pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="suburb">Colonia:</label>
                <input type="text" class="form-control @error('suburb') is-invalid @enderror" id="suburb"
                    name="person_report_address[suburb]" value="{{ old('suburb', $person->person_report->address->suburb) }}">
                @error('suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="city_id">Alcaldía:</label>
                <select class="form-control @error('city_id') is-invalid @enderror" id="city_id"
                    name="person_report_address[city_id]">
                    @if (is_null($person->person_report->address->city_id ?? null))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($cities as $city)
                    @if (old('person_report_address[city_id]', $person->person_report->address->city_id ?? '') == $city->id)
                    <option value="{{$city->id}}" selected="">{{$city->name}}</option>
                    @else
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endif
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
                <select class="form-control @error('state_id') is-invalid @enderror" id="state_id"
                    name="person_report_address[state_id]">
                    @if (is_null($person->person_report->address->state_id ?? null))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($states as $state)
                    @if (old('person_report_address[state_id]', $person->person_report->address->state_id ?? '') == $state->id)
                    <option value="{{$state->id}}" selected="">{{$state->name}}</option>
                    @else
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endif
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
                <select class="form-control @error('identification_type_id') is-invalid @enderror" id="identification_type_id"
                    name="person_report_identification[identification_type_id]">
                    @if (is_null($person->person_report->identification->identification_type_id))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($identification_types as $identification_type) 
                    @if (old('person_report_identification[identification_type_id]', $person->person_report->identification->identification_type_id) == $identification_type->id)
                    <option value="{{$identification_type->id}}" selected="">{{$identification_type->name}}</option>
                    @else
                    <option value="{{$identification_type->id}}">{{$identification_type->name}}</option>
                    @endif
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
                <input type="text" class="form-control @error('number_identification') is-invalid @enderror" id="number_identification"
                    name="person_report_identification[folio]" value="{{ old('number_identification', $person->person_report->identification->folio) }}" placeholder="Escribe el número o folio ">
                @error('number_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        {{--<div class="form-row">
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
        </div>--}}
    </div>
</div>
