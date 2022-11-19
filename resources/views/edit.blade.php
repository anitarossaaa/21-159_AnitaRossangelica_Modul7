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
        <div class="col-md-8 offset-sm-2">
            <h3 class="display-6"> Detail Data Mahasiswa</h3>
        </div>
        <div class="row">
            <div class="col-md-8 offset-sm-2">
                <form action="{{url("/mahasiswis/{$mahasiswi->id}")}}" method="POST">
                    @method ('Patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama"> Nama </label>
                        <input value="{{$mahasiswi->nama}}" class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nrp"> NRP </label>
                        <input value="{{$mahasiswi->nrp}}" class="form-control" type="text" name="nrp">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat </label>
                        <input value="{{$mahasiswi->alamat}}" class="form-control" type="text" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input value="{{$mahasiswi->email}}" class="form-control" type="text" name="email">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection