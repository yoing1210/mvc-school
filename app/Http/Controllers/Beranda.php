<?php


namespace App\Http\Controllers;
use App\Models\Profil;
use App\Models\Category;
use Illuminate\Http\Request;

class Beranda extends Controller
{
    public function index()
    {   
        $category = Category::all();
        $profil = Profil::all();
        return view('beranda.beranda',[
            "title" => "beranda",
            "active" => 'beranda',
        ],compact('profil','category'));
    
    }

}
