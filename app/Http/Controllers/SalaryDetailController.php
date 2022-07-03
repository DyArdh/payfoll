<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use DB;
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
        
        $product = Salary::findOrFail($id);

        $save = false;
        $save = DB::transaction(function() use ($product, $params){
            $product->update($params);
            return true;
        });

        return redirect()->route('karyawan-salary.index')->with('success', 'Gaji berhasil diperbarui!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
