@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        Rol
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$role->name}}</h5>
        <p class="card-text">{{$role->description}}</p>
    </div>
    <div class="card-footer text-muted">
        <a href="#" class="btn btn-danger" onclick="send_form()">Eliminar</a>
        <a href="{{ route('dashboard.role.edit', $role) }}" class="btn btn-success">Editar</a>
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
