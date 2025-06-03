<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{

    public function index()
    {
        $dokters = Dokter::all();
        return view("dokter.index", compact("dokters"));
    }

    public function create()
    {
        return view("dokter.create");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "nama" => "required|string|min:3|max:255",
            "spesialis" => "nullable|string|max:255",
            "telepon" => "nullable|string|max:20",
            "email" => "nullable|email|max:255",
            "alamat" => "nullable|string",
        ]);
        Dokter::create($data);

        return redirect()->route("dokter.index");
    }

    public function edit(string $id)
    {
        $dokter = Dokter::find($id);

        return view("dokter.edit", compact("dokter"));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            "nama" => "required|string|min:3|max:255",
            "spesialis" => "nullable|string|max:255",
            "telepon" => "nullable|string|max:20",
            "email" => "nullable|email|max:255",
            "alamat" => "nullable|string",
        ]);

        $dokter = Dokter::find($id);

        $dokter->update($data);
        return redirect(route("dokter.index"));
    }

    public function destroy(string $id)
{
    $dokter = Dokter::find($id);

    if (!$dokter) {
        return redirect()->route("dokter.index")->with("error", "Data dokter tidak ditemukan.");
    }

    $dokter->delete();

    return redirect()->route("dokter.index")->with("success", "Data dokter berhasil dihapus.");
}

}
