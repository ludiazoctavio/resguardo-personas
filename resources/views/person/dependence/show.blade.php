@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>{{ $person->folio }} - {{ $person->dependence->name }}</h5>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Datos generales</a>
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
    <div class="card-body">
        <form id="form-sow" method="POST" class="" action="{{ route('dependence.person_dependence.update', $person) }}">
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.sections.edit.general')
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
<script type="text/javascript">
    window.addEventListener("DOMContentLoaded", function(){
        $('#form-sow input[type=text]').attr('disabled', true);
        $('#form-sow textarea').attr('disabled', true);
        $('#form-sow select').attr("disabled", true);
    });
</script>
@endsection