@extends('layouts.main-layout')

@section('content')

<link rel="stylesheet" href="{{ URL::asset ('css/profile.css') }}"> 

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">

						<div class="login-wrap mx-auto p-4 p-md-6">
			      	<div class="d-flex">
			      		<div class="w-100">
                              <!-- <br> -->
			      			<h3 class="mb-4 text-center mt-4 fw-bold">Pembaruan Profile</h3>

							<form method="POST" action="{{ route ('profile.update', $profile->id) }}" class="signin-form">
                            @method('PUT')
                            @csrf

			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input id="name" name="name" type="text" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name', $profile->name) }}" placeholder="Nama" autofocus required>
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $profile->email) }}" placeholder="Email" required autocomplete="email">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="agama">Agama</label>
			      			<select class="form-select " name="agama" id="agama">
                                <option selected value="{{ $profile->religion }}">{{ $profile->religion }}</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Kristen">Kristen</option>
                            </select>
                            
                            <!-- <input id="agama" type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama', $profile->religion) }}" placeholder="Agama" required autocomplete="agama"> -->
			      		</div>
                          
                    <div class="form-group mb-3">
			      			<label class="label" for="tempat_lahir">Tempat Lahir</label>
			      			<input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $profile->place_of_birth) }}" required autocomplete="tempat_lahir">
                              @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

                    <div class="form-group mb-3">
			      			<label class="label" for="tanggal_lahir">Tanggal Lahir</label>
			      			<input id="tanggal_lahir" name="tanggal_lahir" type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir', $profile->date_of_birth) }}" placeholder="Tanggal Lahir" autofocus required>
                              @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>


                    <div class="form-group mb-3">
			      			<label class="label" for="telepon">Telepon</label>
			      			<input id="telepon" name="telepon" type="text" class="form-control  @error('telepon') is-invalid @enderror" value="{{ old('telepon', $profile->phone) }}" placeholder="No Telepon" autofocus required>
                              @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>
               


                          <div class="form-group mb-3">
			      			<label class="label" for="alamat">Alamat</label>
			      			<textarea id="alamat" name="alamat" type="text" class="form-control  @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Alamat" autofocus required>{{ $profile->address }}</textarea>
                              @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

                          

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3 mt-3 fw-bold">Simpan</button>
		            </div>
<br>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

    @endsection