@extends('layouts.app')

@section('title', 'Membarui Konsumen')

@section('content')

<header class="main-header">
    <h1><span style='color: #6610f2;'>Membarui Konsumen</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>Membarui : {{$customer->namaCustomer}}</h3>
    <form action="{{ route('customer.process', $customer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Konsumen</label>
            <input type="text" name="namaCustomer" value="{{$customer->namaCustomer}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Alamat Konsumen</label>
            <input type="text" name="alamatCustomer" value="{{$customer->alamatCustomer}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">No telepon</label>
            <input type="text" name="noTelp" value="{{$customer->noTelp}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn" style="background-color:#6610f2;">Membarui</button>
            <a href="{{route('customer')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection