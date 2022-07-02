@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Absensi Karyawan</strong>
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
                    <form action="{{ route('attendance.store') }}" method="POST">
                        @csrf
                        <div class="form-group row mb-2 px-3">
                            <label class="form-label col-md-3">Nama</label>
                            <p class="col-md-9">{{ Auth::User()->name }}</p>
                            <input type="hidden" name="name_id" id="name_id" value="{{ Auth::User()->id }}">
                        </div>
                        <div class="form-group row mb-2 px-3">
                            <label class="form-label col-md-3">Waktu</label>
                            <p class="col-md-9">{{ date('d F Y   -   h:i A', strtotime($tanggal)) }}</p>
                        </div>
                        <div class="form-group row mb-4 px-3">
                            <label for="time" class="form-label col-md-3">Jenis Absen</label>
                            <div class="col-md-9">
                                <select name="time" id="time" class="form-select">
                                    <option value="Pagi">Pagi</option>
                                    <option value="Siang Keluar">Siang Keluar</option>
                                    <option value="Siang Masuk">Siang Masuk</option>
                                    <option value="Sore">Sore</option>
                                    <option value="Lembur Masuk">Lembur Masuk</option>
                                    <option value="Lembur Keluar">Lembur Keluar</option>
                                </select>
                            </div>
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