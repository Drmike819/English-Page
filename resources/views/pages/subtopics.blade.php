@extends('base')

@section('title', 'Home')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 subtopics-title">{{ $topic->title }}</h1>
    <p class="text-center mb-5 subtopics-text">{{ $topic->description }}</p>

        @foreach($subtopicsWithNotes as $index => $subtopic)
            <div class="row align-items-center mb-5 p-3 contenedor-subtopics">
                {{-- Alternar entre imagen izquierda y derecha --}}
                @if($index % 2 == 0)
                    {{-- Imagen a la izquierda --}}
                    <div class="col-md-6 text-center">
                        <img class="img-fluid img-subtopics" src="{{ asset($subtopic->image) }}" class="img-fluid rounded" alt="{{ $subtopic->title }}">
                    </div>
                    <div class="col-md-6">
                        <h3 class=" text-center title-subtopics">{{ $subtopic->title }}</h3>
                        <p>{!! $subtopic->description !!}</p>
                        <ul>
                            @foreach($subtopic->notes as $note)
                                <li>{{ $note->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    {{-- Imagen a la derecha --}}
                    <div class="col-md-6 order-md-2 text-center">
                        <img class="img-fluid img-subtopics" src="{{ asset($subtopic->image) }}" class="img-fluid rounded" alt="Subtopic Image">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h3 class=" text-center title-subtopics">{{ $subtopic->title }}</h3>
                        <p>{!! $subtopic->description !!}</p>
                        <ul>
                            @foreach($subtopic->notes as $note)
                                <li>{{ $note->content }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    @guest
        <P class="text-center text-auht">To view the vocabulary and games please 
            <a class="btn btn-outline-warning" role="button" href="{{ route('login.get') }}">LogIn</a>
        </P>
    @endguest


@endsection
