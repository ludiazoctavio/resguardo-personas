<div class="tab-pane fade" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab">
    <div class="py-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="accessory_id">Tipo de accesorio puesto:</label>
                <select class="form-control @error('accessory_id') is-invalid @enderror" id="accessory_id" name="accessory_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($accessories as $accessory)
                    <option value="{{$accessory->id}}">{{$accessory->name}}</option>
                    @endforeach
                </select>
                @error('accessory_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="color_id">Color 1:</label>
                <select class="form-control @error('color_id') is-invalid @enderror" id="color_id" name="color_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($colors as $color)
                    <option value="{{$color->id}}">{{$color->name}}</option>
                    @endforeach
                </select>
                @error('color_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="color_id">Color 2:</label>
                <select class="form-control @error('color_id') is-invalid @enderror" id="color_id" name="color_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($colors as $color)
                    <option value="{{$color->id}}">{{$color->name}}</option>
                    @endforeach
                </select>
                @error('color_id')
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
                <label for="body_part_id">Parte del cuerpo:</label>
                <select class="form-control @error('body_part_id') is-invalid @enderror" id="body_part_id" name="body_part_id">
                    <option value="" disabled="" selected="">Selecciona</option>
                    @foreach ($body_parts as $body_part)
                    <option value="{{$body_part->id}}">{{$body_part->name}}</option>
                    @endforeach
                </select>
                @error('body_part_id')
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