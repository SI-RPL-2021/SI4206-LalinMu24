@extends('layouts.polantas')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 mx-5">
            <!-- Card Header - Accordion -->
            <a class="d-block card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Lampu</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"><b>Nama</b></label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="name" value="{{$lampus->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merah" class="col-sm-2 col-form-label"><b>Merah</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="merah" value="{{$lampus->merah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kuning" class="col-sm-2 col-form-label"><b>Kuning</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kuning" value="{{$lampus->kuning}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hijau" class="col-sm-2 col-form-label"><b>Hijau</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="hijau" value="{{$lampus->hijau}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection