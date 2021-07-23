@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
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
                            <form action="{{url('/kelas/show')}}" method="POST"><input type="hidden" name="kelas" value="{{$kelas->id}}"><input type="hidden" name="siswa" value="{{$students->siswa_id}}"><button class="btn btn-primary" type="submit">Tambahkan Ke Kelas</button>{!! csrf_field() !!}</form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection