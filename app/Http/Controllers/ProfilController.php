<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        $dtuser = User::all();
        return view('user.profil' , compact('dtuser'));
    }
}
