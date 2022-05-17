@extends('dashboard.main.index')

@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-lg-4 col-12">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $items->count() }}</h3>
                <p>Barang</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{ url('dashboard/items') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $categories->count() }}</h3>
                <p>Kategori</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ url('dashboard/categories') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-12">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $transactions->count() }}</h3>
                <p>Transaksi</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('dashboard/transactions') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
@endsection