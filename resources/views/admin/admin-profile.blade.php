@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Profile Admin</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row mb-5">
                <div class="col-sm-8">
                    <div class="d-flex justify-content-center">
                        <img class="img-profile rounded-circle" src="{{URL::to('/')}}/img/undraw_profile.svg" height="300" width="300">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"><strong>Name</strong></label>
                            <div class="col-sm-8">
                                <p><Strong>{{$admin->name}}</Strong></p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label"><strong>Email</strong></label>
                            <div class="col-sm-8">
                                <p><Strong>{{$admin->email}}</Strong></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a type="button" href="/admin-home" class="btn btn-danger mr-3">Back</a>
                            <a type="button" class="btn btn-primary" href="/admin-edit-profile/{{$admin->id}}">Ubah</a>
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