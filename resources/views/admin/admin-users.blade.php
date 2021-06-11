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
                    <a class="btn btn-outline-success mb-3" href="{{ route('register') }}" role="button"><i class="fas fa-plus"></i> Tambah Polantas</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a class="btn btn-primary" href="#" role="button"><i class="fas fa-edit"></i> Edit</a>
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection