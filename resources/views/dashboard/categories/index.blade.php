@extends('dashboard.main.index')

@section('title','Daftar Kategori')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Kategori</h3>
    </div>

    <div class="card-body">

        @if ($message = Session::get('success'))
            <div class="card card-default bg-success">
                <div class="card-header">
                    <h3 class="card-title text-white">{{ $message }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
        <div class="position-absolute" style="z-index: 2">
            <a class="btn btn-primary btn-sm" href="{{ route('categories.create') }}">
                <i class="fas fa-plus m-1"></i>
                Tambah Data
            </a>

        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category['jenis_barang'] }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('categories.destroy', $category->id) }}"
                            method="POST">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt m-1">
                            </i>EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger ml-2"><i class="fas fa-trash m-1"></i>HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
