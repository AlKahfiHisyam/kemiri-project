@extends('layouts/admin-gudang/main')
@section('title', 'Dashboard')
@section('extra-css')
    <link rel="stylesheet" href="{{ asset('/assets/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/gogi/vendors/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/admin-gudang.css') }}">
@endsection

@section('content')
<!-- Content -->
<div class="content ">

    <div class="page-header">
        <h4>Dashboard</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="judul-tabel mt-3 ml-4">
                    <h5>Supplier Penerimaan Bahan Baku</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Supplier</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tgl</td>
                                    <td>Nama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="judul-tabel mt-3 ml-4">
                    <h5>Order Barang Yang Masih Di Proses</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Customer</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tgl</td>
                                    <td>Nama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="judul-tabel mt-3 ml-4">
                    <h5>Pengiriman Barang Yang Masih Pending</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Customer</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tgl</td>
                                    <td>Nama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="judul-tabel mt-3 ml-4">
                    <h5>Daftar Supplier</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Nama Supplier</th>
                                <th scope="col">Alamat</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>Alamat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="judul-tabel mt-3 ml-4">
                    <h5>Daftar Customer</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customer-table" class="table table-bordered table-responsive-stack">
                            <thead class="thead-dark">
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Alamat</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>Alamat</td>
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
    <script src="{{ asset('/assets/js/admin-gudang-dashboard.js') }}"></script>
@endsection