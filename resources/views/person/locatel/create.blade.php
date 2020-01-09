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
    <button type="button" class="btn btn-primary btn-06" data-toggle="modal" data-target=".bd-example-modal-lg">Buscar persona</button>
</li>
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-primary btn-06">Realizar registro</button>
</li>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row float-right">
            <div class="d-inline pr-lg-2 pl-3"><strong>Registro de persona no localizada:</strong></div>
            <div class="d-inline pl-lg-0 pl-2">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item border-right">
                        <a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos generales</a>
                    </li>
                    <li class="nav-item border-right">
                        <a class="nav-link" id="pills-report-tab" data-toggle="pill" href="#pills-report" role="tab" aria-controls="pills-report" aria-selected="false">Reporte de desaparición</a>
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
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resultados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="tableSearch" style="width:100%;">
                        <thead class="">
                        <tr>
                            <th scope="col">Folio</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Hora de desaparición</th>
                            <th scope="col">Fecha de desaparición</th>
                            <th scope="col">Sexo</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="#"></a></th>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"><a href="#"><i class="fa fa-pencil"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="#"></a></th>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                <td class="text-center"><a href="#"><i class="fa fa-pencil"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
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
    setTimeout(
        function()
        {
            map.invalidateSize();
        }, 300);
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
        $('#toClone').after(newElem);
  
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
