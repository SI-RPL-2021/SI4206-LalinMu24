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
                                <th>Merah</th>
                                <th>Kuning</th>
                                <th>Hijau</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lampus as $value => $l)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>Perempatan {{$l->nama}}</td>
                                <td>{{$l->merah}}</td>
                                <td>{{$l->kuning}}</td>
                                <td>{{$l->hijau}}</td>
                                <td class="text-center"><a class="btn btn-warning" href="#" role="button"><i class="fas fa-edit"></i> Edit</a></td>
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