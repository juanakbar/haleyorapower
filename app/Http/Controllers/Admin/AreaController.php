<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return view('admin.area.index', [
            'areas' => \App\Models\Area::all(),
        ]);
    }

    public function create()
    {
        return view('admin.area.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_area' => 'required',
        ]);
        \App\Models\Area::create($request->all());
        return redirect()->route('area.index')->with('success', 'Area berhasil ditambahkan');
    }

    public function edit(\App\Models\Area $area)
    {
        return view('admin.area.edit', compact('area'));
    }

    public function update(Request $request, \App\Models\Area $area)
    {
        $request->validate([
            'nama_area' => 'required',
        ]);
        $area->update($request->all());
        return redirect()->route('area.index')->with('success', 'Area berhasil diubah');
    }

    public function destroy(\App\Models\Area $area)
    {
        $area->delete();
        return redirect()->route('area.index')->with('danger', 'Area berhasil dihapus');
    }
}
