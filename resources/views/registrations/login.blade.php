@extends('base')

@section('content')

    <div class="contenedor-login">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-logo/>
                </div>
                <div class="col-6">
                    <h2 class="text-center mb-4 mt-5">Log In</h2>
                </div>
            </div>
        </div>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Log In</button>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('signup.get') }}">Don't have an account?</a>
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
                </div>
            </div>    
        </form>
    </div>
@endsection