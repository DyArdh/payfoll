@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Data Karyawan</strong>
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
                            @can('viewAsPersonalia', \App\Models\User::class)
                            <th>Action</th>
                            @endcan
                        </thead>

                        <tbody>
                            @forelse ($karyawan as $key => $row)
                            <tr>
                                <td>{{ $karyawan->firstItem() + $key }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ date('d F Y', strtotime($row->date_of_birth)) }}</td>
                                <td>{{ $row->religion }}</td>
                                <td>0{{ $row->phone }}</td>
                                <td>{{ $row->address }}</td>
                                @can('viewAsPersonalia', \App\Models\User::class)
                                <td>
                                    <div class="action-btn d-flex">
                                        <a class="me-2" href="{{ route ('salary.add', $row->id) }}">
                                            <button class="badge rounded-pill bg-primary px-3">Gaji+</button>
                                        </a>
                                        <form action="{{ route('list-karyawan.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="badge rounded-pill bg-danger px-3">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                                @endcan
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
                            {{ $karyawan->links() }}
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('list-karyawan.create') }}">
                                <button class="btn btn-primary">Tambah Karyawan</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection