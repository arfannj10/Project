@extends('layouts/app')

@section('title', 'Edit Matapelajaran')

@section('content')
<div class="card-body">
    <form method="post" action="{{route('pelajarans.update', $pelajarans->id)}}">
        @method('patch')
        @csrf
        <div class="mb-3">
                <label for="kd_mp" class="form-label">Kode Matapelajaran</label>
                <input type="text" class="form-control" name="kd_mp" value="{{ $pelajarans->kd_mp}}" placeholder="Isi kd_mp"
                    required>
            </div>
            <div class="mb-3">
                <label for="matapelajaran" class="form-label">Matapelajaran</label>
                <input type="text" class="form-control" name="matapelajaran" value="{{ $pelajarans->matapelajaran }}"
                    placeholder="Isi matapelajaran" required>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection