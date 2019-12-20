@extends('layouts.app')
@section('pleca_menu')
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-primary">Realizar registro</button>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row float-right">
            <div class="d-inline pr-2">
                <strong>Persona identificada:</strong>
            </div>
            <div class="d-inline">
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
        </div>
    </div>
    <div class="card-body">
        <form method="POST" id="reg-form" class="" action="{{ route('dependence.person_dependence.store_identified') }}">
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.dependence.identified.sections.general')
                @include('person.dependence.identified.sections.identifications')
                @include('person.dependence.sections.entry')
            </div>
        </form>
    </div>
</div>
@endsection
@section('extra_script')
<script type="text/javascript">
    $(function() {
        $('input[type=text]').keyup(function() {
            this.value = this.value.toLocaleUpperCase();
        });
        $('textarea').keyup(function() {
            this.value = this.value.toLocaleUpperCase();
        });
    });
</script>
@yield('sub_script')
@endsection
