@extends('layouts/app')

@section('title', 'Data Pelajaran')

@section('content')
<a href="/pelajarans/create" class="btn btn-primary mt-5">Tambah Data Matapelajaran</a>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Matapelajaran</th>
            <th scope="col">Matapelajaran</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelajarans as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->kd_mp}}</td>
            <td scope="row">{{$dt->matapelajaran}}</td>
            <td>
                <a href="{{route('pelajarans.edit', $dt->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{route('pelajarans.destroy',$dt->id)}}" method="post">
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