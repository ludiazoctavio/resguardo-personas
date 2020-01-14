<div class="tab-pane fade text-labels" id="pills-particular_signs" role="tabpanel" aria-labelledby="pills-particular_signs-tab">
   <form id="testform">
       <fieldset class="clonedInput" id="toClone">
         <div class="py-3">
             <div class="form-row">
                 <div id="" class="form-group col-md-4">
                     <label for="signal_type_id">Tipo de seña:</label>
                     <select class="form-control @error('signal_type_id') is-invalid @enderror" id="signal_type_id" name="particular_signs[signal_type_id][]">
                         <option value="" disabled="" selected="">Selecciona</option>
                         @foreach ($signal_types as $signal_type)
                         <option value="{{$signal_type->id}}">{{$signal_type->name}}</option>
                         @endforeach
                     </select>
                     @error('signal_type_id')
                         <div class="invalid-feedback active" role="alert">
                             <strong>{{ $message }}</strong>
                         </div>
                     @enderror
                 </div>
                 <div class="form-group col-md-4">
                     <label for="body_part_id">Parte del cuerpo:</label>
                     <select class="form-control @error('body_part_id') is-invalid @enderror" id="body_part_id" name="particular_signs[body_part_id][]">
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
                 <div class="form-group col-md-4">
                     <label for="size_id">Tamaño:</label>
                     <select class="form-control @error('size_id') is-invalid @enderror" id="size_id" name="particular_signs[size_id][]">
                         <option value="" disabled="" selected="">Selecciona</option>
                         @foreach ($sizes as $size)
                         <option value="{{$size->id}}">{{$size->name}}</option>
                         @endforeach
                     </select>
                     @error('size_id')
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
                    name="particular_signs[description][]" value="{{ old('reference') }}" placeholder="Escribe la referencia">
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
                     <label for="image_particular_signs">Agregar fotografía (si se cuenta con ella):</label>
                     <div class="custom-file">
                         <input type="file" class="custom-file-input" id="image_particular_signs" name="image_particular_signs" accept="image/*" lang="es">
                         <label class="custom-file-label" for="customFileLang">Selecciona un archivo JPG o PNG</label>
                     </div>
                     @error('image_particular_signs')
                         <div class="invalid-feedback active" role="alert">
                             <strong>{{ $message }}</strong>
                         </div>
                     @enderror
                 </div>
             </div>
         </div>--}}
         <hr class="new2">
       </fieldset>
       <fieldset>
         <div class="row d-flex float-right">
           <a class="ml-1 mr-3" type="button" id="btnAdd">
             <label class="text-labels mt-1">Agregar otra seña particular</label>
             <img src="/images/mas.svg" alt="">
           </a>
         </div>
       </fieldset>
   </form>
</div>

@section('extra_script')
<script type="text/javascript">
    $(document).ready(function() {
    $('#btnDel').attr('disabled','disabled');
    $('#btnAdd').click(function() {
        var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added
        // create the new element via clone(), and manipulate it's ID using newNum value
        if(newNum > 2){
          var newElem = $('#Add' + num).clone().attr('id', 'Add' + newNum);
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#Add' + num).after(newElem);
        }
        else{
          var newElem = $('#toClone').clone().attr('id', 'Add' + newNum);
          // manipulate the name/id values of the input inside the new element
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          // insert the new element after the last "duplicatable" input field
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#toClone').after(newElem);
        }


        if (newNum == 10)
          $('#btnAdd').attr('disabled','disabled');
    });
  });
  </script>
  @endsection
