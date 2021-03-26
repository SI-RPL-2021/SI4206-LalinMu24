@extends('layouts.polantas')

@section('content')
<!-- Maps Bandung by Waze -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Denah Kota Bandung by Waze</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://embed.waze.com/iframe?zoom=14&lat=-6.921954&lon=107.603788&ct=livemap" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Maps Bandung Componen -->

<!-- Table Data Perempatan -->
<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4 mx-5">
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
                                <th>Merah</th>
                                <th>Kuning</th>
                                <th>Hijau</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perempatans as $value => $l)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>Perempatan {{$l->nama}}</td>
                                <td>{{$l->merah}}</td>
                                <td>{{$l->kuning}}</td>
                                <td>{{$l->hijau}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Table Data Perempatan Component -->

@endsection