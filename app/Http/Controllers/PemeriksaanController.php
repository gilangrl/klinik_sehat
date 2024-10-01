<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan user ter-autentikasi
    }
}
