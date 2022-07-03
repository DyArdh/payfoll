@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Rincian Gaji Karyawan</strong>
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
                            <th>Tanggal</th>
                            <th>Gaji Pokok</th>                            
                            <th>Gaji Lembur</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            @forelse ($salary as $key => $row)
                            <tr>
                                <td>{{ $salary->firstItem() + $key }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ date('F Y', strtotime($row->created_at)) }}</td>
                                <td>{{ $row->salary }}</td>
                                <td>{{ $row->overtime_salary }}</td>
                                <td>
                                    <div class="action-btn d-flex">
                                        <a class="me-2" href="{{ route('karyawan-salary.edit', $row->id) }}">
                                            <button class="badge rounded-pill bg-warning px-3">Edit</button>
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
                            {{ $salary->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection