@extends('dashboard.main.index')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Barang</h3>
    </div>

    <div class="card-body">
        <div class="position-absolute" style="z-index: 2">
            <a class="btn btn-primary btn-sm" href="#">
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
                    <td>{{ $item['jenis_barang'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td><a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
