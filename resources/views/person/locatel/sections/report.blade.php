<div class="tab-pane fade" id="pills-report" role="tabpanel" aria-labelledby="pills-report-tab">
    <h6><b>¿Dónde lo vio por última vez?</b></h6>
    <div class="pb-3 text-labels">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="pc">Código postal:</label>
                <input type="text" class="form-control @error('pc') is-invalid @enderror" id="pc" name="disappearance_address[pc]" value="{{ old('pc') }}">
                @error('pc')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="suburb">Colonia:</label>
                <input type="text" class="form-control @error('suburb') is-invalid @enderror" id="suburb" name="disappearance_address[suburb]" value="{{ old('suburb') }}">
                @error('suburb')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-3">
                <label for="city_id">Alcaldía:</label>
                <select class="form-control @error('city_id') is-invalid @enderror" id="city_id" name="disappearance_address[city_id]">
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
                <select class="form-control @error('state_id') is-invalid @enderror" id="state_id" name="disappearance_address[state_id]">
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
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="street">Calle:</label>
                <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" name="disappearance_address[street]" value="{{ old('street') }}" placeholder="Escribe la calle">
                @error('street')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-8">
                <label for="between_streets">Entre las calles:</label>
                <input type="text" class="form-control @error('between_streets') is-invalid @enderror" id="between_streets" name="disappearance_address[between_streets]" value="{{ old('between_streets') }}" placeholder="Escribe entre que calles">
                @error('between_streets')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="reference">Referencia:</label>
                <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" name="disappearance_address[reference]" value="{{ old('reference') }}" placeholder="Escribe la referencia">
                @error('reference')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <h6><b>Para una referencia más exacta, usa el siguiente mapa:</b></h6>
        <div class="flex-container">
            <input id="position" name="disappearance_address[position]" type="hidden">
            <div id="map"></div>
        </div>
    </div>
    <div class="border-top py-3">
        <h5><b>Hechos</b></h5>
        <div class="form-row text-labels">
            <div class="form-group col-md-12">
                <label for="acts">¿Podría describirme brevemente cómo se dieron los hechos?</label>
                <textarea class="form-control @error('acts') is-invalid @enderror" id="acts" name="disappearance_report[description]" rows="3" placeholder="Escribe la descripción">{{ old('acts') }}</textarea>
                @error('acts')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-row text-labels">
            <div class="form-group col-md-8">
                <label for="circumstance_id">Selecciona alguna circunstancia del catálogo según la descripción</label>
                <select class="form-control @error('circumstance_id') is-invalid @enderror" id="circumstance_id" name="disappearance_report[circumstance_id]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($circumstances as $circumstance)
                    <option value="{{$circumstance->id}}">{{$circumstance->name}}</option>
                    @endforeach
                </select>
                @error('circumstance_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
