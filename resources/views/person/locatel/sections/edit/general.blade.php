{{$person}}
<div class="tab-pane fade" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
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
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="person[last_name_2]" value="{{ old('last_name_2') }}" placeholder="Escribe el segundo apellido">
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
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($ages as $age)
                    <option value="{{$age->id}}">{{$age->name}}</option>
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
            <div class="form-group required col-md-4">
                <label for="nationality_id">Nacionalidad:</label>
                <select class="form-control @error('nationality_id') is-invalid @enderror" id="nationality_id" name="person[nationality_id]" required>
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
                <input type="time" class="form-control @error('time') is-invalid @enderror" id="time" name="disappearance_report[time]" value="{{ old('time') }}">
                @error('time')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="date">Fecha de desaparición:</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="disappearance_report[date]" value="{{ old('date') }}" required>
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
                <input type="number" maxlength="10" minlength="10" class="form-control @error('phone') is-invalid @enderror" id="phone" name="disappearance_report[phone]" value="{{ old('phone') }}" placeholder="5555555555">
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
                <label for="physical_health_id">Condiciones de salud física:</label>
                <select class="form-control @error('physical_health_id') is-invalid @enderror" id="physical_health_id" name="person[physical_health_id]">
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
            <div class="form-group col-md-4">
                <label for="mental_health_id">Condiciones de salud mental:</label>
                <select class="form-control @error('mental_health_id') is-invalid @enderror" id="mental_health_id" name="person[mental_health_id]">
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
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="occupation_id">Ocupación:</label>
                <select class="form-control @error('occupation_id') is-invalid @enderror" id="occupation_id" name="person[occupation_id]">
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
                <label for="scholarship_id">Escolaridad:</label>
                <select class="form-control @error('scholarship_id') is-invalid @enderror" id="scholarship_id" name="person[scholarship_id]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($scholarships as $scholarship)
                    <option value="{{$scholarship->id}}">{{$scholarship->name}}</option>
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
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($marital_statuses as $marital_status)
                    <option value="{{$marital_status->id}}">{{$marital_status->name}}</option>
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