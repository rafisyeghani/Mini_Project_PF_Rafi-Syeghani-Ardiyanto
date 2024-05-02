@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h2>{{ $pageTitle }}</h2>
        <br>
        <div class="card bg-light shadow" style="width: 103%;">
            <div class="card-header">
                <a href="{{ route('barangs.create') }}" class="btn btn-dark btn-sm"><i class=" bi-plus-circle"></i>
                    Tambah Barang</a>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Satuan Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->harga_barang }}</td>
                                    <td>{{ $barang->deskripsi_barang }}</td>
                                    <td>{{ $barang->satuan->nama_satuan }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-person-lines-fill"></i></a>
                                            <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}"
                                                class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-pencil-square"></i></a>

                                            <div>
                                                <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                            class="bi-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </blockquote>
            </div>
        </div>
    </div>
@endsection
