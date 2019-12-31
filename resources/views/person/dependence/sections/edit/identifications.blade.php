<div class="tab-pane fade" id="pills-identifications" role="tabpanel" aria-labelledby="pills-identifications-tab">
    <div class="border-top py-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="identification_type_id">Documento con el que se identifica:</label>
                <select class="form-control @error('identification_type_id') is-invalid @enderror" id="identification_type_id" name="identification[identification_type_id]">
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
            <div class="form-group col-md-8">
                <label for="folio">Número o folio de la identificación:</label>
                <input type="text" class="form-control @error('folio') is-invalid @enderror" id="folio" name="identification[folio]" value="{{ old('identification[number_identification]', $person->identification->folio) }}" placeholder="Escribe el número o folio ">
                @error('folio')
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