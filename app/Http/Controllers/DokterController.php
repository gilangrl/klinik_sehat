<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('app.data_dokter');
    }

    public function create()
    {
        return view('app.datadokter_add');
    }
}
