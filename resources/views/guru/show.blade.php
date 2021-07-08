@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Agama</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Perguruan Tinggi</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teacher as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->nip}}</td>
            <td scope="row">{{$dt->nama}}</td>
            <td scope="row">{{$dt->tmp_lahir}}</td>
            <td scope="row">{{$dt->tgl_lahir}}</td>
            <td scope="row">{{$dt->agama}}</td>
            <td scope="row">{{$dt->pendidikan}}</td>
            <td scope="row">{{$dt->pt}}</td>
            <td scope="row">{{$dt->jurusan}}</td>
            <td scope="row">{{$dt->alamat}}</td>
            <td scope="row">
                <a href="{{route('teachers.edit',$dt->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('students.destroy',$dt->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection