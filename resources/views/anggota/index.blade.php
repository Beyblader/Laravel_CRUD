@extends('layout.master')

@section('title')
Data Anggota
@endsection

@section('content')
    <a href="/anggota/create" class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Tambah Anggota</a>

    <br/>
    <br/>

    <table class="table table-striped">
        <tr>
            <th>NISN</th>
            <th>Nama Lengkap</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
        @foreach($anggota as $a)
        <tr>
            <td>{{ $a->nisn }}</td>
            <td>{{ $a->nama_lengkap }}</td>
            <td>{{ $a->tempat_lahir }}, {{ $a->tanggal_lahir }}</td>
            <td>{{ $a->alamat }}</td>
            <td>{{ $a->no_hp }}</td>
            <td>
                <form action="/anggota/{{ $a->id }}" method="post">
                    <!-- edit -->
                    <a href="/anggota/{{ $a->id }}/edit" class="btn btn-warning">Edit</a>
                    <!-- delete -->
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection