@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>{{ $person->folio }}</h5>
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
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.person.update', $person) }}">
            @method('PUT')
            @csrf
            <div class="tab-content" id="pills-tabContent">
                @include('person.locatel.sections.edit.person_report')
                @include('person.locatel.sections.edit.general')
                @include('person.locatel.sections.edit.report')
                @include('person.locatel.sections.edit.half_affiliation')
                @include('person.locatel.sections.edit.particular_signs')
                @include('person.locatel.sections.edit.clothing')
                @include('person.locatel.sections.edit.accessories')
            </div>
            <button type="submit" class="btn btn-primary">Guardar registro</button>
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
@endsection
