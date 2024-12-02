

<nav class="navbar navbar-expand-lg ps-5 pe-5">
    <div class="container-fluid">
      <a href="{{ route('home') }}"><img class="img-fluid img-logo" src="{{ asset('imagenes/logo/logo_large.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-end" id="navbarNav">
        
        <ul class="navbar-nav ms-auto">
          @guest
            <!-- Verificar si NO estamos en la ruta de login -->
            @if(!Request::routeIs('login.get'))
                <li class="nav-item m-2">
                    <a class="btn btn-outline-warning" role="button" href="{{ route('login.get') }}">LogIn</a>
                </li>
            @endif
    
            <!-- Verificar si NO estamos en la ruta de signup -->
            @if(!Request::routeIs('signup.get'))
                <li class="nav-item m-2">
                    <a class="btn btn-warning" role="button" href="{{ route('signup.get') }}">SignUp</a>
                </li>
            @endif
          @endguest
          
          @auth

            </li>
            @if(Route::currentRouteName() === 'subtopics' && isset($topic))
              <li class="nav-item m-2">
                  <a href="{{ route('vocabulary', ['id' => $topic->id]) }}" class="btn vocabulary"><strong>Vocabulary</strong></a>
             </li>



            @endif
            <!-- Formulario de logout con un botón -->
            <li class="nav-item m-2">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger"><strong>LogOut</strong></button>
                </form>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn vocabulary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Games
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('adivinar.get') }}">Order the word</a></li>
                  <li><a class="dropdown-item" href="{{ route('ahorcado.mostrar') }}">Hangman</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="https://quizizz.com/join?gc=057530"></a></li>
                  <li><a class="dropdown-item" href="https://es.educaplay.com/recursos-educativos/20794487-unscramble_the_design.html">Quizz</a></li>
                  <li><a class="dropdown-item" href="https://es.educaplay.com/recursos-educativos/20755384-graphic_design_word_search.html">alphabet soup</a></li>
                  <li><a class="dropdown-item" href="https://es.educaplay.com/recursos-educativos/20795132-creative_canvas_a_graphic_design_crossword.html">crossword</a></li>
              </ul>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>