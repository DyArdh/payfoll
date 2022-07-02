@extends('layouts.main-layout')

@section('content')
<div class="container">

    <div class="acc-header col-xl-3 col-md-6 py-2 mt-4 rounded-3 d-flex justify-content-center">
        <strong>Data Personalia</strong>
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
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>                            
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                            <?php $no = 1 ?>
                            @forelse ($personalia as $pr)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pr->name }}</td>
                                <td>{{ $pr->date_of_birth }}</td>
                                <td>{{ $pr->religion }}</td>
                                <td>{{ $pr->phone }}</td>
                                <td>{{ $pr->address }}</td>
                                <td>hapus</td>
                            </tr>              
                            @empty
                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>  
                            @endforelse
                        </tbody>     
                    </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection