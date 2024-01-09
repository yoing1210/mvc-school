<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilSMA extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil.index',[
            "title" => "profil"
        ],compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profil.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'ks' => 'required|max:255',
            'nip' => 'required|max:255',
            'email' => 'required|max:255',
            'kontak' => 'required|max:255',
            'akreditasi' => 'required|max:255',
            'prestasi' => 'required|max:255',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'sejarah' => 'required',
            'fasilitas' => 'required',
            'jurusan' => 'required'
        ]);
        
    
        
        Profil::create($validatedData);

        return redirect('/admin/profil')->with('success','New Post has been added');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        return view('admin.profil.edit',[
            'profil' => $profil
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // dd($request->all());


        $profil = Profil::find($id);
        $profil->nama = $request->nama;
        $profil->alamat = $request->alamat;
        $profil->ks = $request->ks;
        $profil->kontak = $request->kontak;
        $profil->email = $request->email;
        $profil->nip = $request->nip;
        $profil->prestasi = $request->prestasi;
        $profil->akreditasi = $request->akreditasi;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        $profil->tujuan = $request->tujuan;
        $profil->sejarah = $request->sejarah;
        $profil->fasilitas = $request->fasilitas;
        $profil->jurusan = $request->jurusan;

        $profil->update();
        return redirect('/admin/profil')->with('success','New Post has been edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
