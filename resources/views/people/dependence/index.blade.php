@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Rol
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class="thead-dark">
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
