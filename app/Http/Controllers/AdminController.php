<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
{
    $admins = Admin::all();
    return view('admins.index', compact('admins'));
}
public function edit($id)
{
    $admin = Admin::find($id);
    return view('admins.edit', compact('admin'));
}
public function create()
{
    return view('admins.create');
}
public function store(Request $request)
{
    $request->validate([
        'nik' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'sektor' => 'required|string|max:255'
    ]);

    Admin::create([
        'nik' => $request->nik,
        'nama' => $request->nama,
        'sektor' => $request->sektor
    ]);

    return redirect()->route('admins.index')->with('success', 'Admin added successfully');
}

public function destroy($id)
{
    Admin::find($id)->delete();
    return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
}
public function update(Request $request, $id)
{
    $request->validate([
        'nik' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'sektor' => 'required|string|max:255'
    ]);

    $admin = Admin::find($id);
    $admin->nik = $request->nik;
    $admin->nama = $request->nama;
    $admin->sektor = $request->sektor;
    $admin->save();

    return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
}

}
