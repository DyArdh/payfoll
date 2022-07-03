@extends('layouts.main-layout')

<?php 

if ($data->position_id == 2) {
    $title = "Personalia";
    $route = 'list-personalia';
}else if ($data->position_id == 3) {
    $title = "Karyawan";
    $route = 'list-karyawan.index';
}

?>

@section('content')
<div class="container">
    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Gaji {{$title}}</strong>
    </div>

    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route ('salary.add.input', $data->position_id)}}" method="POST">
                    @csrf
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name" readonly value="{{$data->name}}" required> 
                            </div>
                        </div>

                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="jabatan" id="jabatan" readonly value="{{ $data->position->position }}" required> 
                            </div>
                        </div>

                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Tanggal</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tanggal" id="tanggal" readonly value="{{ date('F Y', strtotime($tanggal)) }}" required> 
                            </div>
                        </div>



          
             
                        <input type="text" hidden class="form-control" name="name_id" id="name_id" readonly value="{{ $data->id }}" required> 
                        <input type="text" hidden class="form-control" name="position_id" id="position_id" readonly value="{{ $data->position_id }}" required> 
     

                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Gaji Pokok</label>
                            <div class="col-md-9">
                                <input type="number" min="0"  class="form-control" name="salary" id="salary" value="{{ old('gaji_pokok') }}" required> 
                            </div>
                        </div>

                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Gaji Lembur</label>
                            <div class="col-md-9">
                                <input type="number" min="0" class="form-control" name="overtime_salary" id="overtime_salary" value="{{ old('gaji_lembur') }}" required> 
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a  href="{{ route($route) }}" class="btn btn-outline-secondary">Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection