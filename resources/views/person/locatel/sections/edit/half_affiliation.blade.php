<div class="tab-pane fade" id="pills-half_affiliation" role="tabpanel" aria-labelledby="pills-half_affiliation-tab">
    <div class="row my-4">
        @foreach ($half_affiliations as $type)
        <div class="col-sm-4 my-3">
            <div class="card">
                <div class="card-header">
                    {{$type->name}}
                </div>
                <div class="card-body">
                    @foreach ($type->halfaffiliationoptions as $option)
                    <div class="custom-control custom-radio">
                        <input type="radio" id="type_{{$type->id}}_option_{{$option->id}}"
                            name="half_affiliation_type_{{$type->id}}_id" value="{{$option->id}}" class="custom-control-input">
                        <label class="custom-control-label" for="type_{{$type->id}}_option_{{$option->id}}">{{$option->name}}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-sm-4 my-3">
            <div class="card">
                <div class="card-header">
                    Altura en centimetros
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <select class="form-control @error('height_id') is-invalid @enderror" id="height_id" name="person[height_id]">
                            @if (is_null($person->height))
                            <option value="" disabled="" selected="">Selecciona</option>
                            @endif
                            @foreach ($heights as $height)
                            @if (old('person[height_id]', $person->height_id) == $height->id)
                            <option value="{{$height->id}}" selected="">{{$height->name}}</option>
                            @else
                            <option value="{{$height->id}}">{{$height->name}}</option>
                            @endif
                            @endforeach

                        </select>
                        @error('height_id')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-3">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image_half_affiliation">Agregar fotografía (si se cuenta con ella):</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image_half_affiliation" name="image_half_affiliation" lang="es">
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
@section('extra_script')
<script>
    var half_affiliation = {!! json_encode($person->half_affiliation) !!};
    window.addEventListener("DOMContentLoaded", function(){
        $.each(half_affiliation, function( index, value ) {
            if (index.includes("half_affiliation_type_")) {
                $("input[name="+index+"][value=" + value + "]").prop('checked', true);
            }
        });
    });
</script>
@endsection