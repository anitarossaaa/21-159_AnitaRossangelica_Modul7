@extends('mahasiswi')
@section('main')
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #87CEFA;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="nav-link" style="color: black;">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" {{url('mahasiswis/create')}}" class="btn btn-outline-primary">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="nav-link" style="color: black;">About Me</a></li>
            </ul>
        </header>
        <div class="row">
            <div class="col-md-8 offset-sm-2 ">
                <h3 class="display-6" style="color:#191970; margin-top:50px; font-family:'lucida sans';"> Input Data Mahasiswa</h3>
            </div>
        </div>
    </div>
    <div class="col-md-8 offset-sm-2" style="font-size: 17px; color:#191970">
        <form action="{{url("/mahasiswis")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama"> Nama </label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label for="nim"> NRP </label>
                <input class="form-control" type="text" name="nrp">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <input class="form-control" type="text" name="alamat">
            </div>
            <div class="form-group">
                <label for="email"> Email </label>
                <input class="form-control" type="text" name="email">
            </div>
            <button type="submit" class="btn btn-outline-success">Save</button>
        </form>
    </div>
</div>

@endsection