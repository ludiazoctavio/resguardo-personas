@extends('layouts.app')
@extends('layouts.app')
@section('extra_head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css" integrity="sha256-SHMGCYmST46SoyGgo4YR/9AlK1vf3ff84Aq9yK4hdqM=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js" integrity="sha256-fNoRrwkP2GuYPbNSJmMJOCyfRB2DhPQe0rGTgzRsyso=" crossorigin="anonymous"></script>
<style type="text/css">
    #map {
    height: 350px;
    width: 100%;
    }
</style>
@endsection
@section('pleca_menu')
<li class="nav-item">
    <button type="submit" class="btn btn-primary mr-4">Persona localizada</button>
</li>
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-primary">Actualizar registro</button>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="d-inline pr-2"><h5><strong>{{ $person->folio }}</strong></h5></div>
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
        <form method="POST" id="reg-form" class="" action="{{ route('dashboard.person.update', $person) }}">
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
<script type="text/javascript">
    var map = L.map('map').setView([19.4325, -99.1332], 13);
    var OpenStreetMap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    var myMarker = L.marker([19.4325, -99.1332], {title: "xxxNamexxx", alt: "xxxlatlngxxx", draggable: true})
		.addTo(map)
		.on('dragend', function() {
			var coord = String(myMarker.getLatLng()).split(',');
			//console.log(coord);
			var lat = coord[0].split('(');
			//console.log(lat);
			var lng = coord[1].split(')');
			//console.log(lng);
			myMarker.bindPopup("Moved to: " + lat[1] + ", " + lng[0] + ".");
			//console.log(lat[1]);
			//console.log(lng[0]);
            document.getElementById("position").value = coord;
			//document.getElementById("id_latitude").value = lat[1];
			//document.getElementById("id_longitude").value = lng[0].replace(/\s/g, '');
		});
</script>
<script>
$('#pills-report-tab').click(function (e) {
    //e.preventDefault();
    //$(this).tab('show');
    setTimeout(
        function()
        {
            map.invalidateSize();
        }, 300);
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
@endsection
