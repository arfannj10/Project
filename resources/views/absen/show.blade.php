@extends('layouts/admin')

@section('title', 'Absensi Siswa')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Absensi {{$kelas->nama_kelas}} <div class="float-right">{{Carbon\Carbon::now()->format('d-m-Y')}}</div></h6>
    </div>

    <div class="card-body">
        <form action="/absen" method="post">
            @csrf
            <input type="hidden" name="kelas" value="{{$kelas->id}}">
            <input type="hidden" name="tgl" value="{{Carbon\Carbon::now()->format('d-m-Y')}}">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $dt)
                    <tr>
                        <input type="hidden" name="student_id" value="{{$dt->id}}">
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$dt->nis}}</td>
                        <td scope="row">{{$dt->nama}}</td>
                        <td scope="row">
                                <label class="radio-inline">
                                    <input id="aktif" type="radio" name="status[{{$dt}}]" value="Hadir" checked>Hadir
                                </label>
                                <label class="radio-inline">
                                    <input id="aktif" type="radio" name="status[{{$dt}}]" value="Alfa">Alfa
                                </label>
                                <label class="radio-inline">
                                    <input id="aktif" type="radio" name="status[{{$dt}}]" value="Izin">Izin
                                </label>
                                <label class="radio-inline">
                                    <input id="aktif" type="radio" name="status[{{$dt}}]" value="Sakit">Sakit
                                </label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rekap Absen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('teachers.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="hadir" class="form-label">Hadir</label>
                                <input type="text" class="form-control" name="hadir" value="{{ old('hadir')}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="izin" class="form-label">Izin</label>
                                <input type="date" class="form-control" name="izin" value="{{ old('izin')}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="sakit" class="form-label">Sakit</label>
                                <input type="text" class="form-control" name="sakit" value="{{ old('sakit')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan">Pendidikan</label>
                                <select id="pendidikan" name="pendidikan"
                                    class="select2bs4 form-control @error('pendidikan') is-invalid @enderror">
                                    <option value="">-- Pendidikan Terakhir --</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> -->

@endsection