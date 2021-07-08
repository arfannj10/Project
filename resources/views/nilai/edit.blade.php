@extends('layouts/app')

@section('title', 'Edit Matapelajaran')

@section('content')
<div class="card-body">
    <form method="post" action="{{route('pelajarans.update', $pelajarans->pelajaran_id)}}">
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
            <div class="mb-3">
                <label for="tingkat" class="form-label">Tingkat</label>
                <select name="tingkat" id="tingkat" class="form-control">
                    <option value="$pelajarans->tingkat">$pelajarans->tingkat</option>
                    <option value="Ula">Ula</option>
                    <option value="Elementary">Elementary</option>
                    <option value="Wustho">Wustho</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Ulya">Ulya</option>
                    <option value="Advance">Advance</option>
                </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection