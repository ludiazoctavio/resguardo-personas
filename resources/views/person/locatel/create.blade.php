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
<li class="nav-item mr-1">
    <button id="search_person" type="button" class="btn btn-primary btn-06" style="display:none;" data-toggle="modal" data-target=".bd-example-modal-lg">Buscar persona</button>
</li>
<li class="nav-item">
    <button type="submit" form="reg-form" class="btn btn-06">Realizar registro</button>
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
<div id="modal_search" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <th scope="col">Sexo</th>
                            <th scope="col">Dependencia</th>
                        </tr>
                        </thead>
                        <tbody>
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
{{--<script type="text/javascript">
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
    $('#pills-report-tab').click(function (e) {
        setTimeout(
            function()
            {
                map.invalidateSize();
            }, 300);
    });
</script>--}}
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
<<<<<<< HEAD
</script>
<script type="text/javascript">
=======
  </script>
  <script type="text/javascript">
    $('#pills-general-tab').click(function (e) {
        setTimeout(
            function()
            {
                $('#search_person').show();
            }, 300);
    });
>>>>>>> 094a6c0c4dd76bafa5550fd46e507a078fc39438

  $.ajaxSetup({

      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

<<<<<<< HEAD
  $("#search_person").click(function(e){
      e.preventDefault();
      var first_name = $("#first_name").val();
      var last_name_1 = $("#last_name_1").val();
      var last_name_2 = $("#last_name_2").val();
      console.log('Hi!');
=======
    $("#search_person").click(function(e){
        e.preventDefault();

        $('#tableSearch tbody').html('');

        var first_name = $("#person_first_name").val();
        var last_name_1 = $("#person_last_name_1").val();
        var last_name_2 = $("#person_last_name_2").val();
        var age = $("#person_age_id").val();
        var gender = $("#person_gender_id").val();
>>>>>>> 094a6c0c4dd76bafa5550fd46e507a078fc39438

      $.ajax({

<<<<<<< HEAD
          type:'POST',
          url:'/ajaxRequest',
          data:{first_name:first_name, last_name_1:last_name_1, last_name_2:last_name_2},

          success:function(data){

              console.log(data);
            //alert(data.success);
            $('#modal_search tbody').html('');
              $.each( data.success, function( key, value ) {
                  console.log(value);
                  var name = value.first_name+' '+value.last_name_1+' '+value.last_name_2;
                  var age = value.age != "null"?value.age:value.rangue_age
                  $('#modal_search tbody').after('<tr>'
                      +'<th scope="row"><a href="#">'+value.folio+'</a></th>'
                      +'<td class="text-center">'+age+'</td>'
                      +'<td class="text-center">'+name+'</td>'
                      +'<td class="text-center">'+value.gender+'</td>'
                      +'<td class="text-center"><a href="#"><i class="fa fa-pencil"></i></a></td>'
                      +'</tr>');
              });
=======
            type:'POST',
            url:'/ajaxRequest',
            data:{first_name:first_name, last_name_1:last_name_1, last_name_2:last_name_2, age:age, gender:gender},

            success:function(data){

                $('#tableSearch tbody').html(data.html);
                
            }
>>>>>>> 094a6c0c4dd76bafa5550fd46e507a078fc39438

          }

      });

});
</script>
@endsection
