@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <form method="POST" class="col-8 d-flex justify-content-lg-between" action="">
                @csrf
                <input type="text" class="form-control" id="folio" name="folio" placeholder="Buscar por folio">
                <input type="text" class="form-control" id="name" name="name" placeholder="Buscar por nombre">
                <button type="submit" class="btn btn-primary ml-2">Q</button>
            </form>
            <div class="col-4">
                <form method="POST" class="col-8 d-flex justify-content-lg-between" action="">
                    @csrf
                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
                </form>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col"></th>
                <th scope="col">Edad</th>
                <th scope="col">Nombre</th>
                <th scope="col">Hora de desaparición</th>
                <th scope="col">Fecha de desaparición</th>
                <th scope="col">Sexo</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($people as $item)
                <tr>
                    <th scope="row"><a href="#">{{$item->folio}}</a></th>
                    <td>@if(is_null($item->age))@else{{$item->age->name}}@endif</td>
                    <td>{{$item->getFullName()}}</td>
                    <td>{{$item->disappearance_report->time}}</td>
                    <td>{{$item->disappearance_report->date}}</td>
                    <td>{{$item->gender->name}}</td>
                    <td><a href="{{ route('dashboard.person.edit', $item)}}">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
@endsection
@section('extra_script')

@endsection