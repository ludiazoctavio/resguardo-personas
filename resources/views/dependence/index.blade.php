@extends('layouts.app_fluid')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                Dependencias
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Dependencia</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($dependences as $item)
                    <tr>
                        <th scope="row"><a href="#">{{$item->name}}</a></th>
                        <td><a href="#">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
