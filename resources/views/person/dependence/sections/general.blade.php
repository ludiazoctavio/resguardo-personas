<div class="tab-pane fade show active text-labels" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
        <div class="pb-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="age_range_id">Edad aproximada:</label>
                    <select class="form-control @error('age_range_id') is-invalid @enderror" id="age_range_id" name="person[age_range_id]">
                        <option value="" disabled="" selected="">Selecciona</option>
                        @foreach ($age_ranges as $age_range)
                        <option value="{{$age_range->id}}">{{$age_range->name}}</option>
                        @endforeach
                    </select>
                    @error('age_range_id')
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
            </div>
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
            </div>
        </div>
        <div class="border-top py-3">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="vital_signs_id">Signos vitales:</label>
                    <select class="form-control @error('vital_signs_id') is-invalid @enderror" id="vital_signs_id" name="person[vital_signs_id]">
                        <option value="" disabled="" selected="">Selecciona</option>
                        @foreach ($vital_signs as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                    </select>
                    @error('vital_signs_id')
                        <div class="invalid-feedback active" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="border-top py-3">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image_general">Agregar fotografía (si se cuenta con ella):</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image_general" name="person_image" accept="image/*" lang="es">
                        <label class="custom-file-label" for="image_general">Selecciona un archivo JPG o PNG</label>
                    </div>
                    @error('image_general')
                        <div class="invalid-feedback active" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
