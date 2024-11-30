@extends('base')

@section('content')
    <div class="contenedor-signup">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-logo/>
                </div>
                <div class="col-6 mt-5">
                    <h2 class="text-center mb-4">Sign Up</h2>
                </div>
            </div>
        </div>
        <form action="{{ route('signup.post') }}" method="POST">
            @csrf
            <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required>
                <label for="name" class="form-label">Nombre</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo" required>
                <label for="email" class="form-label">Correo Electrónico</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Crea una contraseña" required>
                <label for="password" class="form-label">Contraseña</label>
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" required>
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success w-100">Sing Up</button>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('login.get') }}">I have an account</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
@endsection
