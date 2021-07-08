@extends('layouts/app')

@section('title', 'Edit Matapelajaran')

@section('content')
<div class="card-body">
    <form method="post" action="{{route('kelas.update', $kelas->id_kelas)}}">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="kd_kelas" class="form-label">Kode</label>
            <select name="kd_kelas" id="kd_kelas" class="form-control">
                <option value="">---</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option> 
            </select>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="">---</option>
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