@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Usuarios
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <th scope="row"><a href="{{ route('dashboard.user.show', $item)}}">{{$item->name}}</a></th>
                    <td>{{$item->email}}</td>
                    <td><a href="{{ route('dashboard.user.edit', $item)}}">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
