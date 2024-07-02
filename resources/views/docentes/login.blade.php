@extends('layouts.app')

@section('content')
    <h1>Login docente</h1>
    <form action="{{ route('docentes.login') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
        @error('InvalidCredentials')
        <div class="row" style="margin-top: 10px;">
            <div class="alert alert-danger fade show" id="success-message" data-bs-dismiss="alert" role="alert">
                {{ $message }}
            </div>
        </div>
        @enderror
    </form>
@endsection
