@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Búsqueda de persona no localizada:
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Datos personales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-identifications-tab" data-toggle="pill" href="#pills-identifications" role="tab" aria-controls="pills-identifications" aria-selected="false">Identificaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-entry-tab" data-toggle="pill" href="#pills-entry" role="tab" aria-controls="pills-entry" aria-selected="false">Fecha, hora y motivo de ingreso</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dependence.person_dependence.store_identified') }}">
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.identified.sections.general')
                @include('person.dependence.identified.sections.identifications')
                @include('person.dependence.sections.entry')
            </div>
            <button type="submit" class="btn btn-primary">Realizar registro</button>
        </form>
    </div>
</div>
@endsection
