<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DetailPasien;

class DetailController extends Controller
{
    public function index()
    {
        $dtdetail = DetailPasien::all();
        return view('admin.detailPasien', compact('dtdetail'));
    }

}
