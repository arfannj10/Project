@extends('layouts/admin')

@section('title', 'Profil Siswa')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$students->nama}}</h6>
    </div>

    <div class="row g-0">
        <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$students->nis}}</h5>
                <p class="card-text">{{$students->sekolah}}</p>
                <p class="card-text">{{$students->kelas}}</p>
                <p class="card-text">{{$students->nama_ayah}}</p>
                <p class="card-text">{{$students->nama_ibu}}</p>
                <p class="card-text">{{$students->alamat}}</p>
                <p class="card-text">{{$students->nmr_tlp}}</p>
            </div>
        </div>
        <div class="btn-group">
                <form action="{{route('students.destroy',$students->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="{{route('students.edit',$students->id)}}" class="btn btn-primary btn-circle mt-2 ml-3">
                        <i class="fas fa-pen"></i>
                    </a>
                    <button class="btn btn-danger btn-circle mt-2 ml-3">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
    </div>
</div>
@endsection