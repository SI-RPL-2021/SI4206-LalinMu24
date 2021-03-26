@extends('layouts.polantas')

@section('content')
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perempatans as $value => $p)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>Perempatan {{$p->nama}}</td>
                                <td class="text-center"><a class="btn btn-success" href="#" role="button"><i class="fas fa-info-circle"></i> Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection