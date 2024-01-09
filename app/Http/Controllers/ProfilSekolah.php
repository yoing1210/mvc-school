<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilSekolah extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return view('profilSekolah.index',[
            "title" => "profil",
            "active" => 'profil',
        ],compact('profil'));
    
    }
}
