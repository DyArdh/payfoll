@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Edit Gaji Karyawan</strong>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('karyawan-salary.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-2 px-3">
                            <label class="form-label col-md-3">Nama</label>
                            <p class="col-md-9">{{ $salary->name_id }}</p>
                            <input type="hidden" name="name_id" id="name_id" value="{{ $salary->name_id }}">
                        </div>
                        <div class="form-group row mb-2 px-3">
                            <label class="form-label col-md-3">Gaji Pokok</label>
                            <input type="text" class="form-control" name="salary" id="salary" value="{{ $salary->salary }}">
                        </div>
                        <div class="form-group row mb-2 px-3">
                            <label class="form-label col-md-3">Gaji Lembur</label>
                            <input type="text" class="form-control" name="overtime_salary" id="overtime_salary" value="{{ $salary->overtime_salary }}">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection