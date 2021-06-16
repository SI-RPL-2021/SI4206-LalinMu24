@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-light">
                    <strong>Perempatan</strong>
                </div>
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($perempatans as $value => $perempatan)
                            <tr>
                                <td>{{$value+=1}}</td>
                                <td>Perempatan {{$perempatan->nama}}</td>
                                <td>{{$perempatan->alamat}}</td>
                                <td>
                                    <a class="btn btn-outline-primary" href="/index/detail-perempatan/{{$perempatan->id}}" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                    </svg> Detail
                                    </a>
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