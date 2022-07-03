<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->position_id;

        if ($role == '1') {
            return redirect()->route('list-personalia');
        }
        else if ($role == '2') {
            return redirect()->route('list-karyawan.index');
        }
        else if ($role == '3') {
            return redirect()->route('attendance.index');
        }
        else {
            return view('auth.login');
        }
        
    }

}
