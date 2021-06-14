@extends('layouts.admin')

@section('content')
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Perempatan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-road fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Polantas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$polantas}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-secret fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Perempatan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Src Map</th>
                                    <th>Youtube</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perempatan as $value => $p)
                                <tr>
                                    <td class="text-center">{{$value+1}}</td>
                                    <td>{{$p->nama}}</td>
                                    <td>{{$p->alamat}}</td>
                                    <td>{{$p->src}}</td>
                                    <td>{{$p->youtube}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection