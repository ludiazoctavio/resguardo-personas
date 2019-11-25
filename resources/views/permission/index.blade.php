@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Permisos
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Rol</th>
                <th scope="col">Descripcion</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $item)
                <tr>
                    <th scope="row"><a href="{{ route('dashboard.permission.show', $item) }}">{{$item->name}}</a></th>
                    <th scope="row"><a href="{{ route('dashboard.role.show', $item->role) }}">{{$item->role->name}}</a></th>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
