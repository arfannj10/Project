@extends('layouts/app')

@section('title', 'tambah nilai')

@section('content')
<nav class="container mt-5">
    <form method="post" action="{{route('nilai.store', $students->id)}}">
        @csrf
        <input type="hidden" name="kelas_id" value="{{$students->kelas_id}}">
        <div class="mb-3">
            <label for="pelajaran_id" class="form-label">Mata Pelajaran</label>
            <select name="pelajaran_id" id="pelajaran_id" class="form-control">
                <option value="">Pilih Mapel</option>
                @foreach($pelajaran as $mapel)
                <option value="{{$mapel->id}}">{{$mapel->matapelajaran}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="uts" class="form-label">UTS</label>
            <input type="text" class="form-control" name="uts" id="uts">
        </div>
        <div class="mb-3">
            <label for="uas" class="form-label">UAT</label>
            <input type="text" class="form-control" name="uat" id="uat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</nav>
@endsection