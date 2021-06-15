@extends('layouts.nav')

@section('content')
<div class="row mt-5">
    <div class="col-lg-6">
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
    <div class="col-lg-6">
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

@endsection