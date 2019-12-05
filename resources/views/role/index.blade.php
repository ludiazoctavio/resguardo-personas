@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-4">
                Roles
            </div>
            <div class="col-4">

            </div>
            <div class="col-4">
                <a href="{{ route('dashboard.role.create') }}">Nuevo rol +</a>
            </div>
        </div>
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
                @foreach ($roles as $item)
                <tr>
                    <th scope="row"><a href="{{ route('dashboard.role.show', $item) }}">{{$item->name}}</a></th>
                    <td>{{$item->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
