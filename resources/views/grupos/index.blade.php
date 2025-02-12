@extends('layouts.app')

@section('content')
    <h1>Lista de grupos</h1>
    @if (session('success'))
        <div class="alert alert-success fade show" id="success-message" data-bs-dismiss="alert" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('grupos.index') }}" method="GET">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="{{ route('grupos.create') }}" class="btn btn-secondary">Crear</a>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grupos as $grupo)
                <tr>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->descripcion }}</td>
                    <td>
                        <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('grupos.show', $grupo->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('grupos.delete', $grupo->id) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-sm-12">
            {{ $grupos->links() }}
        </div>
    </div>
@endsection
