@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4 mx-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Perempatan</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-success mb-3" href="/tambah-peta" role="button"><i class="fas fa-plus"></i> Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perempatan as $value => $p)
                            <tr>
                                <td class="text-center">{{$value+1}}</td>
                                <td>P - {{$p->id}}</td>
                                <td>Perempatan {{$p->nama}}</td>
                                <td>{{$p->alamat}}</td>
                                <td class="text-center">
                                    <form action="/delete-peta/{{$p->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a class="btn btn-primary" href="/edit-peta/{{$p->id}}" role="button"><i class="fas fa-edit"></i> Edit</a>
                                        <a class="btn btn-warning" href="/edit-lengan/{{$p->id}}" role="button"><i class="fas fa-bezier-curve"></i> Lengan</a>
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4 mx-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Lengan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Perempatan id</th>
                                <th>Lengan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lengan as $value => $l)
                            <tr>
                                <td class="text-center">{{$value+1}}</td>
                                <td>P - {{$l->perempatan_id}}</td>
                                <td>{{$l->lengan}}</td>
                                <td class="text-center">
                                    <form action="/delete-lengan/{{$l->perempatan_id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
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