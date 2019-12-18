<div class="tab-pane fade" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox pl-5">
                    <input type="checkbox" class="custom-control-input" id="accept" value="true" name="person[authorization]" @if ($person->authorization) checked @endif>
                    <label class="custom-control-label" for="accept">Autoriza que la información proporcionada sea utilizada exclusivamente para la búsqueda e identificación de la persona desaparecida o no localizada</label>
                    @error('person[authorization]')
                        <div class="invalid-feedback active" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="custom-control custom-checkbox pl-5">
                    <input type="checkbox" class="custom-control-input" id="accept_public" value="true" name="person[public]" @if ($person->public) checked @endif>
                    <label class="custom-control-label" for="accept_public">Autoriza que la información proporcionada sea pública</label>
                    @error('person[public]')
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
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="person[first_name]"
                    value="{{ old('first_name', $person->first_name) }}" placeholder="Escribe el nombre(s)" required>
                @error('first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="person[last_name_1]"
                    value="{{ old('last_name_1', $person->last_name_1) }}" placeholder="Escribe el primer apellido" required>
                @error('last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="person[last_name_2]"
                    value="{{ old('last_name_2', $person->last_name_2) }}" placeholder="Escribe el segundo apellido">
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
                <label for="age_id">Edad:</label>
                <select class="form-control @error('age_id') is-invalid @enderror" id="age_id" name="person[age_id]">
                    @if (is_null($person->age))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($ages as $age)
                    @if (old('person[age_id]', $person->age_id) == $age->id)
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
            <div class="form-group required col-md-4">
                <label for="gender_id">Sexo:</label>
                <select class="form-control @error('gender_id') is-invalid @enderror" id="gender_id" name="person[gender_id]" required>
                    @if (is_null($person->gender))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($genders as $gender)
                    @if (old('person[gender_id]', $person->gender_id) == $gender->id)
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
            <div class="form-group required col-md-4">
                <label for="nationality_id">Nacionalidad:</label>
                <select class="form-control @error('nationality_id') is-invalid @enderror" id="nationality_id" name="person[nationality_id]" required>
                    @if (is_null($person->nationality))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($nationalities as $nationality)
                    @if (old('person[nationality_id]', $person->nationality_id) == $nationality->id)
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
            <div class="form-group col-md-4">
                <label for="time">Hora de desaparición:</label>
                <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="disappearance_report[time]"
                    value="{{ old('time', $person->disappearance_report->time) }}">
                @error('time')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="date">Fecha de desaparición:</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="disappearance_report[date]"
                    value="{{ old('date', $person->disappearance_report->date) }}" required>
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
                <input type="tel" pattern="[0-9]{10}" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="disappearance_report[cell_phone]"
                    value="{{ old('phone', $person->disappearance_report->cell_phone) }}">
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
                <select class="form-control @error('disability_id') is-invalid @enderror" id="disability_id" name="person[disability_id]">
                    @if (is_null($person->disability))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($disabilities as $disability)
                    @if (old('person[disability_id]', $person->disability_id) == $disability->id)
                    <option value="{{$disability->id}}" selected="">{{$disability->name}}</option>
                    @else
                    <option value="{{$disability->id}}">{{$disability->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('disability_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="physical_health_id">Condiciones de salud física:</label>
                <select class="form-control @error('physical_health_id') is-invalid @enderror" id="physical_health_id" name="person[physical_health_id]">
                    @if (is_null($person->physical_health))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($physical_healths as $physical_health)
                    @if (old('person[physical_health_id]', $person->physical_health_id) == $physical_health->id)
                    <option value="{{$physical_health->id}}" selected="">{{$physical_health->name}}</option>
                    @else
                    <option value="{{$physical_health->id}}">{{$physical_health->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('physical_health_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="mental_health_id">Condiciones de salud mental:</label>
                <select class="form-control @error('mental_health_id') is-invalid @enderror" id="mental_health_id" name="person[mental_health_id]">
                    @if (is_null($person->mental_health))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($mental_healths as $mental_health)
                    @if (old('person[mental_health_id]', $person->mental_health_id) == $mental_health->id)
                    <option value="{{$mental_health->id}}" selected="">{{$mental_health->name}}</option>
                    @else
                    <option value="{{$mental_health->id}}">{{$mental_health->name}}</option>
                    @endif
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
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="occupation_id">Ocupación:</label>
                <select class="form-control @error('occupation_id') is-invalid @enderror" id="occupation_id" name="person[occupation_id]">
                    @if (is_null($person->occupation))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($occupations as $occupation)
                    @if (old('person[occupation_id]', $person->occupation_id) == $occupation->id)
                    <option value="{{$occupation->id}}" selected="">{{$occupation->name}}</option>
                    @else
                    <option value="{{$occupation->id}}">{{$occupation->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('occupation_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="scholarship_id">Escolaridad:</label>
                <select class="form-control @error('scholarship_id') is-invalid @enderror" id="scholarship_id" name="person[scholarship_id]">
                    @if (is_null($person->scholarship))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($scholarships as $scholarship)
                    @if (old('person[scholarship_id]', $person->scholarship_id) == $scholarship->id)
                    <option value="{{$scholarship->id}}" selected="">{{$scholarship->name}}</option>
                    @else
                    <option value="{{$scholarship->id}}">{{$scholarship->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('scholarship_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="marital_status_id">Estado civil:</label>
                <select class="form-control @error('marital_status_id') is-invalid @enderror" id="marital_status_id" name="person[marital_status_id]">
                    @if (is_null($person->marital_status))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($marital_statuses as $marital_status)
                    @if (old('person[marital_status_id]', $person->marital_status_id) == $marital_status->id)
                    <option value="{{$marital_status->id}}" selected="">{{$marital_status->name}}</option>
                    @else
                    <option value="{{$marital_status->id}}">{{$marital_status->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('marital_status_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>