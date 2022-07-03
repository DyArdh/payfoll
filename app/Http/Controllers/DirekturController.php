<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DirekturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $karyawan = User::where('position_id', '3')->orderBy('name', 'asc')->paginate(10);
        return view('direktur.list-karyawan', compact('karyawan'));
    }
    
    public function personalia ()
    {
        $personalia = User::where('position_id', '2')->orderBy('name', 'asc')->paginate(10);
        return view('direktur.list-personalia', compact('personalia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('direktur.create-karyawan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPers()
    {
        return view('direktur.create-personalia');
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
            'name' => 'required|max:100',
            'place_of_birth' => 'required|max:100',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|digits_between:10,13|unique:users',
            'email' => 'required|unique:users|email:dns|max:100',
            'password' => 'required|min:8|max:255',
        ]);

        $validations['position_id'] = '3';
        $validations['password'] = bcrypt($validations['password']);

        User::create($validations);
        return redirect()->route('list-karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePers(Request $request)
    {
        $validations = $request->validate([
            'name' => 'required|max:100',
            'place_of_birth' => 'required|max:100',
            'date_of_birth' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|digits_between:10,13|unique:users',
            'email' => 'required|unique:users|email:dns|max:100',
            'password' => 'required|min:8|max:255',
        ]);

        $validations['position_id'] = '2';
        $validations['password'] = bcrypt($validations['password']);

        User::create($validations);
        return redirect()->route('list-personalia')->with('success', 'Personalia berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = User::findOrFail($id);

        $karyawan->delete();
        return redirect()->route('list-karyawan.index')->with('success', 'Karyawan Berhasil Dihapus!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPers($id)
    {
        $personalia = User::findOrFail($id);

        $personalia->delete();
        return redirect()->route('list-personalia')->with('success', 'Personalia Berhasil Dihapus!');
    }
}
