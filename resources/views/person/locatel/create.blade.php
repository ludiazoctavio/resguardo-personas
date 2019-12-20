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
            <div class="d-inline pr-2"><strong>Registro de persona no localizada:</strong></div>
            <div class="d-inline">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos generales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-report-tab" data-toggle="pill" href="#pills-report" role="tab" aria-controls="pills-report" aria-selected="false">Reporte de desaparición</a>
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
        <form method="POST" id="reg-form" class="" action="{{ route('dashboard.person.store') }}">
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.locatel.sections.person_report')
                @include('person.locatel.sections.general')
                @include('person.locatel.sections.report')
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
