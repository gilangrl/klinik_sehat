<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        $data = kategori::all();
        return view('app.data_kategori', compact('data'));
    }

    public function create()
    {
        return view('app.datakategori_add');
    }

    public function store(Request $request)
    {
        $validates = Validator::make($request->all(), [
            'NamaKategori' => 'required',
        ]);

        if ($validates->fails()) {
            return response()->json([
                'status' => false,
                'data'  => $validates->errors()
            ], 404);
        }

        $kategori = [
            'NamaKategori' => $request->input('NamaKategori')
        ];

        $data = kategori::create($kategori);

        return redirect()->route('dashboard.kategori')->with('success', 'Data Berhasil Ditambahkan');
    }
}
