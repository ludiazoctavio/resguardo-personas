@extends('layouts.app_fluid')
@section('pleca_menu')
<li class="nav-item">
    <a href="{{ route('dashboard.user.index') }}" class="nav-link active">Usuarios</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Estadísticas</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <form method="GET" class="col-4 d-flex justify-content-lg-between" action="">
                    <input type="text" class="form-control" id="" name="" placeholder="Buscar por nombre">
                    <button type="submit" class="btn btn-cdmx ml-2"><i class="fa fa-search"></i></button>
                </form>
                <div class="col-4">
                    <select class="form-control @error('dependence_id') is-invalid @enderror" id="dependence_id" name="dependence_id">
                        <option value="" disabled="" selected="">Selecciona un dependencia</option>
                        @foreach ($dependences as $dependence)
                        <option value="{{$dependence->id}}">{{$dependence->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <a href="{{ route('dashboard.user.create') }}">Nuevo usuario +</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover" id="tableSearch" style="width:100%;">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Dependencia</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <th scope="row"><a href="{{ route('dashboard.user.show', $item)}}">{{$item->getFullNameAttribute()}}</a></th>
                            <td>{{$item->position}}</td>
                            <td>{{$item->dependence->name}}</td>
                            <td>{{$item->phone}}@if($item->phone_extencion) - {{$item->phone_extencion}}@endif</td>
                            <td>{{$item->email}}</td>
                            <td><a href="{{ route('dashboard.user.edit', $item)}}">Editar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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
