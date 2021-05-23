@extends('layouts.polantas')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Edit Data Lampu</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-6">
                    <form class="ml-3" method="POST" action="/update-lampu/{{$lengan->id}}">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <label for="merah" class="col-sm-2 col-form-label"><strong>Merah</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="merah" value="{{$lengan->merah}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kuning" class="col-sm-2 col-form-label"><strong>Kuning</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kuning" value="{{$lengan->kuning}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hijau" class="col-sm-2 col-form-label"><strong>Hijau</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hijau" value="{{$lengan->hijau}}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a type="button" href="/polantas-lampu" class="btn btn-danger mr-3">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
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