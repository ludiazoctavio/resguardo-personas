@extends('layouts.app_fluid')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    Usuario
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Nombre: </strong>{{$user->getFullNameAttribute()}}</h5>
                    <p class="card-text"><strong>Email: </strong>{{$user->email}}</p>
                    <h6><strong>Roles asignados</strong></h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($user->roles as $role)
                        <li class="list-group-item">{{$role->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-3">
            @include('user.includes.menu_dependence')
        </div>
    </div>
</div>
{{-- <div class="card mt-5">
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
</div> --}}
<form method="POST" action="{{ route('dependence.user_dependence.destroy', $user) }}" name="delete_form">
    @method('DELETE')
    @csrf
</form>
@endsection
@section('extra_script')
<script>
    function send_form()
    {
        swal({
            title:"¿Deseas eliminar el usuario?",
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
                swal("Operación cancelada", "No se elimino el usuario", "error")
            }
        });
    }
</script>
@endsection
