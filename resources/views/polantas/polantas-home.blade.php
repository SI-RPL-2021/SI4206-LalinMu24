@extends('layouts.polantas')

@section('content')
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
                        <iframe class="embed-responsive-item" src="https://embed.waze.com/iframe?zoom=14&lat=-6.930474&lon=107.601557&ct=livemap" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection