@extends('layouts/app')

@section('title', 'Data Nilai Siswa')

@section('content')

<table class="table table-hover mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas as $kls)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$kls->nama_kelas}}</td>
            <td>
                <a href="{{route('nilai.show', $kls->id)}}" class="btn btn-primary">Show</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection