<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }
    public function create(Request $request)
    {
        \App\Pendaftaran::create($request->all());
        return redirect('/pendaftaran')->with('sukses', 'data berhasil disimpan');
    }
}
