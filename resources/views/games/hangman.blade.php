@extends('base') <!-- Extiende desde tu layout principal -->

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Hangman Game</h3>
            </div>
            <div class="card-body">
                <!-- Mensajes según el estado del juego -->
                @if (session('estadoJuego') === 'ganado')
                    <div class="alert alert-success">
                        Congratulations! You guessed the word: <strong>{{ session('palabraCorrecta') }}</strong>
                    </div>
                @elseif (session('estadoJuego') === 'perdido')
                    <div class="alert alert-danger">
                        Sorry! You lost. The correct word was: <strong>{{ session('palabraCorrecta') }}</strong>
                    </div>
                @else
                    <div class="alert alert-info">
                        Keep going! Try to guess the word.
                    </div>
                @endif

                <!-- Pista -->
                <p><strong>Hint:</strong> {{ session('pista') }}</p>

                <!-- Palabra Oculta -->
                <h4 class="mb-4">
                    Word: 
                    @foreach ($palabraOculta as $letra)
                        {{ $letra }}
                    @endforeach
                </h4>

                <!-- Letras Erradas -->
                @if (!empty($letrasErradas))
                    <p><strong>Incorrect Letters:</strong> {{ implode(', ', $letrasErradas) }}</p>
                @endif

                <!-- Intentos Restantes -->
                <p><strong>Remaining Attempts:</strong> {{ $intentos }}</p>

                <!-- Formulario para ingresar palabra -->
                @if (session('estadoJuego') === 'en juego')
                    <form action="{{ route('ahorcado.adivinar-palabra') }}" method="POST">
                        @csrf <!-- Token de seguridad obligatorio para formularios POST -->
                        <div class="mb-3">
                            <label for="respuesta" class="form-label">Enter the full word:</label>
                            <input type="text" name="respuesta" id="respuesta" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Guess</button>
                    </form>
                @endif

                <!-- Botón para reiniciar -->
                <form action="{{ route('reiniciar.ahorcado') }}" method="GET" class="mt-4">
                    <button type="submit" class="btn btn-warning">Restart Game</button>
                </form>
            </div>
        </div>
    </div>
@endsection



