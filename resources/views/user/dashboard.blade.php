@extends('user.layouts.master')
@section('title', 'Dashboard User')
@section('content')
    <section class="welcome">
        <h1>Selamat Datang di CinemaGo, Username</h1>
        <p>Nikmati pengalaman menonton terbaik dengan memesan tiket secara online.</p>
    </section>

    <main>

        <!-- Film Sedang Tayang -->
        <h2 class="section-title">Film Sedang Tayang</h2>
        <div class="movies">
            @foreach ($film as $data)
                <div class="card">
                    <img src="{{ asset('storage' . '/' . $data->image) }}" alt="Film 1">
                    <h4>{{ $data->title }}</h4>

                    <form action="{{ route('pesan', $data->id) }}">
                        <button type="submit">Pesan Sekarang</button>
                    </form>

                </div>
            @endforeach
        </div>

        <!-- Pesan Makanan -->
        <h2 class="section-title">Pesan Makanan</h2>
        <div class="movies makanan">
            @foreach ($food as $item)
                <div class="card">
                    <img src="{{ asset('storage' . '/' . $item->image) }}" alt="{{ $item->name }}">
                    <h4>{{ $item->name }}</h4>

                    <form action="{{ route('pesan.foodView', $item->id) }}">
                        <button type="submit">Pesan Sekarang</button>
                    </form>

                </div>
            @endforeach
        </div>

        <!-- Pesan Minuman -->
        <h2 class="section-title">Pesan Minuman</h2>
        <div class="movies minuman">
            @foreach ($drink as $item)
                <div class="card">
                    <img src="{{ asset('storage' . '/' . $item->image) }}" alt="Cola">
                    <h4>{{ $item->name }}</h4>
                    <form action="{{ route('pesan.drinkView', $item->id) }}">
                        <button type="submit">Pesan Sekarang</button>
                    </form>
                </div>
            @endforeach

        </div>

    </main>
@endsection
