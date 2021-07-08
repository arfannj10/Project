@extends('layouts/app')

@section('title', 'Form Tambah Data Matapelajaran')

@section('content')
<div class="card mt-5 w-50">
    <h2 class="card-header">Form Tambah Data</h2>
    <div class="card-body">
        <form method="post" action="/kelas">
            @csrf
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" value="{{ old('nama_kelas')}}"
                    placeholder="Isi nama kelas" required>
            </div>
            <div class="form-group">
                <label for="tingkat">Tingkat</label>
                <select id="tingkat" name="tingkat"
                    class="select2bs4 form-control @error('tingkat') is-invalid @enderror">
                    <option value="">-- Pilih Tingkat --</option>
                    <option value="$tingkat">{{$tingkat->tingkat}}</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection