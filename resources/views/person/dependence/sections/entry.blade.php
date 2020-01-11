<div class="tab-pane fade text-labels" id="pills-entry" role="tabpanel" aria-labelledby="pills-entry-tab">
    <div class="py-3">
        <div class="form-row">
            <div class="form-group required col-md-4">
                <label for="entry_date">Fecha de ingreso:</label>
                <input type="date" class="form-control @error('entry_date') is-invalid @enderror" id="entry_date"
                    name="entry[date]" value="{{ old('entry_date') }}" required>
                @error('entry_date')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group required col-md-4">
                <label for="entry_time">Hora de ingreso:</label>
                <input type="time" class="form-control @error('entry_time') is-invalid @enderror" id="entry_time"
                    name="entry[time]" value="{{ old('entry_time') }}" required>
                @error('entry_time')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group required col-md-12">
                <label for="reason_entry">Motivo de ingreso:</label>
                <textarea class="form-control @error('reason_entry') is-invalid @enderror" id="reason_entry"
                    name="entry[description]" rows="3" placeholder="Describe el motivo" required>{{ old('reason_entry') }}</textarea>
                @error('reason_entry')
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
                <label for="accompanying_first_name">Nombre(s):</label>
                <input type="text" class="form-control @error('accompanying_first_name') is-invalid @enderror" id="accompanying_first_name"
                    name="companion[first_name]" value="{{ old('accompanying_first_name') }}" placeholder="Escribe el nombre(s)">
                @error('accompanying_first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="accompanying_last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('accompanying_last_name_1') is-invalid @enderror" id="accompanying_last_name_1"
                    name="companion[last_name_1]" value="{{ old('accompanying_last_name_1') }}" placeholder="Escribe el primer apellido">
                @error('accompanying_last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="accompanying_last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('accompanying_last_name_2') is-invalid @enderror" id="accompanying_last_name_2"
                    name="companion[last_name_2]" value="{{ old('accompanying_last_name_2') }}" placeholder="Escribe el segundo apellido">
                @error('accompanying_last_name_2')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="accompanying_alias">Responde al nombre de:</label>
                <input type="text" class="form-control @error('accompanying_alias') is-invalid @enderror" id="accompanying_alias"
                    name="accompanying_alias" value="{{ old('accompanying_alias') }}" placeholder="Especifica el apodo o alias con el que responde la persona">
                @error('accompanying_alias')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="accompanying_identification_type_id">Documento con el que se identifica:</label>
                <select class="form-control @error('accompanying_identification_type_id') is-invalid @enderror" id="accompanying_identification_type_id"
                    name="companion_identification[identification_type_id]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($identification_types as $identification_type)
                    <option value="{{$identification_type->id}}">{{$identification_type->name}}</option>
                    @endforeach
                </select>
                @error('accompanying_identification_type_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="accompanying_number_identification">Número o folio de la identificación:</label>
                <input type="text" class="form-control @error('accompanying_number_identification') is-invalid @enderror" id="accompanying_number_identification"
                    name="companion_identification[folio]" value="{{ old('accompanying_number_identification') }}" placeholder="Escribe el número o folio ">
                @error('accompanying_number_identification')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="accompanying_image_identification">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="accompanying_image_identification"
                        name="accompanying_image_identification" accept="image/*" lang="es">
                    <label class="custom-file-label" for="accompanying_image_identification">Selecciona un archivo JPG o PNG</label>
                </div>
                @error('accompanying_image_identification')
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
                <label for="accompanying_street">Calle:</label>
                <input type="text" class="form-control @error('accompanying_street') is-invalid @enderror" id="accompanying_street"
                    name="companion_address[street]" value="{{ old('accompanying_street') }}" placeholder="Escribe la calle">
                @error('accompanying_street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="accompanying_number">No. exterior:</label>
                <input type="text" class="form-control @error('accompanying_number') is-invalid @enderror" id="accompanying_number"
                    name="companion_address[number]" value="{{ old('accompanying_number') }}" placeholder="Escribe el número exterior">
                @error('accompanying_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="accompanying_outdoor_number">No. interior:</label>
                <input type="text" class="form-control @error('accompanying_outdoor_number') is-invalid @enderror" id="accompanying_outdoor_number"
                    name="companion_address[outdoor_number]" value="{{ old('accompanying_outdoor_number') }}" placeholder="Escribe el número interior">
                @error('accompanying_outdoor_number')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="accompanying_pc">Código postal:</label>
                <input type="text" pattern="[0-9]{5}" maxlength="5" minlength="5" class="form-control @error('accompanying_pc') is-invalid @enderror" id="accompanying_pc"
                    name="companion_address[pc]" value="{{ old('accompanying_pc') }}">
                @error('accompanying_pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="accompanying_suburb">Colonia:</label>
                <input type="text" class="form-control @error('accompanying_suburb') is-invalid @enderror" id="accompanying_suburb"
                    name="companion_address[suburb]" value="{{ old('accompanying_suburb') }}">
                @error('accompanying_suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="accompanying_city_id">Alcaldía:</label>
                <select class="form-control @error('accompanying_city_id') is-invalid @enderror" id="accompanying_city_id"
                    name="companion_address[city_id]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
                @error('accompanying_city_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="accompanying_state_id">Entidad:</label>
                <select class="form-control @error('accompanying_state_id') is-invalid @enderror" id="accompanying_state_id"
                    name="companion_address[state_id]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($states as $state)
                    <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                @error('accompanying_state_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
