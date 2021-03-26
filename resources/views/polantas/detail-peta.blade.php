@extends('layouts.polantas')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header bg-primary">
                <h6 class="m-0 font-weight-bold text-light">Denah {{$perempatans->nama}} by Waze</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{$perempatans->src}}" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <div class="card-header bg-danger">
                <h6 class="m-0 font-weight-bold text-light">Live Video Traffic</h6>
            </div>
            <!-- Card Content - Collapse -->
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()