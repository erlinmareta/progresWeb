<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailPasien;

class FormController extends Controller
{
  public function index()
  {
    $dtdetail = DetailPasien::all();  
    return view('user.form');
  }

  public function store(Request $request)
    {
        // dd($request->all());
        DetailPasien::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'paket' => $request->paket,
            'keluhan' => $request->keluhan,
            'file' => $request->file,
        ]);

        return redirect('user.validasi')->with('toast_success', 'Data berhasil ditambhakan!');
    }

    public function validasi()
    {
      return view('user.validasi');
    }
}
