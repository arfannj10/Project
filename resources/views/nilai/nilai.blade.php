@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')

<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pelajaran</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilai as $dt)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td scope="row">{{$dt->student->nis}}</td>
                    <td scope="row">{{$dt->student->nama}}</td>
                    <td scope="row">{{$dt->pelajaran->matapelajaran}}</td>
                    <td scope="row">{{$dt->uts}}</td>
                    <td scope="row">{{$dt->uat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection