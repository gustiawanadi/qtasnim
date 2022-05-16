@extends('dashboard.main.index')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
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
            <a class="btn btn-primary btn-sm" href="{{ route('items.create') }}">
                <i class="fas fa-folder"></i>
                Tambah Daftar Barang
            </a>

        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>  
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nama_barang'] }}</td>
                    <td>{{ $item->category['jenis_barang'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('items.destroy', $item->id) }}"
                            method="POST">
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt">
                            </i>EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>HAPUS</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
