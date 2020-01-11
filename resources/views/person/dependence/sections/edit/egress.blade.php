<div class="tab-pane fade" id="pills-egress" role="tabpanel" aria-labelledby="pills-egress-tab">
    <div class="py-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="egress_date">Fecha de egreso:</label>
                <input type="date" class="form-control @error('egress_date') is-invalid @enderror" id="egress_date" name="egress[date]"
                    value="@if(is_null($person->egress)){{ old('egress_time') }}@else{{ old('egress_time', $person->egress->date) }}@endif">
                @error('egress_date')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_time">Hora de egreso:</label>
                <input type="time" class="form-control @error('egress_time') is-invalid @enderror" id="egress_time" name="egress[time]"
                    value="@if(is_null($person->egress)){{ old('egress_time') }}@else{{ old('egress_time', $person->egress->time) }}@endif">
                @error('egress_time')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="reason_egress">Motivo de egreso:</label>
                <textarea class="form-control @error('reason_egress') is-invalid @enderror" id="reason_egress" name="egress[description]"
                    rows="3" placeholder="Describe el motivo">@if(is_null($person->egress)){{ old('egress_time') }}@else{{ old('egress_time', $person->egress->description) }}@endif</textarea>
                @error('reason_egress')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Persona acompañante</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="egress_accompanying_first_name">Nombre(s):</label>
                <input type="text" class="form-control @error('egress_accompanying_first_name') is-invalid @enderror" id="egress_accompanying_first_name"
                    name="companion_egress[first_name]" value="{{ old('egress_accompanying_first_name', $person->egress->companion->first_name  ?? '') }}" placeholder="Escribe el nombre(s)">
                @error('egress_accompanying_first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('egress_accompanying_last_name_1') is-invalid @enderror" id="egress_accompanying_last_name_1"
                    name="companion_egress[last_name_1]" value="{{ old('egress_accompanying_last_name_1', $person->egress->companion->last_name_1  ?? '')}}" placeholder="Escribe el primer apellido">
                @error('egress_accompanying_last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('egress_accompanying_last_name_2') is-invalid @enderror" id="egress_accompanying_last_name_2"
                    name="companion_egress[last_name_2]" value="{{ old('egress_accompanying_last_name_2', $person->egress->companion->last_name_2  ?? '') }}" placeholder="Escribe el segundo apellido">
                @error('egress_accompanying_last_name_2')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="egress_accompanying_alias">Responde al nombre de:</label>
                <input type="text" class="form-control @error('egress_accompanying_alias') is-invalid @enderror" id="egress_accompanying_alias"
                    name="egress_accompanying_alias" value="{{ old('egress_accompanying_alias') }}" placeholder="Especifica el apodo o alias con el que responde la persona">
                @error('egress_accompanying_alias')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="egress_accompanying_identification_type_id">Documento con el que se identifica:</label>
                <select class="form-control @error('egress_accompanying_identification_type_id') is-invalid @enderror" id="egress_accompanying_identification_type_id"
                    name="companion_egress_identification[identification_type_id]">
                    @if (is_null($person->egress->companion->identification->identification_type_id ?? null))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($identification_types as $identification_type) 
                    @if (old('identification[identification_type_id]', $person->egress->companion->identification->identification_type_id ?? '') == $identification_type->id)
                    <option value="{{$identification_type->id}}" selected="">{{$identification_type->name}}</option>
                    @else
                    <option value="{{$identification_type->id}}">{{$identification_type->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('egress_accompanying_identification_type_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="egress_accompanying_number_identification">Número o folio de la identificación:</label>
                <input type="text" class="form-control @error('egress_accompanying_number_identification') is-invalid @enderror" id="egress_accompanying_number_identification"
                    name="companion_egress_identification[folio]" value="{{ old('egress_accompanying_number_identification', $person->egress->companion->identification->folio ?? '') }}" placeholder="Escribe el número o folio ">
                @error('egress_accompanying_number_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="egress_accompanying_image_identification">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="egress_accompanying_image_identification" name="egress_accompanying_image_identification" accept="image/*" lang="es">
                    <label class="custom-file-label" for="egress_accompanying_image_identification">Selecciona un archivo JPG o PNG</label>
                </div>
                @error('egress_accompanying_image_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5>Domicilio del acompañante</h5>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="egress_accompanying_street">Calle:</label>
                <input type="text" class="form-control @error('egress_accompanying_street') is-invalid @enderror" id="egress_accompanying_street" name="companion_egress_address[street]"
                    value="{{ old('egress_accompanying_street', $person->egress->companion->address->street ?? '') }}" placeholder="Escribe la calle">
                @error('egress_accompanying_street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_number">No. exterior:</label>
                <input type="text" class="form-control @error('egress_accompanying_number') is-invalid @enderror" id="egress_accompanying_number" name="companion_egress_address[number]"
                    value="{{ old('egress_accompanying_number', $person->egress->companion->address->number ?? '') }}" placeholder="Escribe el número exterior">
                @error('egress_accompanying_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_outdoor_number">No. interior:</label>
                <input type="text" class="form-control @error('egress_accompanying_outdoor_number') is-invalid @enderror" id="egress_accompanying_outdoor_number" name="companion_egress_address[outdoor_number]"
                    value="{{ old('egress_accompanying_outdoor_number', $person->egress->companion->address->outdoor_number ?? '') }}" placeholder="Escribe el número interior">
                @error('egress_accompanying_outdoor_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="egress_accompanying_pc">Código postal:</label>
                <input type="text" pattern="[0-9]{5}" maxlength="5" minlength="5" class="form-control @error('egress_accompanying_pc') is-invalid @enderror" id="egress_accompanying_pc"
                    name="companion_egress_address[pc]"
                    value="{{ old('egress_accompanying_pc', $person->egress->companion->address->pc ?? '') }}">
                @error('egress_accompanying_pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="egress_accompanying_suburb">Colonia:</label>
                <input type="text" class="form-control @error('egress_accompanying_suburb') is-invalid @enderror" id="egress_accompanying_suburb" name="companion_egress_address[suburb]"
                    value="{{ old('egress_accompanying_suburb', $person->egress->companion->address->suburb ?? '') }}">
                @error('egress_accompanying_suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="egress_accompanying_city_id">Alcaldía:</label>
                <select class="form-control @error('egress_accompanying_city_id') is-invalid @enderror" id="egress_accompanying_city_id" name="companion_egress_address[city_id]">
                    @if (is_null($person->egress->companion->address->city_id ?? null))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($cities as $city)
                    @if (old('identification[age_id]', $person->egress->companion->address->city_id ?? '') == $city->id)
                    <option value="{{$city->id}}" selected="">{{$city->name}}</option>
                    @else
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('egress_accompanying_city_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="egress_accompanying_state_id">Entidad:</label>
                <select class="form-control @error('egress_accompanying_state_id') is-invalid @enderror" id="egress_accompanying_state_id" name="companion_egress_address[state_id]">
                    @if (is_null($person->egress->companion->address->state_id ?? null))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($states as $state)
                    @if (old('identification[age_id]', $person->egress->companion->address->state_id ?? '') == $state->id)
                    <option value="{{$state->id}}" selected="">{{$state->name}}</option>
                    @else
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('egress_accompanying_state_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>