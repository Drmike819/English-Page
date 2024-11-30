@extends('base')

@section('title', 'Home')

@section('content')


    @unless (Request::routeIs('login.get')||Request::routeIs('signup.get'))
        <x-header/>
    @endunless

    <div class="container">
        <div class="row justify-content-center mt-4 mb-4">
            @foreach ($topics as $topic)
                <div class="col-md-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img class="img-topics" src="{{ asset($topic->images) }}" alt="{{ $topic->title }}">
                                <div class="card-body">
                                    
                                </div>
                                {{-- <img src="{{ asset($topic->images) }}" alt="{{ $topic->title }}"> --}}
                            </div>
                            <div class="flip-card-back">
                                <div class="card-body">
                                    <strong><h3>{{ $topic->title }}</h3></strong>
                                    <p class="m-auto">{{ $topic->description }}</p>
                                    {{-- <button class="btn btn-outline-success">Learn More</button> --}}
                                    <a href="{{ route('subtopics', ['id' => $topic->id]) }}" class="btn btn-dark">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection