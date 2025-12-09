@extends('user.layouts.master')
@section('title', 'Dashboard User')
@section('content')

    <section class="welcome">
        <h1>Riwayat Pesanan Anda</h1>
    </section>
    
    <main>
      <div class="movies" style="padding-bottom:60px; justify-content: flex-start; display: block; ">
        <a href="{{ route('history.pdf') }}" class="section-title"
            style="
            display:inline-block;
            padding:10px 15px;
            background:#3490dc;
            color:white;
            border-radius:5px;
            margin-bottom:20px;
        ">
            Download PDF
        </a>
        
            {{-- <p style="text-align:center; width:100%;">Belum ada pesanan</p> --}}
            <h2 class="section-title">FIlm</h2>
            @foreach ($orders as $order)
                <div class="card">
                    <img src="{{ asset('storage/' . $order->film->image) }}" alt="gambar"
                        onerror="this.src='asset/default.png'">

                    <h4></h4>
                    <p>Nama: {{ $order->title }}</p>
                    <p>Jumlah: {{ $order->amount }}</p>
                    <p>Total: Rp{{ $order->total_price }} </p>
                    <p><small></small></p>

                    <button onclick="location.href='edit_order.php?id='">Edit</button>
                    <button style="background:#a00">
                        Hapus
                    </button>
                </div>
            @endforeach

            <h2 class="section-title">Makanan</h2>
            @foreach ($foodOrders as $order)
                <div class="card">
                    <img src="{{ asset('storage/' . $order->food->image) }}" alt="gambar"
                        onerror="this.src='asset/default.png'">

                    <h4></h4>
                    <p>Nama: {{ $order->name }}</p>
                    <p>Jumlah: {{ $order->amount }}</p>
                    <p>Total: Rp{{ $order->total_price }} </p>
                    <p><small></small></p>

                    <button onclick="location.href='edit_order.php?id='">Edit</button>
                    <button style="background:#a00">
                        Hapus
                    </button>
                </div>
            @endforeach
            <h2 class="section-title">Minuman</h2>
            @foreach ($drinkOrders as $order)
                <div class="card">
                    <img src="{{ asset('storage/' . $order->drink->image) }}" alt="gambar"
                        onerror="this.src='asset/default.png'">

                    <h4></h4>
                    <p>Nama: {{ $order->name }}</p>
                    <p>Jumlah: {{ $order->amount }}</p>
                    <p>Total: Rp{{ $order->total_price }} </p>
                    <p><small></small></p>

                    <button onclick="location.href='edit_order.php?id='">Edit</button>
                    <button style="background:#a00">
                        Hapus
                    </button>
                </div>
            @endforeach


        </div>
    </main>

@endsection
