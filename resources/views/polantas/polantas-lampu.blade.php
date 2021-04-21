@extends('layouts.polantas')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Lampu Perempatan</h6>
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
                            @foreach($lampus as $value => $l)
                            <tr>
                                <td class="text-center">{{$value+1}}</td>
                                <td>Perempatan {{$l->nama}}</td>
                                <td class="text-center"><a class="text-primary" href="/edit-lampu/{{$l->id}}" role="button"><i class="fas fa-info-circle"></i></a></td>
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