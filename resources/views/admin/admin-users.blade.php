@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4 mx-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Polantas</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-success mb-3" href="/tambah-polantas" role="button"><i class="fas fa-plus"></i> Tambah Polantas</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $value => $user)
                            <tr>
                                <td class="text-center">{{$value+=1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center">
                                    <div class="badge badge-primary text-wrap">
                                        Polantas
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form action="/delete-user/{{$user->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a class="btn btn-primary" href="/edit-user/{{$user->id}}" role="button"><i class="fas fa-edit"></i> Edit</a>
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