<?php

namespace App\Http\Controllers;

use App\Models\Lppm;
use App\Models\Admin;
use Illuminate\Http\Request;

class LppmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lppms = Lppm::all();
        return view('lppms.index2', compact('lppms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lppms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'namaKetua' => 'required|string',
            'perguruanTinggi' => 'required|string',
            'alamatPT' => 'required|string',
            'userjss' => 'required|string',
            'readed' => 'required|boolean',
        ]);
        

        Lppm::create([
            'email' => $request->email,
            'namaKetua' => $request->namaKetua,
            'perguruanTinggi' => $request->perguruanTinggi,
            'alamatPT' => $request->alamatPT,
            'userjss' => $request->userjss,
            'readed' => $request->readed
        ]);
        return redirect()->route('lppms.index')->with('success', 'LPPM entry created successfully.');
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
        $lppms = Lppm::find($id);
    return view('lppms.edit', compact('lppms'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
           'email' => 'required|email',
            'namaKetua' => 'required|string',
            'perguruanTinggi' => 'required|string',
            'alamatPT' => 'required|string',
            'userjss' => 'required|string',
            'readed' => 'required|boolean',
        ]);
    
        $lppm = Lppm::find($id);
        $lppm->email = $request->email;
        $lppm->namaKetua = $request->namaKetua;
        $lppm->perguruanTinggi = $request->perguruanTinggi;
        $lppm->alamatPT = $request->alamatPT;
        $lppm->userjss =  $request->userjss;
        $lppm->readed = $request->readed;

        
        
        $lppm->save();
    
        return redirect()->route('lppms.index2')->with('success', 'Lppm updated successfully');
        
    }

    public function destroy(string $id)
    {
        Lppm::find($id)->delete();
    return redirect()->route('lppms.index2')->with('success', 'Lppm deleted successfully');
    }
}
