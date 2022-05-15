@extends('dashboard.main.index')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>
    </div>

    <div class="card-body">
        {{-- <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data"> --}}
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control select2bs4 @error('nama_barang') is-invalid @enderror"
                            id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" required>
                        <!-- error message untuk title -->
                        @error('nama_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="jenis_barang">
                            <option selected="selected">Pilih</option>
                            <option>Konsumsi</option>
                            <option>Pembersih</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control select2bs4" id="stok" name="stok"
                            placeholder="Masukkan Total Stok">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                </div>
            </div>
    </div>
</div>
@endsection
