@extends('main.index')
@section('title','Tester')
@section('content')
<div class="col-md-12" style="margin-bottom: 20px">
    <div class="row">
        <div class="col-md-6">
            <span>Pilih dari tanggal</span>
            <div class="input-group">
                <input type="date" class="form-control pickdate date_range_filter" name="">
                <span class="input-group-addon" id="basic-addon2"><span
                        class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
        <div class="col-md-6">
            <span>Sampai tanggal</span>
            <div class="input-group">
                <input type="date" class="form-control pickdate date_range_filter2" name="">
                <span class="input-group-addon" id="basic-addon2"><span
                        class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Jumlah Terjual</th>
                <th>Tanggal Transaksi</th>
                <th>Jenis Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaction->item->nama_barang }}</td>
                <td>{{ $transaction->item->stok }}</td>
                <td>{{ $transaction['jumlah_terjual'] }}</td>
                <td>{{ $transaction['tgl_transaksi'] }}</td>
                <td>{{ $transaction->item->category->jenis_barang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
