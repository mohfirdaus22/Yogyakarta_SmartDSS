<?php 
namespace App\Http\Controllers;

use App\Models\Kajian;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index()
    {
        $data = Kajian::all();
        return view('kajians.index', compact('data'));
    }

    public function create()
    {
        return view('kajians.create');
    }

    public function store(Request $request)
    {
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
        }

        Kajian::create([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'lokasi' => $request->lokasi,
            'sektoral' => $request->sektoral,
            'latar' => $request->latar,
            'metodologi' => $request->metodologi,
            'pelaksana' => $request->pelaksana,
            'data' => $request->data,
            'unit_id' => $request->unit_id,
            'file' => $filePath,
        ]);

        return redirect()->route('kajians.index')->with('success', 'Data Kajian berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $kajians = Kajian::find($id);
        return view('kajians.edit', compact('kajians'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'tahun' => 'required|integer',
            'latar' => 'required|string',
            'lokasi' => 'required|string',
            'sektoral' => 'required|string',
            'metodologi' => 'required|string',
            'pelaksana' => 'required|string',
            'data' => 'required|string',
            'unit_id' => 'required|integer',
        ]);

        $kajian = Kajian::find($id);

        $filePath = $kajian->file;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
        }

        $kajian->update([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'lokasi' => $request->lokasi,
            'sektoral' => $request->sektoral,
            'latar' => $request->latar,
            'metodologi' => $request->metodologi,
            'pelaksana' => $request->pelaksana,
            'data' => $request->data,
            'unit_id' => $request->unit_id,
            'file' => $filePath,
        ]);

        return redirect()->route('kajians.index')->with('success', 'Kajian updated successfully');
    }

    public function destroy(string $id)
    {
        Kajian::find($id)->delete();
        return redirect()->route('kajians.index')->with('success', 'Kajian deleted successfully');
    }
}
