@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Permiso
    </div>
    <div class="card-body">
        <h5 class="card-title"><strong>Nombre: </strong>{{$permission->name}}</h5>
        <h5 class="card-title"><strong>Rol: </strong>{{$permission->role->name}}</h5>
        <p class="card-text"><strong>Descripción: </strong>{{$permission->description}}</p>
    </div>
    <div class="card-footer text-muted">
        <a href="#" class="btn btn-danger" onclick="send_form()">Eliminar</a>
        <a href="{{ route('dashboard.permission.edit', $permission) }}" class="btn btn-success">Editar</a>
    </div>
</div>
<form method="POST" action="{{ route('dashboard.permission.destroy', $permission) }}" name="delete_form">
    @method('DELETE')
    @csrf
</form>
@endsection
@section('extra_script')
<script>
    function send_form()
    {
        swal({
            title:"¿Deseas eliminar este permiso?",
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
                swal("Operación cancelada", "No se elimino el permiso", "error")
            }
        });
    }
</script>
@endsection
