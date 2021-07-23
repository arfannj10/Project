@extends('layouts/admin')

@section('title', 'Data Siswa')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa Kelas {{$kelas->nama_kelas}}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection