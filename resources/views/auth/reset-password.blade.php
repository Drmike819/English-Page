
@extends('base')

@section('content')
    <div class="contenedor-signup">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <x-logo/>
                </div>
                <div class="col-6">
                    <h2 class="text-center mb-4 mt-5">Reset Password</h2>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-floating mb-3">
                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                <label class="form-label" for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="password" type="password" name="password" required>
                <label class="form-label" for="password">New Password</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required>
                <label class="form-label" for="password_confirmation">Comfirm new Password</label>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Reset password</button>
            </div>
        </form>
    </div>
@endsection
