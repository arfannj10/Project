@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <a href="/students">Data Siswa</a>
        </div>
        <div>
            <a href="/teachers">Data Guru</a>
        </div>
        <div>
            <a href="/pelajarans">Data Pelajaran</a>
        </div>
        <div>
            <a href="/kelas">Data Kelas</a>
        </div>
        <div>
            <a href="/nilai">Data Nilai</a>
        </div>
    </div>
</div>
@endsection
