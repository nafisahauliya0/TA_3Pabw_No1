<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{

    public function create()
    {
        return view('lapor.create');
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi' => $request->input('tinggi'),
        ];

        return view('lapor.confirm', compact('data'));
    }

  
    public function index()
    {
        
        $laporanList = [];

        return view('lapor.index', compact('laporanList'));
    }}