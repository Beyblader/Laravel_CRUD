<?php

namespace App\Http\Controllers;

use App\Models\AnggotaModel;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
     //
   public function index()
   {
     $anggota = AnggotaModel::all();

     return view('anggota.index', compact('anggota'));
   }

   public function create()
   {
        return view('anggota.create');
   }

   public function store(Request $request)
   {
    $request->validate([
        'nisn'          => 'required',
        'nama_lengkap'  => 'required',
        'tempat_lahir'  => 'required',
        'tanggal_lahir' => 'required',
        'alamat'        => 'required',
        'no_hp'         => 'required'
    ]);

    $anggota = new AnggotaModel;

    $anggota->nisn = $request->nisn;
    $anggota->nama_lengkap  = $request->nama_lengkap;
    $anggota->tempat_lahir  = $request->tempat_lahir;
    $anggota->tanggal_lahir = $request->tanggal_lahir;
    $anggota->alamat        = $request->alamat;
    $anggota->no_hp         = $request->no_hp;

    $anggota->save();

    return redirect('/anggota');
   }

   public function show($id)
   {
    $anggota = AnggotaModel::findOrFail($id);
    return view('anggota.show', compact('anggota'));
   }

   public function edit($id)
   {
       $anggota = AnggotaModel::findOrFail($id);
       return view('anggota.edit', compact('anggota'));
   }

   public function update(Request $request, $id)
   {
    $request->validate([
        'nisn'          => 'required',
        'nama_lengkap'  => 'required',
        'tempat_lahir'  => 'required',
        'tanggal_lahir' => 'required',
        'alamat'        => 'required',
        'no_hp'         => 'required'
    ]);

    $anggota = AnggotaModel::find($id);

    $anggota->nisn          = $request->nisn;
    $anggota->nama_lengkap  = $request->nama_lengkap;
    $anggota->tempat_lahir  = $request->tempat_lahir;
    $anggota->tanggal_lahir = $request->tanggal_lahir;
    $anggota->alamat        = $request->alamat;
    $anggota->no_hp         = $request->no_hp;

    $anggota->save();

    return redirect('/anggota');
   }

   public function destroy($id)
   {
    $anggota = AnggotaModel::find($id);
    $anggota->delete();

    return redirect('/anggota');
   }
}
