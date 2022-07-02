@extends('layouts.main-layout')

@section('content')


<link rel="stylesheet" href="{{ URL::asset ('css/profile.css') }}"> 

<div class="container bg-white py-4">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3 " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row d-flex justify-content-center">

        <div class="col-md-4 border-right ">

            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    
                    <h4 class="text-right fw-bold">Profile Saya</h4>
                </div>
                <div class="row mt-3 for">
                    <div class="col-md-12"><label class="labels">Nama</label><input id="name" type="text" class="form-control bg-white mb-2 " value="{{ Auth::user()->name}}" readonly></div>
                    
                    <div class="col-md-12"><label class="labels">Agama</label><input id="agama" type="text" class="form-control bg-white mb-2 "  value="{{ Auth::user()->religion}}" readonly></div>
                    <div class="col-md-12"><label class="labels">Tempat Lahir</label><input id="tampat_lahir" type="text" class="form-control bg-white mb-2 " value="{{ Auth::user()->place_of_birth}}" readonly></div>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input id="tanggal_lahir" type="date" class="form-control bg-white mb-2 " value="{{ Auth::user()->date_of_birth   }}" readonly></div>
                    <div class="col-md-12"><label class="labels">Posisi</label><input id="telepon" type="posisi" class="form-control bg-white mb-2 "  value="{{ Auth::user()->position->position}}" readonly></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><textarea id="alamat" type="alamat" class="form-control bg-white mb-2 " readonly>{{ Auth::user()->address}} </textarea></div>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience fw-bold" ><span>Kontak</span></div>
                
                <div class="col-md-12 mt-1"><label class="labels mt-4">Email</label><input id="role"  type="email" class="form-control bg-white"  value="{{ Auth::user()->email}}" readonly></div>
                <div class="col-md-12 mt-1"><label class="labels mt-1 ">Telepon</label><input id="role"  type="telepon" class="form-control bg-white "  value="{{ Auth::user()->phone}}" readonly></div>
                
                <div class="mt-4 text-right">
                    <a class="btn btn-outline-dock  profile-button mt-2" href="{{ route ('profile.edit', Auth::user()->id) }}">Edit Profile</a>
                    <a class="btn btn-outline-dock  profile-button mt-2 ms-2" href="{{ route ('profile.ubah', Auth::user()->id) }}">Ubah Password</a>
                </div>
            </div>

        </div>
    </div>
</div>
	<!-- </section> -->
@endsection