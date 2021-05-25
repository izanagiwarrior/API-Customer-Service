@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Transaksi</span></h1>
    <p>Transaksi adalah suatu kegiatan yang dilakukan oleh pihak organisasi maupun individu yang mampu melahirkan perubahan atas harta atau finansial yang dimilikinya.</p>
    <small class="text-danger"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="transaksi/create" class="btn btn-danger">Tambah</a>
        <a href="/" class="btn btn-danger">Home</a>
    </div>
    @foreach ($transaksi as $ts)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-danger">Nomor ID Pengiriman : {{$ts->id_pengiriman}}</h3>
            <h3 class="text-danger">Nomor ID Barang : {{$ts->id_barang}}</h3>
            <h3 class="text-danger">Nomor ID Transaksi : {{$ts->id}}</h3>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <p style="text-align:justify;">{{$ts->tanggalTransaksi}}</p>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <a href="{{route('transaksi.update', $ts->id_customer)}}" class="btn btn-danger">Membarui</a>
            <form action="{{route('transaksi.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$ts->id}}" name="id">
                <button class="btn btn-danger my-3">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection