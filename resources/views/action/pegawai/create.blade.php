@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class='text-success'>Tambah Pegawai</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-success">Silahkan buat Pegawai Baru</h3>
    <form action="{{ route('pegawai.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Pegawai</label>
            <input type="text" name="namaPegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Alamat Pegawai</label>
            <input type="text" name="alamatPegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">No Telpon</label>
            <input type="text" name="noTelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Divisi</label>
            <input type="text" name="divisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Gaji</label>
            <input type="text" name="gaji" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn btn-success">Tambah</button>
            <a href="{{route('pegawai')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection