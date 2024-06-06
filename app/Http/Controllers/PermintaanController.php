<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permintaans = Permintaan::all();
        return view('permintaans.index', compact('permintaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permintaans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       
        $request->validate([
            'jss' => 'required|string',
            'nama' => 'required|string',
            'email' => 'required|email',
            'judul' => 'required|string',
            'tahun' => 'required|integer',
            'keperluan' => 'required|string',
            'instansi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'required|boolean', // 'status' => 'required|boolean
            'readed' => 'required|boolean',
        ]);
        
        Permintaan::create([
            'jss' => $request->jss,
            'nama' => $request->nama,
            'email' => $request->email,
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'keperluan' => $request->keperluan,
            'instansi' => $request->instansi,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'readed' => $request->readed,
        ]);
        
        
        return redirect()->route('permintaans.index')->with('success', 'Permintaan Downlload entry created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permintaans = Permintaan::find($id);
        return view('permintaans.edit', compact('permintaans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jss' => 'required|string',
            'nama' => 'required|string',
            'email' => 'required|email',
            'judul' => 'required|string',
            'tahun' => 'required|integer',
            'keperluan' => 'required|string',
            'instansi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'required|boolean',
            'readed' => 'required|boolean',
        ]);
        
        $permintaan = Permintaan::find($id);
        $permintaan->jss = $request->jss;
        $permintaan->nama = $request->nama;
        $permintaan->email = $request->email;
        $permintaan->judul = $request->judul;
        $permintaan->tahun = $request->tahun;
        $permintaan->keperluan = $request->keperluan;
        $permintaan->instansi = $request->instansi;
        $permintaan->tanggal = $request->tanggal;
        $permintaan->status = $request->status;
        $permintaan->readed = $request->readed;
        
        $permintaan->save();
        
        return redirect()->route('permintaans.index')->with('success', 'Permintaan Download updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
       Permintaan::find($id)->delete();
    return redirect()->route('permintaans.index')->with('success', 'Permintaan Download deleted successfully');
    }
}
