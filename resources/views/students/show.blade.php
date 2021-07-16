@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
            Tambah Data
        </button>
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $dt)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$dt->nis}}</td>
                        <td scope="row">{{$dt->nama}}</td>
                        <td scope="row">{{$dt->tgl_lahir}}</td>
                        <td scope="row">{{$dt->alamat}}</td>
                        <td scope="row">
                            <div class="btn-group">
                                <a href="{{route('students.edit', $dt->id)}}"
                                    class="btn btn-primary btn-circle mr-auto">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="{{route('students.destroy',$dt->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-circle mt-2 mr-auto">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->nis}}</td>
            <td scope="row">{{$dt->nama}}</td>
            <td scope="row">{{$dt->tgl_lahir}}</td>
            <td scope="row">{{$dt->alamat}}</td>
            <td scope="row">
                <a href="{{route('students.edit', $dt->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('students.destroy',$dt->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->

@endsection