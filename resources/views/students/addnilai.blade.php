@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<nav class="container mt-5">
    <form method="post" action="/students/show">
        @csrf
        <input type="hidden" >
        <div class="mb-3">
            <label for="pelajaran_id" class="form-label">Mata Pelajaran</label>
            <select name="pelajaran_id" id="pelajaran_id" class="form-control">
                <option value="">Pilih Mapel</option>
                @foreach($students->pelajaran as $dt)
                <option value="{{$dt->id}}">{{$dt->matapelajaran}}</option>
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