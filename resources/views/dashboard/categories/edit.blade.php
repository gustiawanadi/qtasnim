@extends('dashboard.main.index')
@section('title','Edit Kategori')
@section('content')
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Edit Data Kategori</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control select2bs4 @error('jenis_barang') is-invalid @enderror"
                            id="jenis_barang" name="jenis_barang" value="{{ old('jenis_barang', $category->jenis_barang) }}"
                            placeholder="Masukkan Nama Kategori" required>
                        <!-- error message untuk nama kategori -->
                        @error('jenis_barang')
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
