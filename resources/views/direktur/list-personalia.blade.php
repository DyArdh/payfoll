@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Data Personalia</strong>
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
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background-color:#343957" class="text-white">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>                            
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @forelse ($personalia as $key => $row)
                            <tr>
                                <td>{{ $personalia->firstItem() + $key }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ date('d F Y', strtotime($row->date_of_birth)) }}</td>
                                <td>{{ $row->religion }}</td>
                                <td>0{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                                <td>
                                    <div class="action-btn">
                                        <a class="me-2" href="">
                                            <span class="badge rounded-pill bg-primary px-3">Gaji+</span>
                                        </a>
                                        <a href="">
                                            <span class="badge rounded-pill bg-danger px-3">Hapus</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>              
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Record Found</td>
                            </tr>  
                            @endforelse
                        </tbody>     
                    </table> 
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            {{ $personalia->links() }}
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('list-personalia.create') }}" class="btn btn-primary">Tambah Personalia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection