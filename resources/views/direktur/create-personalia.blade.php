@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Tambah Personalia</strong>
    </div>
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('list-personalia.store') }}" method="POST">
                        @csrf
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name" required> 
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" required> 
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required> 
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Agama</label>
                            <div class="col-md-9">
                                <select class="form-select" name="religion" id="religion">
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Kristen">Kristen</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Alamat</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">No. Telp</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" id="phone" required> 
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" id="email" required> 
                            </div>
                        </div>
                        <div class="form-group row mb-3 px-3">
                            <label class="form-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" id="password" required> 
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a  href="{{ route('list-personalia') }}" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection