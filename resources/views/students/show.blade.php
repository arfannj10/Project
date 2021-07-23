@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $std)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$std->nis}}</td>
            <td scope="row">{{$std->nama}}</td>
            <td scope="row">{{$std->alamat}}</td>
            <td scope="row">
                <a href="{{url('/students/profil', $std->id)}}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
            </table>
        </div>
    </div>
</div>

@endsection