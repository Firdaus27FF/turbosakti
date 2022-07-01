@extends('admin.app')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
<div class="col-lg-3 col-6">
    <!-- small box -->
<div class="small-box bg-turbo mb-4">
    <div class="inner">
        <h5>Laba Bersih</h5>
        <p>45000000<sup style="font-size: 20px"></sup></p>
    </div>
    <div class="icon">
        <i class="ion ion-bag"></i>
    </div>
    <a href="{{ route('prediksipenjualan.index')}}" class="small-box-footer text-light">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-turbo">
    <div class="inner">
        <h5>Jumlah Pemasukan</h5>
        <p>40000000<sup style="font-size: 20px"></sup></p>
    </div>
    <div class="icon">
        <i class="ion ion-stats-bars"></i>
    </div>
    <a href="{{ route('catatkeuangan.index')}}" class="small-box-footer text-light">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-turbo">
    <div class="inner">
        <h5>Jumlah Pengeluaran</h5>
        <p>500000<sup style="font-size: 20px"></sup></p>
    </div>
    <div class="icon">
        <i class="ion ion-person-add"></i>
    </div>
    <a href="{{ route('catatkeuangan.index')}}" class="small-box-footer text-light">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-turbo">
    <div class="inner">
        <h5>User Pelanggan</h5>
        <p>4<sup style="font-size: 20px"></sup></p>
    </div>
    <div class="icon">
        <i class="ion ion-pie-graph"></i>
    </div>
    <a href="{{ route('pelanggan.index')}}" class="small-box-footer text-light">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div> 
    <div class="row">
    <div class="col-xl-6">
        <!-- <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Chart Perkembangan Penjualan
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Chart Keripik Penjualan
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div> -->
</div> 
</div>
@endsection