<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Report;

class LaporkanLingkungan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Report $report)
    {
        $report = Report::get();
        return view('laporkan.index', compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporkan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $messages = [
            'nik.min' => ':attribute harus minimal 16 karakter ya!',
            'nik.required' => ':attribute harus di isi ya!',
            'nik.unique' => ' yah :attribute ini sudah digunakan, coba yang lain ya!',
            'isilaporan.min' => ':attribute harus diisi minimal :min karakter ya!',
            'isilaporan.required' => ':attribute harus di isi nanti kita tidak tahu isi laporan anda!',
            'namalengkap.unique' => 'Maaf :attribute sudah tersedia, coba yang lain ya!',
        ];


        $laporan = request()->validate([
            'namalengkap' => 'required|unique:reports',
            'nik' => 'required|numeric|unique:reports|min:16',
            'isilaporan' => 'required|min:10|max:50',
        ], $messages);

        Report::create($laporan);

        return redirect('/resultreport')->with('status', 'Terima kasih laporan anda sudah kami terima, silahkan aktifasi idpengaduan ya');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hasil_laporan  $hasil_laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('laporkan.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hasil_laporan  $hasil_laporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('laporkan.edit');
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hasil_laporan  $hasil_laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hasil_laporan $hasil_laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hasil_laporan  $hasil_laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(hasil_laporan $hasil_laporan)
    {
        //
    }
}
