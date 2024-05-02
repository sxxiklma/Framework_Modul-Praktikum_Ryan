<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Items;
use App\Models\Satuan;

class BarangController extends Controller
{

    public function index()
    {
        $pageTitle = 'Daftar Items';
        // ELOQUENT
        $item = Barang::all();
        return view('items.index', [
            'pageTitle' => $pageTitle,
            'item' => $item
        ]);
    }
    public function create()
    {
        $pageTitle = 'Input Items';
        // ELOQUENT
        $satuans = Satuan::all();
        return view('items.create', compact('pageTitle', 'satuans'));
    }
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi.',
            'code' => 'Isi attribute dengan format yang benar',
            'numeric' => 'Isi attribute dengan angka',
        ];
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // ELOQUENT
        $Items = new Barang;
        $Items->code = $request->code;
        $Items->name = $request->name;
        $Items->harga = $request->harga;
        $Items->deskripsi = $request->deskripsi;
        $Items->satuan_id = $request->satuan;
        $Items->save();
        return redirect()->route('items.index');
    }
    public function show(string $id)
    {
        $pageTitle = 'Detail Items';

        // ELOQUENT
        $Items = Barang::find($id);
        return view('items.show', compact('pageTitle', 'Items'));
    }
    public function edit(string $id)
    {

        $pageTitle = 'Edit Items';
        // ELOQUENT
        $satuans = Satuan::all();
        $Items = Barang::find($id);
        return view('items.edit', compact(
            'pageTitle',
            'satuans',
            'Items'
        ));
    }
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi.',
            'code' => 'Isi attribute dengan format yang benar',
            'numeric' => 'Isi attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $Items = Barang::find($id);
        $Items->code = $request->code;
        $Items->name = $request->name;
        $Items->harga = $request->harga;
        $Items->deskripsi = $request->deskripsi;
        $Items->satuan_id = $request->satuan;
        $Items->save();
        return redirect()->route('items.index');

    }
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();
        return redirect()->route('items.index');
    }
}
