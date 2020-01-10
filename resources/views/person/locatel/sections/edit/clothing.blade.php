<div class="tab-pane fade" id="pills-clothing" role="tabpanel" aria-labelledby="pills-clothing-tab">
    <form id="testform">
        @foreach ($person->clothes as $obj)
        <input name="clothes[id][]" type="hidden" value="{{ old('clothes[id][]', $obj->id) }}">
        <fieldset class="clonedInput" id="toClone">
            <div class="py-3">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="cloting_type_id">Tipo de ropa:</label>
                        <select class="form-control @error('cloting_type_id') is-invalid @enderror" id="cloting_type_id"
                            name="clothes[clothing_type_id][]">
                            @if (is_null($obj->clothing_type_id))
                            <option value="" disabled="" selected="">Selecciona</option>
                            @endif
                            @foreach ($cloting_types as $cloting_type)
                            @if (old('clothes[clothing_type_id][]', $obj->clothing_type_id) == $cloting_type->id)
                            <option value="{{$cloting_type->id}}" selected="">{{$cloting_type->name}}</option>
                            @else
                            <option value="{{$cloting_type->id}}">{{$cloting_type->name}}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('cloting_type_id')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="color_id">Color 1:</label>
                        <select class="form-control @error('color_id') is-invalid @enderror" id="color_id"
                            name="clothes[color_1_id][]">
                            @if (is_null($obj->color_1_id))
                            <option value="" disabled="" selected="">Selecciona</option>
                            @endif
                            @foreach ($colors as $color)
                            @if (old('clothes[color_1_id][]', $obj->color_1_id) == $color->id)
                            <option value="{{$color->id}}" selected="">{{$color->name}}</option>
                            @else
                            <option value="{{$color->id}}">{{$color->name}}</option>
                            @endif
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
                        <select class="form-control @error('color_id') is-invalid @enderror" id="color_id"
                            name="clothes[color_2_id][]">
                            @if (is_null($obj->color_2_id))
                            <option value="" disabled="" selected="">Selecciona</option>
                            @endif
                            @foreach ($colors as $color)
                            @if (old('clothes[color_2_id][]', $obj->color_2_id) == $color->id)
                            <option value="{{$color->id}}">{{$color->name}}</option>
                            @else
                            <option value="{{$color->id}}">{{$color->name}}</option>
                            @endif
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
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="reference">Referencia:</label>
                    <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference"
                        name="reference" value="{{ old('particular_signs[description][]', $obj->description) }}" placeholder="Escribe la referencia">
                    @error('reference')
                        <div class="invalid-feedback active" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
            {{--<div class="pb-3">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="image_half_affiliation">Agregar fotografía (si se cuenta con ella):</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_particular_signs" name="image_particular_signs" accept="image/*" lang="es">
                            <label class="custom-file-label" for="customFileLang">Selecciona un archivo JPG o PNG</label>
                        </div>
                        @error('image_half_affiliation')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>--}}
            <hr class="new2">
        </fieldset>
        @endforeach
    </form>
</div>
