@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->nis}}</td>
            <td scope="row">{{$dt->nama}}</td>
            <td scope="row">
                <a href="{{route('nilai.create', $dt->id)}}" class="btn btn-primary">Tambah Nilai</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection