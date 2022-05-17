@extends('dashboard.main.index')

@section('title','Edit Barang')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Edit Data Barang</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control select2bs4 @error('nama_barang') is-invalid @enderror"
                            id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $item->nama_barang) }}"
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
                        <label>Jenis Barang</label>
                        <select class="form-control select2bs4" style="width: 100%;" name="category_id">
                            <option selected value="{{ old('category_id', $item['category_id']) }}">{{ old('category_id', $item->category['jenis_barang']) }}</option>
                            {{-- <option selected="{{ old('category_id', $item['category_id']) }}">{{ old('category_id', $item['category_id']) }}</option> --}}
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['jenis_barang'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="number" class="form-control select2bs4" id="stok" name="stok"
                            value="{{ old('stok', $item->stok) }}" placeholder="Masukkan Total Stok">
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
