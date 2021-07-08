@extends('layouts/app')

@section('title','Form Edit Data')

@section('content')
<div class="card mt-5 w-50">
    <h2 class="card-header">Form Edit Data</h2>
    <div class="card-body">
        <form method="post" action="{{route('teachers.update',$teachers->id)}}">
            @method('patch')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $teachers->nama}}"
                            placeholder="Isi nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control" id="nip" name="nip" value="{{ $teachers->nip}}"
                            placeholder="Isi nip" required>
                    </div>
                    <div class="mb-3">
                        <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                            value="{{ $teachers->tmp_lahir}}" placeholder="Isi tempat lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                            value="{{ $teachers->tgl_lahir}}" required>
                    </div>
                    <div class="mb-3">
                        <select name="agama" id="agama" class="form-control">
                            <option value="{{ $teachers->agama}}">{{$teachers->agama}}</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Lain">Lain</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pelajaran_id">Mata Pelajaran</label>
                        <select id="pelajaran_id" name="pelajaran_id"
                            class="select2bs4 form-control @error('pelajaran_id') is-invalid @enderror">
                            <option value="">Pilih Mapel</option>
                            @foreach($mapel as $mp)
                            <option value="{{$mp->id}}" selected>{{$mp->matapelajaran}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select id="pendidikan" name="pendidikan"
                            class="select2bs4 form-control @error('pendidikan') is-invalid @enderror">
                            <option value="{{$teachers->pendidikan}}">{{$teachers->pendidikan}}</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="Lain">Lain</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pt" class="form-label">Perguruan Tinggi</label>
                        <input type="text" class="form-control" id="pt" name="pt" value="{{ $teachers->pt }}"
                            placeholder="Isi perguruan tinggi" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan"
                            value="{{ $teachers->jurusan}}" placeholder="Isi Kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="thn_lulus" class="form-label">Tahun Lusus</label>
                        <input type="text" class="form-control" id="thn_lulus" name="thn_lulus"
                            value="{{ $teachers->thn_lulus}}" placeholder="Isi tahun lulus" required>
                    </div>
                    <div class="mb-3">
                        <label for="nmr_tlp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nmr_tlp" name="nmr_tlp"
                            value="{{ $teachers->nmr_tlp}}" placeholder="Isi nomor telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="{{ $teachers->alamat }}" placeholder="Isi Alamat" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection