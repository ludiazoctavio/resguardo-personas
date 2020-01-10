@extends('layouts.app')
@section('pleca_menu')
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-06">Realizar registro</button>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row float-right">
            <div class="d-inline pr-lg-2 pl-3"><strong>Persona no identificada:</strong></div>
            <div class="d-inline pl-2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item border-right">
                        <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Datos generales</a>
                    </li>
                    <li class="nav-item border-right">
                        <a class="nav-link" id="pills-entry-tab" data-toggle="pill" href="#pills-entry" role="tab" aria-controls="pills-entry" aria-selected="false">Fecha, hora y motivo de ingreso</a>
                    </li>
                    <li class="nav-item border-right">
                        <a class="nav-link" id="pills-half_affiliation-tab" data-toggle="pill" href="#pills-half_affiliation" role="tab" aria-controls="pills-half_affiliation" aria-selected="false">Media filiación</a>
                    </li>
                    <li class="nav-item border-right">
                        <a class="nav-link" id="pills-particular_signs-tab" data-toggle="pill" href="#pills-particular_signs" role="tab" aria-controls="pills-particular_signs" aria-selected="false">Señas particulares</a>
                    </li>
                    <li class="nav-item border-right">
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
        <form method="POST" id="reg-form" class="" action="{{ route('dependence.person_dependence.store_identified') }}">
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.sections.general')
                @include('person.dependence.sections.entry')
                @include('person.locatel.sections.half_affiliation')
                @include('person.locatel.sections.particular_signs')
                @include('person.locatel.sections.clothing')
                @include('person.locatel.sections.accessories')
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
    $(document).ready(function() {
    $('#btnDel').attr('disabled','disabled');
    $('#btnAdd').click(function() {
        var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added

        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#toClone').clone().attr('id', 'Add' + newNum);

        // manipulate the name/id values of the input inside the new element
        newElem.children(':last').attr('id', 'name' + newNum).attr('name', 'name' + newNum);
        // insert the new element after the last "duplicatable" input field
        let child = newElem[0]
        child.querySelector('input').value = ""
        $('#toClone').after(child);

        // enable the "remove" button
        // $('#btnDel').attr('disabled',false);
        // business rule: you can only add 10 names
        if (newNum == 10)
          $('#btnAdd').attr('disabled','disabled');
    });

        // $('#btnDel').click(function() {
        // var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        // $('#input' + num).remove(); // remove the last element

        // enable the "add" button
    //     $('#btnAdd').attr('disabled',false);
    //
    //      if only one element remains, disable the "remove" button
    //      if (num-1 === 1)
    //        $('#btnDel').attr('disabled','disabled');
    // });

  });

  </script>
@endsection
