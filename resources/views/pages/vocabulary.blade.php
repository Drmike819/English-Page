@extends('base')

@section('title', 'Vocabulary')

@section('content')
    <div class="container-fluid p-4">
        <table class="table table-striped table-dark table-bordered rounded-3">
            <thead class="cabeza-tabla">
                <tr>
                    <th class="text-center">Word</th>
                    <th class="text-center">Meaning </th>
                    <th class="text-center">Pronunciation </th>
                </tr>
            </thead>
            <tbody>
                @if ($vocabulary && $vocabulary->isNotEmpty())  <!-- Verificar que $vocabulary no sea null y no esté vacío -->
                    @foreach ($vocabulary as $vocab)
                        <tr class="cuerpo-tabla bg-primary">
                            <td>{{ $vocab['title'] }}</td>
                            <td>{{ $vocab['description'] }}</td>
                            <td class="text-center">
                                <audio controls class="text-center">
                                    <source src="{{ asset($vocab->audio) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No vocabularies found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

@endsection
