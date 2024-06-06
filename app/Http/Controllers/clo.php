<?php

namespace App\Http\Controllers;

use App\Models\lppm;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

class lppmController extends Controller
{
    public function index()
    {
        $lppms = Lppm::all();
        return view('lppms', compact('lppms'));
    }

    public function create()
    {
        return view('lppms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'namaKetua' => 'required|string',
            'perguruanTinggi' => 'required|string',
            'alamatPT' => 'required|string',
            'userjss' => 'required|string',
            'readed' => 'required|boolean',
        ]);

        Lppm::create($validatedData);
        return redirect()->route('lppms.index')->with('success', 'LPPM entry created successfully.');
    }

    public function show(Lppm $lppm)
    {
        return view('lppms.show', compact('lppm'));
    }

    public function edit(Lppm $lppm)
    {
        return view('lppms.edit', compact('lppm'));
    }

    public function update(Request $request, Lppm $lppm)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'namaKetua' => 'required|string',
            'perguruanTinggi' => 'required|string',
            'alamatPT' => 'required|string',
            'userjss' => 'required|string',
            'readed' => 'required|boolean',
        ]);

        $lppm->update($validatedData);
        return redirect()->route('lppms.index')->with('success', 'LPPM entry updated successfully.');
    }

    public function destroy(Lppm $lppm)
    {
        $lppm->delete();
        return redirect()->route('lppms.index')->with('success', 'LPPM entry deleted successfully.');
    }
}
