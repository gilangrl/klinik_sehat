<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan user ter-autentikasi
    }
}
