<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesanKontak; // Pastikan Model ini ada

class KontakController extends Controller
{
    public function index()
    {
        // Mengambil data terbaru dan diurutkan
        $pesans = PesanKontak::latest()->get();
        return view('admin.kontak.index', compact('pesans'));
    }
}