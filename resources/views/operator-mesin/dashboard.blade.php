@extends('layouts/operator-mesin/main')
@section('title', 'Dashboard')
@section('extra-css')
    
@endsection
    <link rel="stylesheet" href="{{ asset('/assets/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/operator-mesin.css') }}">
@section('content')
<!-- Content -->
<div class="content">

    <div class="page-header">
        <h4>Dashboard</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title mb-2">Laporan Pencatatan Produksi</h6>
                    </div>
                    <div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5>Sudah Selesai</h5>
                                    <div>Jumlah transaksi yang telah selesai dilakukan pencatatan hasil produksi</div>
                                </div>
                                <h1 class="text-primary mb-0">1</h1>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <div>
                                    <h5>Belum Selesai</h5>
                                    <div>Jumlah transaksi yang belum dilakukan pencatatan hasil produksi</div>
                                </div>
                                <h1 class="text-dark mb-0">9</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="judul-tabel mt-4 ml-4">
                    <h5>Stock Bahan Baku</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Plastik Bekas</th>
                                <th scope="col">Plastik Virgin</th>
                                <th scope="col">Pewarna</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>265</td>
                                    <td>80</td>
                                    <td>30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="judul-tabel mt-4 ml-4">
                    <h5>Rekap Daftar Operator Mesin Yang Belum Di Lakukan Pencatatan Produksi</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">ID PENGAMBILAN BAHAN BAKU</th>
                                <th scope="col">WAKTU PENGAMBILAN BAHAN BAKU</th>
                                <th scope="col">OPERATOR MESIN</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>WAKTU</td>
                                    <td>NAMA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./ Content -->
@endsection

@section('extra-script')
    <script src="{{ asset('/assets/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/gogi/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('/assets/js/operator-mesin-dashboard.js') }}"></script>
@endsection