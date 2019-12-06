<div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab">
    <div class="py-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="occupation_id">Tipo de accesorio puesto:</label>
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
                <label for="scholarship_id">Color 1:</label>
                <select class="form-control @error('scholarship_id') is-invalid @enderror" id="scholarship_id" name="scholarship_id">
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
                <label for="marital_status_id">Color 2:</label>
                <select class="form-control @error('marital_status_id') is-invalid @enderror" id="marital_status_id" name="marital_status_id">
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
    <div class="py-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="occupation_id">Parte del cuerpo:</label>
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
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="reference">Referencia:</label>
            <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" name="reference" value="{{ old('reference') }}" placeholder="Escribe la referencia">
            @error('reference')
                <div class="invalid-feedback active" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
            @enderror
        </div>
    </div>
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image_half_affiliation">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image_particular_signs" name="image_particular_signs" lang="es">
                    <label class="custom-file-label" for="customFileLang">Selecciona un archivo JPG o PNG</label>
                </div>
                @error('image_half_affiliation')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>