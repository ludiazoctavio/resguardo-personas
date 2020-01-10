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
                 <input type="text" class="form-control @error('reference') is-invalid @enderror" id="reference" name="particular_signs[description][]" value="{{ old('reference') }}" placeholder="Escribe la referencia">
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
         </div>
         <hr class="new2">
       </fieldset>
       <fieldset>
         <div class="row d-flex float-right">
           <label class="text-labels mt-1">Agregar otra seña particular</label>
           <a class="ml-1 mr-3" type="button" id="btnAdd">
             <img src="/images/mas.svg" alt="">
           </a>
         </div>
       </fieldset>
   </form>
</div>
