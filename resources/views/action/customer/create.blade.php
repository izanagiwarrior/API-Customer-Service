@extends('layouts.app')

@section('title', 'Add Consumen')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Tambah Customer</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>silahkan buat customer baru</h3>
    <form action="{{ route('customer.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Customer</label>
            <input type="text" name="namaCustomer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Alamat Customer</label>
            <input type="text" name="alamatCustomer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">No telepon</label>
            <input type="text" name="noTelp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection