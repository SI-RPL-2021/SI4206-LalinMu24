@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Tambah Data Perempatan</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="POST" action="/update-peta/{{$peta->id}}">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label"><strong>Nama</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="{{$peta->nama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="src" class="col-sm-2 col-form-label"><strong>Denah</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="src" value="{{$peta->src}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="youtube" class="col-sm-2 col-form-label"><strong>Live Video</strong></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="youtube" value="{{$peta->youtube}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="alamat" rows="3">{{$peta->alamat}}</textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a type="button" href="/admin-peta" class="btn btn-danger mr-3">Batal</a>
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