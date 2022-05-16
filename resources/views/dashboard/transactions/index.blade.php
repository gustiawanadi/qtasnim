@extends('dashboard.main.index')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Transaksi</h3>
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
            <a class="btn btn-primary btn-sm" href="{{ route('transactions.create') }}">
                <i class="fas fa-folder"></i>
                Tambah Daftar Transaksi
            </a>

        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Jumlah Terjual</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jenis Barang</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $transaction['nama_barang'] }}</td>
                    <td>{{ $transaction['stok'] }}</td>
                    <td>{{ $transaction['jumlah_terjual'] }}</td>
                    <td>{{ $transaction['tgl_transaksi'] }}</td>
                    <td>{{ $transaction['jenis_barang'] }}</td>
                    <td>
                        <form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('transactions.destroy', $transaction->id) }}"
                            method="POST">
                            <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt">
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
