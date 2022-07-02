@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center fw-bold">Payfoll</h4>
                    <hr>
                    <p><strong>Identitas :</strong></p>
                    <div class="row mb-2">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-8">{{ $data->user->name }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">Jabatan</div>
                        <div class="col-md-8">{{ $data->user->position->position }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">Tanggal</div>
                        <div class="col-md-8">{{ date('F Y', strtotime($data->created_at)) }}</div>
                    </div>
                    <p><strong>Penghasilan :</strong></p>
                    <div class="row mb-2">
                        <div class="col-md-4">Gaji Pokok</div>
                        <div class="col-md-8">Rp {{ number_format($data->salary) }} ,-</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">Gaji Lembur</div>
                        <div class="col-md-8">Rp {{ number_format($data->overtime_salary) }} ,-</div>
                    </div>
                    <hr>
                    <div class="row mb-3 fw-bold">
                        <div class="col-md-4">Total</div>
                        <div class="col-md-8">Rp {{ number_format($total) }} ,-</div>
                    </div>
                </div>
                <div class="card-footer bg-white py-3">
                    <div class="d-grid gap-2">
                        <a class="btn btn-primary" href="{{ route('salary.print', $data->id) }}">Print</a>
                        <a class="btn btn-outline-secondary" href="{{ route('salary.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection