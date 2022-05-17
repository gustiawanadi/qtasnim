@extends('dashboard.main.index')

@section('title','Tambah Barang')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control select2bs4 @error('nama_barang') is-invalid @enderror"
                            id="nama_barang" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang" required>
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
                        <label>Jenis Barang</label>
                        <select class="form-control select2bs4 @error('category_id') is-invalid @enderror" style="width: 100%;" name="category_id" required>
                            <option selected="selected">Pilih</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}"{{ old('category_id') == $category['id'] ? 'selected' : '' }}>{{ $category['jenis_barang'] }}</option>
                            @endforeach
                        </select>
                        <!-- error message untuk jenis barang -->
                        @error('category_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control select2bs4 @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}" placeholder="Masukkan Total Stok" required>
                        <!-- error message untuk stok -->
                        @error('stok')
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
