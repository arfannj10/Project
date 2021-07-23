@extends('layouts/admin')

@section('title', 'Data Siswa')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive mt-lg-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <div class="btn-group">
                                <form action="{{route('students.destroy',$dt->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('teachers.edit',$dt->id)}}"
                                        class="btn btn-primary btn-circle mt-2 ml-3">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <button class="btn btn-danger btn-circle mt-2 ml-3">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
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