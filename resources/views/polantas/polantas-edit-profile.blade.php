@extends('layouts.polantas')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Ubah Profile Polantas</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="POST" action="/polantas-update-profile/{{$polantas->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="image" class="col-sm-3 col-form-label"><strong>Profile Picture</strong></label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label"><strong>Name</strong></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" value="{{$polantas->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" value="{{$polantas->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label"><strong>Password</strong></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a type="button" href="/admin-profile/{{$polantas->id}}" class="btn btn-danger mr-3">Batal</a>
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