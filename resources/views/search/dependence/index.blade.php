@extends('layouts.app')

@section('extra_head')

@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <form method="GET" class="col-lg-8 col-12 d-flex justify-content-lg-between" action="">
                <input type="text" class="form-control" id="folio" name="folio" placeholder="Buscar por folio" value="{{ app('request')->input('folio') }}">
                &nbsp;&nbsp;
                <input type="text" class="form-control" id="name" name="name" placeholder="Buscar por nombre" value="{{ app('request')->input('name') }}">
                &nbsp;&nbsp;
                <button type="submit" class="btn btn-cdmx ml-2"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover" id="tableSearch" style="width:100%;">
                <thead class="">
                <tr>
                    <th scope="col">Folio</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Hora de ingreso</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Prioridad</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($people as $item)
                    <tr>
                        <th scope="row"><a href="#">{{$item->folio}}</a></th>
                        <td>@if(!is_null($item->age)){{$item->age->name}}@elseif($item->age_range){{$item->age_range->name}}@endif</td>
                        <td>{{$item->getFullName()}}</td>
                        <td>{{$item->entry->time}}</td>
                        <td>{{$item->entry->date}}</td>
                        <td>{{$item->gender->name}}</td>
                        <td>Falta estatus</td>
                        <td>@if(!is_null($item->priority)){{$item->priority->name}}@endif</td>
                        <td><a href="{{ route('dependence.person_dependence.edit', $item)}}"><i class="fa fa-pencil"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
@endsection

@section('extra_script')
    <script type="text/javascript">
        var _table;
        $(document).ready(function() {
            _table = $('#tableSearch').DataTable({
                "pageLength": 10,
                "responsive": true,
                "bFilter": false,
                "lengthChange": false,
                "bSort" : true,
                "info": false,
                "stripeClasses": [],
                "order": [[0,"desc"]],
                'language': {
                    'lengthMenu': 'Mostrar _MENU_ registros.',
                    'zeroRecords': 'No se encontraron resultados',
                    'info': 'Mostrar pagina _PAGE_ de _PAGES_',
                    'infoEmpty': 'Ningún dato disponible en esta tabla',
                    'infoFiltered': '(filtrado de un total de _MAX_ registros)',
                    'sSearch': 'Buscar:',
                    'oPaginate': {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "<i class='fa fa-chevron-right'></i>",
                        "sPrevious": "<i class='fa fa-chevron-left'></i>"
                    },
                },
                columnDefs: [{
                    orderable: false,
                    targets: "no-sort"
                }]
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('input[type=text]').keyup(function() {
                this.value = this.value.toLocaleUpperCase();
            });
        });
    </script>
@endsection
