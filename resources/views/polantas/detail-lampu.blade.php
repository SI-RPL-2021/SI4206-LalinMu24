@extends('layouts.polantas')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Lampu Perempatan {{$lampu->nama}}</h6>
            </div>
            <div class="card-body">
            <div class="d-flex justify-content-end">
                <a href="/edit-lampu/{{$lampu->id}}" class="btn btn-outline-warning mb-3" role="button">
                    <i class="fas fa-edit"></i> Edit
                </a>
            </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Lengan</th>
                                <th>Merah</th>
                                <th>Kuning</th>
                                <th>Hijau</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lampu -> lengans as $value => $lengan)
                            <tr>
                                <td class="text-center">{{$value+1}}</td>
                                <td>{{$lengan->lengan}}</td>
                                <td>{{$lengan->merah}}</td>
                                <td>{{$lengan->kuning}}</td>
                                <td>{{$lengan->hijau}}</td>
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