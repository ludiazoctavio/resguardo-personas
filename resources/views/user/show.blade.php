@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <h5 class="card-title"><strong>Nombre: </strong>{{$role->name}}</h5>
        <p class="card-text"><strong>Descripción: </strong>{{$role->description}}</p>
    </div>
    <div class="card-footer text-muted">
        <a href="#" class="btn btn-danger" onclick="send_form()">Eliminar</a>
        <a href="{{ route('dashboard.role.edit', $role) }}" class="btn btn-success">Editar</a>
    </div>
</div>
<div class="card mt-5">
    <div class="card-header">
        Permisos
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $item)
                <tr>
                    <th scope="row"><a href="{{ route('dashboard.permission.show', $item) }}">{{$item->name}}</a></th>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<form method="POST" action="{{ route('dashboard.role.destroy', $role) }}" name="delete_form">
    @method('DELETE')
    @csrf
</form>
@endsection
@section('extra_script')
<script>
    function send_form()
    {
        swal({
            title:"¿Deseas eliminar este rol?",
            text:"Esta acción no se puede deshacer",
            icon:"warning",
            buttons: {
                cancel:{
                    text:"No, cancelar",
                    value:false,
                    visible: true,
                    closeModal: true,
                },
                confirm:{
                    text:"Si, continuar",
                    value:true,
                    visible: true,
                    closeModal: true,
                }
            }
        })
        .then((isConfir) =>
        {
            if (isConfir) {
                document.delete_form.submit();
            }else{
                swal("Operación cancelada", "No se elimino el rol", "error")
            }
        });
    }
</script>
@endsection
