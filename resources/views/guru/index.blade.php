@extends('layouts/app')

@section('title','Data Guru')

@section('content')

<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Guru
</button>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Lihat Guru</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mapel as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->matapelajaran}}</td>
            <td>
                <a href="{{route('teachers.show',$dt->id)}}" class="btn btn-primary">show</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('teachers.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control" name="nip" onkeypress="return inputAngka(event)" value=" {{ old('nip')}}" placeholder="Isi nis" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ old('nama')}}"
                                    placeholder="Isi nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir')}}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_lahir" value="{{ old('tmp_lahir')}}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}"
                                    placeholder="Isi Alamat" required>
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
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="agama">Agama</label>
                                <select id="agama" name="agama"
                                    class="select2bs4 form-control @error('agama') is-invalid @enderror">
                                    <option value="">-- Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                        <div class="mb-3">
                                <label for="pt" class="form-label">Perguruan Tinggi</label>
                                <input type="text" class="form-control" name="pt" value="{{ old('pt')}}"
                                    placeholder="Isi Perguruan Tinggi" required>
                            </div>
                            <div class="form-group">
                                <label for="pelajaran_id">Mata Pelajaran</label>
                                <select id="pelajaran_id" name="pelajaran_id"
                                    class="select2bs4 form-control @error('pelajaran_id') is-invalid @enderror">
                                    <option value="">Pilih Mapel</option>
                                    @foreach($mapel as $mp)
                                    <option value="{{$mp->id}}">{{$mp->matapelajaran}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan')}}"
                                    placeholder="Isi Jurusan" required>
                            </div>
                            <div class="mb-3">
                                <label for="th_lulus" class="form-label">Tahun Lulus</label>
                                <input type="text" class="form-control" name="thn_lulus" onkeypress="return inputAngka(event)" value="{{ old('th_lulus')}}"
                                    placeholder="Isi tahun lulus" required>
                            </div>
                            <div class="mb-3">
                                <label for="nmr_tlp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" name="nmr_tlp" onkeypress="return inputAngka(event)" value="{{ old('nmr_tlp')}}" placeholder="Isi nomor telepon" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection