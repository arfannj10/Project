@extends('layouts/app')

@section('title', 'Form Tambah Data Matapelajaran')

@section('content')
<div class="card mt-5 w-50">
    <h2 class="card-header">Form Tambah Data</h2>
    <div class="card-body">
        <form method="post" action="/pelajarans">
            @csrf
            <div class="mb-3">
                <label for="kd_mp" class="form-label">Kode Matapelajaran</label>
                <input type="text" class="form-control" name="kd_mp" value="{{ old('kd_mp')}}" placeholder="Isi kd_mp"
                    required>
            </div>
            <div class="mb-3">
                <label for="matapelajaran" class="form-label">Matapelajaran</label>
                <input type="text" class="form-control" name="matapelajaran" value="{{ old('matapelajaran')}}"
                    placeholder="Isi matapelajaran" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection