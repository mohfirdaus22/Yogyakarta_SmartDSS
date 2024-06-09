<?php

namespace App\Http\Controllers;


use App\Models\RekomendasiOPD;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekomendasiopds = RekomendasiOPD::all();
        return view('rekomendasiopds.index', compact('rekomendasiopds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rekomendasiopds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
           'id_kajian' => 'required|string',
           'opd_id' => 'required|string',
           'rekomendasi' => 'required|string',
           'tindak_lanjut' => 'required|string',
           'status' => 'required|boolean',
           'readed' => 'required|boolean',
       ]);
       

       RekomendasiOPD::create([
           'id_kajian' => $request->id_kajian,
           'opd_id' => $request->opd_id,
           'rekomendasi' =>$request->rekomendasi,
           'tindak_lanjut' => $request->tindak_lanjut,
           'status' => $request->status,
           'readed' => $request->readed
       ]);
       return redirect()->route('rekomendasiopds.index')->with('success', 'Rekomendasi OPD entry created successfully.');
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
        $rekomendasiopds = RekomendasiOPD::find($id);
    return view('rekomendasiopds.edit', compact('rekomendasiopds'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_kajian' => 'required|string',
            'opd_id' => 'required|string',
            'rekomendasi' => 'required|string',
            'tindak_lanjut' => 'required|string',
            'status' => 'required|boolean',
            'readed' => 'required|boolean',
        ]);
    
        $rekomendasiopd = RekomendasiOPD::find($id);
        $rekomendasiopd->id_kajian = $request->id_kajian;
        $rekomendasiopd->opd_id = $request->opd_id;
        $rekomendasiopd->rekomendasi =$request->rekomendasi;
        $rekomendasiopd->tindak_lanjut = $request->tindak_lanjut;
        $rekomendasiopd->status =  $request->status;
        $rekomendasiopd->readed = $request->readed;

        
        
        $rekomendasiopd->save();
    
        return redirect()->route('rekomendasiopds.index')->with('success', 'Rekomendasi OPD updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        RekomendasiOPD::find($id)->delete();
    return redirect()->route('rekomendasiopds.index')->with('success', 'Rekomendasi OPD deleted successfully');
    }
}
