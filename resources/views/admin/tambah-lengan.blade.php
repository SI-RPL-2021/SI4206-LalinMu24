@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Tambah Lengan</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="POST" action="/tambah-lengan">
                        @csrf
                        <div class="form-group row">
                            <label for="perempatan_id" class="col-sm-4 col-form-label"><strong>Perempatan id</strong></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="perempatan_id" value="{{$peta->id}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lengan" class="col-sm-4 col-form-label"><strong>Lengan</strong></label>
                            <div class="col-sm-8">
                                <select type="text" class="form-control" name="lengan">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a type="button" href="/admin-peta" class="btn btn-danger mr-3">Batal</a>
                            <button type="submit" class="btn btn-primary">Tambah</button>
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