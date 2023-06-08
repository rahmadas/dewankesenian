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
        return view('admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.berita.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'required',
            'keterangan' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Berita::create($input);

        return redirect()->route('berita.index')
            ->with('success', 'Berita created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $berita->update($input);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita has been deleted successfully.');
    }
}