@extends('layouts/app')

@section('title', 'Data Kelas')

@section('content')
<!-- <button><a href="{{route('kelas.create')}}">tambah</a></button> -->
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Kelas
</button>
<table class="table table-striped mt-3">
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
                <a href="{{route('kelas.show', $kls->id)}}" class="btn btn-primary">Show</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <div class="mb-3">
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