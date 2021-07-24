@extends('layouts/admin')

@section('title', 'Data Kelas')

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
            <th scope="col">Tingkat</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas as $kls)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$kls->tingkat->tingkat}}</td>
            <td scope="row">{{$kls->nama_kelas}}</td>
            <td scope="row">
                <a href="{{route('kelas.show', $kls->id)}}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-info-circle"></i>
                </span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSayaLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{route('kelas.store')}}">
                    @csrf
                    <div class="row">
                            <div class="form-group">
                                <label for="tingkat">Tingkat</label>
                                <select id="tingkat" name="tingkat_id" class="select2bs4 form-control @error('tingkat') is-invalid @enderror">
                                    <option value="">-- Pilih Tingkat --</option>
                                    @foreach($tingkat as $ti)
                                    <option value="{{$ti->id}}">{{$ti->tingkat}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 ml-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" name="nama_kelas" value="{{ old('nama_kelas')}}"
                                    placeholder="Isi nama kelas" required>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection