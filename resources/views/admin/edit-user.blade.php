@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Edit Data User Polantas</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="POST" action="/update-user/{{$user->id}}">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label"><strong>Denah</strong></label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a type="button" href="/admin-users" class="btn btn-danger mr-3">Batal</a>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection