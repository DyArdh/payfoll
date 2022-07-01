<?php

namespace App\Http\Controllers;

use App\Models\ListKaryawan;
use Illuminate\Http\Request;

class ListKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list-karyawan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListKaryawan  $listKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show(ListKaryawan $listKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListKaryawan  $listKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(ListKaryawan $listKaryawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListKaryawan  $listKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListKaryawan $listKaryawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListKaryawan  $listKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListKaryawan $listKaryawan)
    {
        //
    }
}
