@extends('layout.master')

@section('title')
Form Edit Data Anggota
@endsection

@section('content')
    <form class="row g-3 needs-validation" novalidate action="/anggota/{{ $anggota->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-8 md-4">
        <label for="validationCustom01" class="form-label">NISN</label>
        <input type="number" class="form-control" id="validationCustom01" name="nisn" value="{{ $anggota->nisn }}" required>
        <div class="valid-feedback">
        Looks good!
        </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="validationCustom02" name="nama_lengkap" value="{{ $anggota->nama_lengkap }}" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="validationCustom02" name="tempat_lahir" value="{{ $anggota->tempat_lahir }}" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="validationCustom02" name="tanggal_lahir" value="{{ $anggota->tanggal_lahir }}" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-6">
            <label for="validationCustom03" class="form-label">Alamat</label>
            <textarea class="form-control" id="validationTextarea" placeholder="" name="alamat" required>{{ $anggota->alamat }}</textarea>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom01" class="form-label">no_hp</label>
            <input type="number" class="form-control" id="validationCustom01" name="no_hp" value="{{ $anggota->no_hp }}" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection