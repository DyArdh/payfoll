@extends('layouts.main-layout')

@section('content')

<link rel="stylesheet" href="{{ URL::asset ('css/profile.css') }}"> 

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mt-5">
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
			      			<h3 class="mb-4 text-center mt-4 fw-bold">Pembaruan Password</h3>

							<form method="POST" action="{{ route ('profile.update.pass', $profile->id) }}" class="signin-form">
                            @method('POST')
                            @csrf

			      		<div class="form-group mb-3">
			      			<label class="label" for="old_password">Old Password</label>
			      			<input id="old_password" name="old_password" type="password" class="form-control  @error('old_password') is-invalid @enderror" value="{{ old('old_password') }}" placeholder="Old Pasword" autofocus required>
                              @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="new_password">New Password</label>
			      			<input id="new_password" name="new_password" type="password" class="form-control  @error('new_password') is-invalid @enderror" value="{{ old('new_password') }}" placeholder="New Pasword" autofocus required>
                              @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
			      		</div>

			      		<div class="form-group mb-3">
			      			<label class="label" for="confirm_password">New Password</label>
			      			<input id="confirm_password" name="confirm_password" type="password" class="form-control  @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}" placeholder="New Pasword" autofocus required>
                              @error('confirm_password')
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