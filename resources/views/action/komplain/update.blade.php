@extends('layouts.app')

@section('title', 'Update Transaksi')

@section('content')

<header class="main-header">
    <h1><span style='color: #6610f2;'>Update Komplain</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>Seller</h3>
    <form action="{{ route('komplain.process', $komplain->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Jenis Komplain</label>
            <input type="text" name="nama_konsumen" value="{{$komplain->jenisKomplain}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Komplain</label>
            <input type="date" name="alamat_konsumen" value="{{$komplain->tanggalKomplain}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection