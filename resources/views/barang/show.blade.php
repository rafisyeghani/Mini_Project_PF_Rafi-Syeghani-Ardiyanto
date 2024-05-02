@extends('layout.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-7 shadow ">
                <div class="card">
                    <h5 class="card-header">{{ $pageTitle }}</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="kode_barang" class="form-label">Kode Barang</label>
                                <h5>{{ $barang->kode_barang }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="nama_barang" class="form-label">Nama Barang</label>
                                <h5>{{ $barang->nama_barang }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="harga_barang" class="form-label">Harga Barang</label>
                                <h5>{{ $barang->harga_barang }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                                <h5>{{ $barang->deskripsi_barang }}</h5>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="satuan_id" class="form-label">Satuan</label>
                                <h5>{{ $barang->satuan->nama_satuan}}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i
                                        class="bi-arrow-left-circle me-2"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
