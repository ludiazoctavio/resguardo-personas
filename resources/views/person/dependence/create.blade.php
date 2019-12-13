@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Persona no identificada:
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Datos generales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-entry-tab" data-toggle="pill" href="#pills-entry" role="tab" aria-controls="pills-entry" aria-selected="false">Fecha, hora y motivo de ingreso</a>
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
        <form method="POST" class="" action="{{ route('dependence.person_dependence.store_identified') }}">
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.sections.general')
                @include('person.dependence.sections.entry')
                @include('person.locatel.sections.half_affiliation')
                @include('person.locatel.sections.particular_signs')
                @include('person.locatel.sections.clothing')
                @include('person.locatel.sections.accessories')
            </div>
            <button type="submit" class="btn btn-primary">Realizar registro</button>
        </form>
    </div>
</div>
@endsection
