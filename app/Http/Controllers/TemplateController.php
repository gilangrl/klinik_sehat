<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan user ter-autentikasi
    }
    
    public function index()
    {
        return view('template.index');
    }
}
