@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')

<div class="card">
    <div class="card-header">
        {{$student->nis}}
        {{$student->nama}}
    </div>
    <div class="card-body">
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pelajaran</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilai as $dt)
                <tr>
                    <td scope="row">{{$loop->iteration}}</td>
                    <td scope="row">{{$dt->pelajaran->matapelajaran}}</td>
                    <td scope="row">{{$dt->uts}}</td>
                    <td scope="row">{{$dt->uat}}</td>
                    <td scope="row"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection