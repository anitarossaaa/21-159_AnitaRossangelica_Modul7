@extends('mahasiswi')
@section ('main')
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #87CEFA;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="btn btn-outline-primary">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" {{url('mahasiswis/create')}}" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="nav-link" style="color: black;">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class="col-md-12 " style="margin-top: 50px; font-family:'Lucida Sans';">
        <h3 style="color: #191970;"> Data Mahasiswa</h3>
        <table class="table table-striped">
            <thead style="color: #191970;">
                <tr>
                    <!-- <th> ID </th> -->
                    <th> Nama </th>
                    <th> NRP </th>
                    <th> Alamat </th>
                    <th> Email </th>
                    <th colspan="2"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswis as $mahasiswi)
                <tr>
                    <!-- <td>{{$mahasiswi->id}}</td> -->
                    <td>{{$mahasiswi->nama}}</td>
                    <td>{{$mahasiswi->nrp}}</td>
                    <td>{{$mahasiswi->alamat}}</td>
                    <td>{{$mahasiswi->email}}</td>
                    <td>
                        <form action="{{ url("mahasiswis/{$mahasiswi->id}")}}" method="Post">
                            @csrf
                            @method('DELETE')
                            <button style="border: 0;"><i class="bi bi-trash3" style="color: red;"></i> </button>
                        </form>
                    </td>
                    <td> <a class="nav-link active" href="{{url("mahasiswis/{$mahasiswi->id}/edit")}}"><i class=" bi bi-pencil-square"></i></a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection