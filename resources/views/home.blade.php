@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Risultati frequenti</h1>
        <div class="card-container">
            @foreach ($dresses as $dress)
                <div class="card">
                    <h2>{{ $dress->type }}</h2>
                    <p>
                        <strong>Colore:</strong>
                        {{ $dress->color }}
                    </p>
                    <p>
                        <strong>Marca:</strong>
                        {{ $dress->brand }}
                    </p>
                    <p>
                        <strong>Materiale:</strong>
                        {{ $dress->material}}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
