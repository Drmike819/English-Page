
@extends('base')

@section('content')
    <div class="contenedor-login">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-logo/>
                </div>
                <div class="col-6">
                    <h2 class="text-center mb-4 mt-5">Forgot Password</h2>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" name="email" required autofocus>
                <label class="form-label" for="email">Email</label>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Sumbit reset link</button>
            </div>
        </form>
    </div>
@endsection
