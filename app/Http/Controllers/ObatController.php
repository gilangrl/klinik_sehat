<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        return view('app.data_obat');
    }

    public function create() {
        return view('app.dataobat_add');
    }
}
