@extends('dashboard.main.index')
@section('title','Tambah Transaksi')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Tambah Transaksi</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('transactions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control select2bs4 @error('item_id') is-invalid @enderror" style="width: 100%;" name="item_id">
                            <option selected="selected">Pilih</option>
                            @foreach ($items as $item)
                            <option value="{{ $item['id'] }}"{{ old('item_id') == $item['id'] ? 'selected' : '' }}>{{ $item['nama_barang'] }}</option>
                            <!-- error message untuk nama barang -->
                            @endforeach
                        </select>
                        @error('item_id')
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
                            id="tgl_transaksi" name="tgl_transaksi" value="{{ old('tgl_transaksi') }}" required>
                        <!-- error message untuk nama barang -->
                        @error('tgl_transaksi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Jumlah Terjual</label>
                        <input type="number" class="form-control select2bs4 @error('jumlah_terjual') is-invalid @enderror" id="jumlah_terjual" name="jumlah_terjual" value="{{ old('jumlah_terjual') }}"
                            placeholder="Masukkan Jumlah Terjual">
                            <!-- error message untuk jumlah terjual -->
                        @error('jumlah_terjual')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-check m-1"></i>SIMPAN</button>
                    <button type="reset" class="btn btn-sm btn-warning"><i class="fas fa-undo-alt m-1"></i>RESET</button>
                </div>
            </div>
    </div>
</div>
@endsection
