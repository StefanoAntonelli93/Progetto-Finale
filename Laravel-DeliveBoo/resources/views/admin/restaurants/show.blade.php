@extends('layouts.app')


@section('content')
    <div class="container py-5">
        <div class="content d-flex justify-content-between align-items-center">
            <h2 class="py-3">Dettagli del tuo ristorante</h2>
            {{-- vai a index --}}
            <a href="{{ route('admin.restaurants.index') }}"><button class="btn btn-primary btn-md">Torna ai
                    ristoranti</button></a>
        </div>

        @if ($restaurant)
            <div class="conatiner-sm">
                <div class="row">
                    <div class="col-6">
                        @if ($restaurant->img)
                            <div>
                                <img class="w-100" src="{{ asset('storage/' . $restaurant->img) }}"
                                    alt="{{ $restaurant->restauran_name }}">
                            </div>
                    </div>
                    <div class="col-6">
        @endif
        <p>Nome ristorante: {{ $restaurant->restaurant_name }}</p>
        <p>Indirizzo: {{ $restaurant->address }}</p>
        <p>Numero di telefono: {{ $restaurant->phone_number }}</p>
        <p>Descrizione: {{ $restaurant->description }}</p>
        <p>Partita IVA: {{ $restaurant->p_iva }}</p>


        <p>Categorie: {{ implode(', ', $restaurant->categories->pluck('name')->toArray()) }}</p>

        {{-- modifica --}}
        <div>
            <button class="btn btn-warning mt-3"><a
                    href="{{ route('admin.restaurants.edit', $restaurant) }}">Modifica</a></button>
        </div>
    </div>
    </div>

    </div>
@else
    <p>Ristorante non trovato.</p>
    @endif

    </div>
@endsection
