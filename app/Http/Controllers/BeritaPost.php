<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\berita;
class BeritaPost extends Controller
{
    public function index()
    {   
        $berita = berita::all();
        return view('berita.index',[
            "title" => "berita",
            "active" => 'berita',
        ],compact('berita'));
    
    }

    public function show(berita $berita, $id) 
    {
        
        $berita = berita::find($id);
        $cat = Category::all();
        $ber = berita::all();
        return view('berita.detail',[
            'title' => 'detail',
            "active" => 'detail',
        ], compact( 'berita','cat','ber'));
    }
}
