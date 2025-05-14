<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Tampilkan semua item
    public function index()
    {
        $items = \App\Models\Item::all();

        // Ambil nama item dan stock
        $labels = $items->pluck('nama_item');
        $stocks = $items->pluck('stock');

        return view('item.index', compact('items', 'labels', 'stocks'));
    }


    // Tampilkan form tambah item
    public function create()
    {
        return view('item.create');
    }

    // Simpan item baru
    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|integer|unique:tbl_item,item_id',
            'nama_item' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'stock' => 'required|integer',
            'unit' => 'required|string|max:100',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan.');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    // Update item
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'stock' => 'required|integer',
            'unit' => 'required|string|max:100',
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item berhasil diperbarui.');
    }

    // Hapus item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item berhasil dihapus.');
    }
}
