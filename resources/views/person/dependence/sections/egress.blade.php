<div class="tab-pane fade" id="pills-egress" role="tabpanel" aria-labelledby="pills-egress-tab">
    <div class="py-3">
        <div class="form-row">
            <div class="form-group required col-md-4">
                <label for="egress_date">Fecha de egreso:</label>
                <input type="date" class="form-control @error('egress_date') is-invalid @enderror" id="egress_date" name="egress_date" value="{{ old('egress_date') }}" required>
                @error('egress_date')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="egress_time">Hora de egreso:</label>
                <input type="time" class="form-control @error('egress_time') is-invalid @enderror" id="egress_time" name="egress_time" value="{{ old('egress_time') }}" required>
                @error('egress_time')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group required col-md-12">
                <label for="reason_egress">Motivo de egreso:</label>
                <textarea class="form-control @error('reason_egress') is-invalid @enderror" id="reason_egress" name="reason_egress" rows="3" placeholder="Describe el motivo" required>{{ old('reason_egress') }}</textarea>
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
                <input type="text" class="form-control @error('egress_accompanying_first_name') is-invalid @enderror" id="egress_accompanying_first_name" name="egress_accompanying_first_name" value="{{ old('egress_accompanying_first_name') }}" placeholder="Escribe el nombre(s)">
                @error('egress_accompanying_first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('egress_accompanying_last_name_1') is-invalid @enderror" id="egress_accompanying_last_name_1" name="egress_accompanying_last_name_1" value="{{ old('egress_accompanying_last_name_1') }}" placeholder="Escribe el primer apellido">
                @error('egress_accompanying_last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('egress_accompanying_last_name_2') is-invalid @enderror" id="egress_accompanying_last_name_2" name="egress_accompanying_last_name_2" value="{{ old('egress_accompanying_last_name_2') }}" placeholder="Escribe el segundo apellido">
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
                <input type="text" class="form-control @error('egress_accompanying_alias') is-invalid @enderror" id="egress_accompanying_alias" name="egress_accompanying_alias" value="{{ old('egress_accompanying_alias') }}" placeholder="Especifica el apodo o alias con el que responde la persona">
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
                <select class="form-control @error('egress_accompanying_identification_type_id') is-invalid @enderror" id="egress_accompanying_identification_type_id" name="egress_accompanying_identification_type_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($identification_types as $identification_type)
                    <option value="{{$identification_type->id}}">{{$identification_type->name}}</option>
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
                <input type="text" class="form-control @error('egress_accompanying_number_identification') is-invalid @enderror" id="egress_accompanying_number_identification" name="egress_accompanying_number_identification" value="{{ old('egress_accompanying_number_identification') }}" placeholder="Escribe el número o folio ">
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
                    <input type="file" class="custom-file-input" id="egress_accompanying_image_identification" name="egress_accompanying_image_identification" lang="es">
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
                <input type="text" class="form-control @error('egress_accompanying_street') is-invalid @enderror" id="egress_accompanying_street" name="egress_accompanying_street" value="{{ old('egress_accompanying_street') }}" placeholder="Escribe la calle">
                @error('egress_accompanying_street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_number">No. exterior:</label>
                <input type="text" class="form-control @error('egress_accompanying_number') is-invalid @enderror" id="egress_accompanying_number" name="egress_accompanying_number" value="{{ old('egress_accompanying_number') }}" placeholder="Escribe el número exterior">
                @error('egress_accompanying_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="egress_accompanying_outdoor_number">No. interior:</label>
                <input type="text" class="form-control @error('egress_accompanying_outdoor_number') is-invalid @enderror" id="egress_accompanying_outdoor_number" name="egress_accompanying_outdoor_number" value="{{ old('egress_accompanying_outdoor_number') }}" placeholder="Escribe el número interior">
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
                <input type="text" class="form-control @error('egress_accompanying_pc') is-invalid @enderror" id="egress_accompanying_pc" name="egress_accompanying_pc" value="{{ old('egress_accompanying_pc') }}">
                @error('egress_accompanying_pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="egress_accompanying_suburb">Colonia:</label>
                <input type="text" class="form-control @error('egress_accompanying_suburb') is-invalid @enderror" id="egress_accompanying_suburb" name="egress_accompanying_suburb" value="{{ old('egress_accompanying_suburb') }}">
                @error('egress_accompanying_suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="egress_accompanying_city_id">Alcaldía:</label>
                <select class="form-control @error('egress_accompanying_city_id') is-invalid @enderror" id="egress_accompanying_city_id" name="egress_accompanying_city_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
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
                <select class="form-control @error('egress_accompanying_state_id') is-invalid @enderror" id="egress_accompanying_state_id" name="egress_accompanying_state_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
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