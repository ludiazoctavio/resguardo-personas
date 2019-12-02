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
                <th scope="col">Carga</th>
                <th scope="col">Dependencia</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($people as $person)
                <tr>
                    <th scope="row"><a href="{{ route('dashboard.role.show', $item) }}">{{$item->name}}</a></th>
                    <td>{{$person->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
