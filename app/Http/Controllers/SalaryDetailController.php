<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SalaryDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salary = Salary::join('users', 'salary.name_id', '=', 'users.id')
            ->where('position_id', '3')
            ->paginate(10);
        return view('personalia.salary-recap.index', compact('salary'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $salary = Salary::findOrFail($id);

        return view('personalia.salary-recap.edit', compact('salary'));
    }
    
    public function personalia_index()
    {

        $salary = Salary::join('users', 'salary.name_id', '=', 'users.id')
        ->where('position_id', '2')
        ->paginate(10);
        
        return view('personalia.salary-recap.personalia-salary-recap', compact('salary'));
    }

    public function personalia_edit($id)
    {

        $salary = Salary::findOrFail($id);

        return view('personalia.salary-recap.edit-personalia', compact('salary'));
    }
    
    public function personalia_update(Request $request, $id)
    {
        $params = $request->except('_token');
        
        $salary = Salary::findOrFail($id);

        $save = false;
        $save = DB::transaction(function() use ($salary, $params){
            $salary->update($params);
            return true;
        });

        // var_dump($salary)

        return redirect()->route('personalia-salary')->with('success', 'Gaji berhasil diperbarui!');
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
        $params = $request->except('_token');
        
        $salary = Salary::findOrFail($id);

        $save = false;
        $save = DB::transaction(function() use ($salary, $params){
            $salary->update($params);
            return true;
        });

        return redirect()->route('karyawan-salary.index')->with('success', 'Gaji berhasil diperbarui!');
    }
}
