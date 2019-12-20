<div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="first_name">Nombre(s):</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="person[first_name]"
                    value="{{ old('first_name', $person->first_name) }}" placeholder="Escribe el nombre(s)">
                @error('first_name')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_1">Primer apellido:</label>
                <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="person[last_name_1]"
                    value="{{ old('last_name_1', $person->last_name_1) }}" placeholder="Escribe el primer apellido">
                @error('last_name_1')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="last_name_2">Segundo apellido:</label>
                <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="person[last_name_2]"
                    value="{{ old('last_name_2', $person->last_name_2) }}" placeholder="Escribe el segundo apellido">
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
                <input type="text" class="form-control @error('alias') is-invalid @enderror" id="alias" name="alias"
                    value="{{ old('alias') }}" placeholder="Especifica el apodo o alias con el que responde la persona">
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
                    @if (is_null($person->age))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($ages as $age)
                    @if (old('person[age_id]', $person->age_id) == $age->id)
                    <option value="{{$age->id}}" selected="">{{$age->name}}</option>
                    @else
                    <option value="{{$age->id}}">{{$age->name}}</option>
                    @endif
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
                    @if (is_null($person->gender))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($genders as $gender)
                    @if (old('person[gender_id]', $person->gender_id) == $gender->id)
                    <option value="{{$gender->id}}" selected="">{{$gender->name}}</option>
                    @else
                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('gender_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="nationality_id">Nacionalidad:</label>
                <select class="form-control @error('nationality_id') is-invalid @enderror" id="nationality_id" name="person[nationality_id]">
                    @if (is_null($person->nationality))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($nationalities as $nationality)
                    @if (old('person[nationality_id]', $person->nationality_id) == $nationality->id)
                    <option value="{{$nationality->id}}" selected="">{{$nationality->name}}</option>
                    @else
                    <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('nationality_id')
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
                    @if (is_null($person->disability))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($disabilities as $disability)
                    @if (old('person[disability_id]', $person->disability_id) == $disability->id)
                    <option value="{{$disability->id}}" selected="">{{$disability->name}}</option>
                    @else
                    <option value="{{$disability->id}}">{{$disability->name}}</option>
                    @endif
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
            <div class="form-group col-md-4">
                <label for="priority_id">Prioridad:</label>
                <select class="form-control @error('priority_id') is-invalid @enderror" id="priority_id" name="person[priority_id]">
                    @if (is_null($person->priority))
                    <option value="" disabled="" selected="">Selecciona</option>
                    @endif
                    @foreach ($priorities as $priority)
                    @if (old('person[priority_id]', $person->priority_id) == $priority->id)
                    <option value="{{$priority->id}}" style="color: {{$priority->color}};" selected="">{{$priority->name}}</option>
                    @else
                    <option value="{{$priority->id}}" style="color: {{$priority->color}};">{{$priority->name}}</option>
                    @endif
                    @endforeach
                </select>
                @error('priority_id')
                    <div class="invalid-feedback active" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="confidential">Confidencial:</label>
                <select class="form-control @error('confidential') is-invalid @enderror" id="confidential" name="person[confidential]">
                    <option value="" disabled="" selected="">Selecciona</option>
                    <option value="true">Sí</option>
                    <option value="false">No</option>
                </select>
                @error('confidential')
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
                    <input type="file" class="custom-file-input" id="image_general" name="image_general" accept="image/*" lang="es">
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