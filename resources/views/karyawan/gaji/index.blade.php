@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Rincian Gaji</strong>
    </div>
    <div class="mt-3 row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background-color:#343957" class="text-white">
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Gaji</th>
                                <th>Gaji Lembur</th>
                                <th>Action</th>
                            </thead>

                             <tbody>
                                @forelse ($data as $key => $row)
                                <tr>
                                    <td>{{ $data->firstItem() + $key }}</td>
                                    <td>{{ date('F Y', strtotime($row->created_at)) }}</td>
                                    <td>{{ $row->salary }}</td>
                                    <td>{{ $row->overtime_salary }}</td>
                                    <td>
                                        <div class="action-btn">
                                            <a href="{{ route('salary.show', $row->id) }}">
                                                <span class="badge rounded-pill bg-info text-light fs-6 px-3 py-1">Info</span>
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
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection