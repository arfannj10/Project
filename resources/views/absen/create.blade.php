@extends('layouts/app')

@section('title', 'Rekapitulasi Absen')

@section('content')
<div class="card mt-5 w-50">
    <h2 class="card-header">Rekapitulasi Absen</h2>
    <div class="card-body">
        <form method="post" action="/kelas">
            @csrf
            <div class="mb-3">
                <label for="bulan" class="form-label">Bulan</label>
                <select name="bulan" id="bulan" class="form-control">
                    <option value="">---</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="hadir" class="form-label">Hadir</label>
                <input type="text" class="form-control" name="hadir" value="{{ old('hadir')}}" required>
            </div>
            <div class="mb-3">
                <label for="izin" class="form-label">Izin</label>
                <input type="text" class="form-control" name="izin" value="{{ old('izin')}}" required>
            </div>
            <div class="mb-3">
                <label for="sakit" class="form-label">Sakit</label>
                <input type="text" class="form-control" name="sakit" value="{{ old('sakit')}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection