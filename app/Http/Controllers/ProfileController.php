<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::where('id', $id)->first();
        // var_dump($profile);
        return view('profile.editProfile', compact ('profile'));
    }

    public function ubah_pass($id)
    {
        $profile = User::where('id', $id)->first();
        // var_dump($profile);
        return view('profile.ubahPass', compact ('profile'));
    }

    public function update_pass (Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }
        User::whereId(Auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile berhasil diperbarui!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $attr = $request->validate([
            'name' => ['string', 'min:3', 'max:20', 'required'],
            'email' => ['string', 'email', 'min:3', 'max:20', 'required'],
            'agama' => ['string', 'min:3', 'max:20', 'required'],
            'tempat_lahir' => ['string', 'min:3', 'max:20', 'required'],
            'tanggal_lahir' => ['date', 'required'],
            'telepon' => ['string', 'numeric', 'required'],
            'alamat' => ['string', 'max:200', 'required'],
        ]);

        auth()->user()->update($attr);
        return redirect()->route('profile.index')->with('success', 'Profile berhasil diperbarui!');
    }
}
