<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();

        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Berita::create($request->all());
        return redirect()->route('berita.index')->with('success','Data Berhasil Di Tambahkan');

        // $request->validate([

        //     'nama' => 'required', 'gambar' => 'required|image|mimes:png,jpg,jpeg', 'keterangan' => 'required',
            
        // ]);

        // $input = Berita::create($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('gambarberita/', $request->file('gambar')->getClientOriginalName());
        //     $data->gambar = $request->file('gambar')->getClientOriginalName();
        //     $data->save();
        // }

      
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}