
@extends('base')

@section('title', 'Juego: Adivina la Palabra')

@section('content')

    <div class="container my-5">
        <!-- Título y temporizador -->
        <div class="text-center mb-4">
            <h1 class="display-4 subtopics-title">Game: Guess the Word</h1>
            <div id="temporizador" class="fs-5 text-danger">Remaining time: 60 seconds</div>
        </div>

        <!-- Contenedor de la puntuación -->
        <div id="resultado" class="alert alert-info text-center" style="display: none; margin-top: 20px;">
            <h3 class="mb-2">Game over!</h3>
            <p id="puntuacion" class="fw-bold">Your score is: 0</p>
        </div>

        <!-- Contenedor del juego -->
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="lead mb-4">Order the letters:<strong class="text-primary">{{ $desordenada }}</strong></p>
                <p class="mb-4">Track: <span class="badge bg-warning">{{ $vocabulario->description }}</span></p>

                <!-- Formulario para enviar la respuesta -->
                <form method="POST" action="{{ route('adivinar.post') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="palabra_correcta" value="{{ $vocabulario->title }}">
                        <input type="text" name="respuesta" class="form-control form-control-lg" placeholder="Your answer" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Send to</button>
                </form>
                <form action="{{ route('reiniciar.game') }}" method="GET" class="mt-4">
                    <button type="submit" class="btn btn-warning">Restart Game</button>
                </form>
            </div>
        </div>
    </div>

@endsection
