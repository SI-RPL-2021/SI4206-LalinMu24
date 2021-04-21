@extends('layouts.polantas')

@section('content')
<div class="row mb-5">
    <div class="col-md-12">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th class="bg-primary text-white">Id</th>
                    <td class>P-{{$perempatan->id}}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Nama</th>
                    <td>Perempatan {{$perempatan->nama}}</td>
                </tr>
                <tr>
                    <th class="bg-primary text-white">Alamat</th>
                    <td>{{$perempatan->alamat}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">

    <!--  Map Component -->
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header bg-primary">
                <h6 class="m-0 font-weight-bold text-light">Denah {{$perempatan->nama}}</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$perempatan->src}}" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map Component -->

    <div class="col-lg-4">

        <!-- Live Video Component -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <div href="#collapseCardExample" class="d-block card-header bg-danger" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-light">Live Video Traffic</h6>
                    </div>
                    <!-- Card Content - Collapse -->
                    <div class="collapse show" id="collapseCardExample">
                        <div class="card-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="{{$perempatan->youtube}}" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Live Video Component -->

        <!-- Traffic Light Component -->
        <div class="row">
            @foreach($perempatan -> lengans as $lengan)
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Accordion -->
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Traffic Light Lengan {{$lengan-> lengan}}</h6>
                    </div>
                    <!-- Card Content - Collapse -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div id="isiqfor{{$lengan->lengan}}">
                                    <div class="red"></div>
                                    <div class="yellow"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row mt-2">
                                    <div class="col-md-3">
                                        <h5><i class="fas fa-circle text-danger"></i> </h5>
                                        <h5><i class="fas fa-circle text-warning"></i> </h5>
                                        <h5><i class="fas fa-circle text-success"></i> </h5>
                                    </div>
                                    <div class="col-md-9">
                                        <h5>: {{$lengan->merah}}s</h5>
                                        <h5>: {{$lengan->kuning}}s</h5>
                                        <h5>: {{$lengan->hijau}}s</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <h1 style="font-family: 'Press Start 2P', cursive;" id="number{{$lengan->lengan}}"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach()
        </div>
    </div>
</div>
@push('js')
    
@include('layouts.script_traffic_light')
@endpush

@endsection()