@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Masukkan Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tingkat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $std)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$std->nis}}</td>
                        <td>{{$std->nama}}</td>
                        <td>{{$std->tingkat->tingkat}}</td>
                        <td>
                            <div class="button-group">
                                <a href="{{route('students.show', $std->id)}}" class="btn btn-primary">Show</a>
                                
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection