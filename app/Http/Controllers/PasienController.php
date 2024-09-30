<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        return view('app.data_pasien');
    }

    public function create()
    {
        return view('app.datapasien_add');
    }
}
