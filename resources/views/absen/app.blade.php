@extends('layouts/app')

@section('title', 'Absensi Siswa')

@section('content')
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kelas</th>
            <th scope="col">Tipe</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($class as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->kelas}}</td>
            <td scope="row">{{$dt->kd_kelas}}</td>
            <td>
            
                <a href="{{route('absen.show', $dt->id)}}" class="btn btn-primary">Show</a>
                <!-- <form action="" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Hapus</button>
                </form> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection