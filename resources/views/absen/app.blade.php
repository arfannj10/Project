@extends('layouts/admin')

@section('title', 'Absensi Siswa')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
            Tambah Data
        </button>
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $kls)
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$kls->nama_kelas}}</td>
                        <td>

                            <a href="{{route('absen.show', $kls->id)}}" class="btn btn-primary">Show</a>
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
        </div>
    </div>
</div>
@endsection