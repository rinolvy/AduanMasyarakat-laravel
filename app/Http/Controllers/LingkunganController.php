<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LingkunganController extends Controller
{
    public function index()
    {
        $lingkungan = DB::table('reports')->get();
        return view('lingkungan.index', ['lingkungan' => $lingkungan]);
    }
}
