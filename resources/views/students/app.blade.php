@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data Siswa
</button>

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tingkat</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelas as $dt)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td scope="row">{{$dt->tingkat->tingkat}}</td>
            <td scope="row">{{$dt->nama_kelas}}</td>
            <td scope="row"><a href="{{route('students.show', $dt->id)}}" class="btn btn-primary">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('students.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" class="form-control" name="nis" onkeypress="return inputAngka(event)" value=" {{ old('nis')}}" placeholder="Isi nis" required>
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
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}"
                                    placeholder="Isi Alamat" required>
                            </div>
                            <div class="mb-3">
                                <label for="sekolah" class="form-label">sekolah</label>
                                <input type="text" class="form-control" name="sekolah" value="{{ old('sekolah')}}"
                                    placeholder="Isi Sekolah" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select id="kelas" name="kelas"
                                    class="select2bs4 form-control @error('kelas') is-invalid @enderror">
                                    <option value="">-- Pilih Kelas --</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kelas_id">Tingkat</label>
                                <select id="kelas_id" name="kelas_id"
                                    class="select2bs4 form-control @error('kelas_id') is-invalid @enderror">
                                    <option value="">--Pilih Tingkat--</option>
                                    @foreach($kelas as $kl)
                                    <option value="{{$kl->id}}">{{$kl->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" name="nama_ayah" value="{{ old('nama_ayah')}}"
                                    placeholder="Isi nama ayah" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" name="nama_ibu" value="{{ old('nama_ibu')}}"
                                    placeholder="Isi nama ayah" required>
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