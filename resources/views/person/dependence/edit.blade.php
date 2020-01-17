@extends('layouts.app')
@section('pleca_menu')
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-primary">Actualizar registro</button>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="d-inline pr-2">
                <h5><strong>Folio: {{ $person->folio }} </strong>@if(!auth()->user()->has_role(6)){{ $person->dependence->name }}@endif</h5>
            </div>
            <div class="d-inline">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Datos generales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-identifications-tab" data-toggle="pill" href="#pills-identifications" role="tab" aria-controls="pills-identifications" aria-selected="false">Identificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-entry-tab" data-toggle="pill" href="#pills-entry" role="tab" aria-controls="pills-entry" aria-selected="false">Fecha, hora y motivo de ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-egress-tab" data-toggle="pill" href="#pills-egress" role="tab" aria-controls="pills-egress" aria-selected="false">Fecha, hora y motivo de egreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-half_affiliation-tab" data-toggle="pill" href="#pills-half_affiliation" role="tab" aria-controls="pills-half_affiliation" aria-selected="false">Media filiación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-particular_signs-tab" data-toggle="pill" href="#pills-particular_signs" role="tab" aria-controls="pills-particular_signs" aria-selected="false">Señas particulares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-clothing-tab" data-toggle="pill" href="#pills-clothing" role="tab" aria-controls="pills-clothing" aria-selected="false">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-accessories-tab" data-toggle="pill" href="#pills-accessories" role="tab" aria-controls="pills-accessories" aria-selected="false">Accesorios</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" id="reg-form" class="" action="{{ route('dependence.person_dependence.update', $person) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.sections.edit.general')
                @include('person.dependence.sections.edit.identifications')
                @include('person.dependence.sections.edit.entry')
                @include('person.dependence.sections.edit.egress')
                @include('person.locatel.sections.edit.half_affiliation')
                @include('person.locatel.sections.edit.particular_signs')
                @include('person.locatel.sections.edit.clothing')
                @include('person.locatel.sections.edit.accessories')
            </div>
        </form>
    </div>
</div>
@endsection
@section('extra_script')
<script type="text/javascript">
    $(function() {
        $('input[type=text]').focusout(function() {
            this.value = this.value.toUpperCase();
        });
        $('textarea').focusout(function() {
            this.value = this.value.toUpperCase();
        });
    });
</script>
<script type="text/javascript">
    var half_affiliation = {!! json_encode($person->half_affiliation) !!};
    window.addEventListener("DOMContentLoaded", function(){
        $.each(half_affiliation, function( index, value ) {
            if (index.includes("half_affiliation_type_")) {
                $("input[data-name="+index+"][value=" + value + "]").prop('checked', true);
            }
        });
    });
</script>
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
<script type="text/javascript">
    $(document).ready(function() {
    $('#btnDel').attr('disabled','disabled');
    $('#btnAddClothing').click(function() {
        var num = $('.clonedInput1').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added
        // create the new element via clone(), and manipulate it's ID using newNum value
        if(newNum > 2){
          var newElem = $('#AddClothes' + num).clone().attr('id', 'AddClothes' + newNum);
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#AddClothes' + num).after(newElem);
        }
        else{
          var newElem = $('#toClone1').clone().attr('id', 'AddClothes' + newNum);
          // manipulate the name/id values of the input inside the new element
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          // insert the new element after the last "duplicatable" input field
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#toClone1').after(newElem);
        }


        if (newNum == 10)
          $('#btnAddClothing').attr('disabled','disabled');
    });
  });
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#btnDel').attr('disabled','disabled');
    $('#btnAddAccesories').click(function() {
        var num = $('.clonedInput2').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added
        // create the new element via clone(), and manipulate it's ID using newNum value
        if(newNum > 2){
          var newElem = $('#AddAccesorie' + num).clone().attr('id', 'AddAccesorie' + newNum);
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#AddAccesorie' + num).after(newElem);
        }
        else{
          var newElem = $('#toClone2').clone().attr('id', 'AddAccesorie' + newNum);
          // manipulate the name/id values of the input inside the new element
          newElem.children('.new2').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
          // insert the new element after the last "duplicatable" input field
          let child = newElem[0];
          child.querySelector('input').value = ""
          $('#toClone2').after(newElem);
        }


        if (newNum == 10)
          $('#btnAddAccesories').attr('disabled','disabled');
    });
  });
</script>
@endsection