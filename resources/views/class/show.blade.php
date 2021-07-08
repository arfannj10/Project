@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<table class="table table-striped mt-3">
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

@endsection