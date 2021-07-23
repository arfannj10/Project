@extends('layouts/admin')

@section('title', 'Data Pelajaran')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mata Pelajaran</h6>
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
                            <div class="btn-group">
                                <form action="{{route('pelajarans.destroy',$dt->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('pelajarans.edit',$dt->id)}}"
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

<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Tambah Data Pelajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('students.store')}}">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="kd_mp" class="form-label">Kode MataPelajaran</label>
                            <input type="text" class="form-control" name="kd_mp"
                                value=" {{ old('kd_mp')}}"  required>
                        </div>
                        <div class="mb-3">
                            <label for="matapelajaran" class="form-label ml-3">MataPelajaran</label>
                            <input type="text" class="form-control ml-3" name="matapelajaran" value="{{ old('matapelajaran')}}"
                                 required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection