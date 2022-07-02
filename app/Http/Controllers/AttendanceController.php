<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggal = NOW();
        return view('karyawan.attendance.index', compact('tanggal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = $request->validate([
            'name_id' => 'required|numeric',
            'time' => 'required',
        ]);

        Attendance::create($validations);
        return redirect()->route('attendance.index')->with('success', 'Absensi Berhasil Disimpan. Sekarang Balik Kerja!');
    }
}
