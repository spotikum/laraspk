<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function create(Request $request)
    {
        Siswa::create($request->all());
        return back();
    }
}
