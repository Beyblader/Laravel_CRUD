@extends('layout.master')

@section('title')
Form Create Data Anggota
@endsection

@section('content')
    <form class="row g-3 needs-validation" novalidate action="/anggota" method="POST">
        @csrf
        <div class="col-8 md-4">
        <label for="validationCustom01" class="form-label">NISN</label>
        <input type="number" class="form-control" id="validationCustom01" name="nisn" required>
        <div class="valid-feedback">
        Looks good!
        </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="validationCustom02" name="nama_lengkap" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="validationCustom02" name="tempat_lahir" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom02" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="validationCustom02" name="tanggal_lahir" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-6">
            <label for="validationCustom03" class="form-label">Alamat</label>
            <textarea class="form-control" id="validationTextarea" placeholder="" name="alamat" required></textarea>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-8 md-4">
            <label for="validationCustom01" class="form-label">No Hp</label>
            <input type="number" class="form-control" id="validationCustom01" name="no_hp" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
@endsection