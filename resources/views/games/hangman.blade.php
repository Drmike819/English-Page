@extends('base') <!-- Extend your main layout -->

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Hangman Game</h3>
        </div>
        <div class="card-body">
            <!-- Messages based on the game state -->
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

            <!-- Hint -->
            <p><strong>Hint:</strong> {{ session('pista') }}</p>

            <!-- Hidden Word -->
            <h4 class="mb-4">
                Word: 
                @foreach ($palabraOculta as $letra)
                    {{ $letra }}
                @endforeach
            </h4>

            <!-- Incorrect Letters -->
            @if (!empty($letrasErradas))
                <p><strong>Incorrect Letters:</strong> {{ implode(', ', $letrasErradas) }}</p>
            @endif

            <!-- Remaining Attempts -->
            <p><strong>Remaining Attempts:</strong> {{ session('intentos') }}</p>

            <!-- Form to enter word -->
            @if (session('estadoJuego') === 'en juego')
                <form action="{{ route('ahorcado.adivinar-palabra') }}" method="POST">
                    @csrf <!-- Security token required for POST forms -->
                    <div class="mb-3">
                        <label for="respuesta" class="form-label">Enter the full word:</label>
                        <input type="text" name="respuesta" id="respuesta" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guess</button>
                </form>
            @endif

            <!-- Restart Button -->
            <form action="{{ route('reiniciar.ahorcado') }}" method="GET" class="mt-4">
                <button type="submit" class="btn btn-warning">Restart Game</button>
            </form>
        </div>
    </div>
</div>
@endsection


