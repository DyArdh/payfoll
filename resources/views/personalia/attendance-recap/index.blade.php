@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Rincian Absensi</strong>
    </div>
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
                                <th>Jenis Absensi</th>
                            </thead>

                             <tbody>
                                @forelse ($attendance as $key => $row)
                                <tr>
                                    <td>{{ $attendance->firstItem() + $key }}</td>
                                    <td>{{ $row->user->name }}</td>
                                    <td>{{ date('F Y', strtotime($row->created_at)) }}</td>
                                    <td>{{ $row->time }}</td>
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
                            {{ $attendance->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection