@extends('layouts/app')

@section('title', 'Data Siswa')

@section('content')
<div class="card-body">
    <form method="post" action="{{route('students.update',$students->id)}}">
        @method('patch')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $students->nama}}"
                        placeholder="Isi nama" required>
                </div>
                <div class="mb-3">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="text" class="form-control" id="nis" name="nis" value="{{ $students->nis}}"
                        placeholder="Isi nis" required>
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        value="{{ $students->tgl_lahir}}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $students->alamat }}"
                        placeholder="Isi Alamat" required>
                </div>
                <div class="mb-3">
                    <label for="sekolah" class="form-label">sekolah</label>
                    <input type="text" class="form-control" id="sekolah" name="sekolah" value="{{ $students->sekolah }}"
                        placeholder="Isi Sekolah" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select id="kelas" name="kelas"
                        class="select2bs4 form-control">
                        <option value="{{$students->kelas}}">{{$students->kelas}}</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kelas_id">Tingkat</label>
                    <select id="kelas_id" name="kelas_id"
                        class="select2bs4 form-control">
                        @foreach($kelas as $kl)
                        <option value="{{$kl->id}}" selected>{{$kl->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                        value="{{ $students->nama_ayah}}" placeholder="Isi nama ayah" required>
                </div>
                <div class="mb-3">
                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                        value="{{ $students->nama_ibu}}" placeholder="Isi nama ayah" required>
                </div>
                <div class="mb-3">
                    <label for="nmr_tlp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nmr_tlp" name="nmr_tlp" value="{{ $students->nmr_tlp}}"
                        placeholder="Isi nomor telepon" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection