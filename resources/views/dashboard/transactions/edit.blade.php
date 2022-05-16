@extends('dashboard.main.index')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Edit Data Barang</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control select2bs4 @error('nama_barang') is-invalid @enderror"
                            id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $transaction->nama_barang) }}"
                            placeholder="Masukkan Nama Barang" required>
                        <!-- error message untuk nama barang -->
                        @error('nama_barang')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tanggal Transaksi</label>
                        <input type="date" class="form-control select2bs4 @error('tgl_transaksi') is-invalid @enderror"
                            id="tgl_transaksi" name="tgl_transaksi" value="{{ old('tgl_transaksi', $transaction->tgl_transaksi) }}" placeholder="Masukkan Tanggal Transaksi" required>
                        <!-- error message untuk tanggal transaksi -->
                        @error('tgl_transaksi')
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
                            <option selected="{{ old('jenis_barang', $transaction->jenis_barang) }}">{{ old('jenis_barang', $transaction->jenis_barang) }}</option>
                            <option>Konsumsi</option>
                            <option>Pembersih</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control select2bs4" id="stok" name="stok"
                            value="{{ old('stok', $transaction->stok) }}" placeholder="Masukkan Total Stok">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jumlah Terjual</label>
                        <input type="number" class="form-control select2bs4" id="jumlah_terjual" name="jumlah_terjual" value="{{ old('jumlah_terjual', $transaction->jumlah_terjual) }}"
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
