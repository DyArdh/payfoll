<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User()->id;
        $data = Salary::where('name_id', $user)->orderBy('id', 'desc')->paginate(10);

        return view('karyawan.gaji.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print($salary)
    {
        $data = Salary::where('id', $salary)->first();
        $total = $data->salary + $data->overtime_salary;
        $nama = date('F Y', strtotime($data->created_at));

        $pdf = PDF::loadview('karyawan.gaji.print',['data'=>$data, 'total' => $total ]);
    	return $pdf->download($nama . '.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show($salary)
    {
        $data = Salary::where('id', $salary)->first();
        $total = $data->salary + $data->overtime_salary;

        return view('karyawan.gaji.show', compact('data', 'total'));
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
        return view('direktur.create-karyawan');
    }
}
