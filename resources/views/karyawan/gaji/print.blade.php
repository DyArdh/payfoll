<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Payfoll</title>

    <style>
        .tab {
            display: inline-block;
            margin-left: 150px;
        }

        .tab1 {
            display: inline-block;
            margin-left: 140px;
        }

        .tab2 {
            display: inline-block;
            margin-left: 135px;
        }

        .tab3 {
            display: inline-block;
            margin-left: 115px;
        }

        .tab4 {
            display: inline-block;
            margin-left: 105px;
        }

        .center {
            text-align: center;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="center">
                            <p>Payfoll</p>
                        </div>
                        <hr>
                        <p><strong>Identitas :</strong></p>
                        <div class="row mb-2" id="flex">
                            <div class="col-md-12">Nama<span class="tab"></span>{{ $data->user->name }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">Jabatan<span class="tab1"></span>{{ $data->user->position->position }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">Tanggal<span class="tab2"></span>{{ date('F Y', strtotime($data->created_at)) }}</div>
                        </div>
                        <p><strong>Penghasilan :</strong></p>
                        <div class="row mb-2">
                            <div class="col-md-12">Gaji Pokok<span class="tab3"></span>Rp {{ number_format($data->salary) }} ,-</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">Gaji Lembur<span class="tab4"></span>Rp {{ number_format($data->overtime_salary) }} ,-</div>
                        </div>
                        <hr>
                        <div class="row mb-3 fw-bold">
                            <div class="col-md-12">Total<span class="tab"></span>Rp {{ number_format($total) }} ,-</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>