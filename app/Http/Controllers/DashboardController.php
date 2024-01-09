<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
class DashboardController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil.index',[
            "title" => "profil",
            "active" => 'profil'
        ],compact('profil'));
    }
}
