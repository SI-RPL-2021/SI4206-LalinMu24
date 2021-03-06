@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center bg-primary text-light">
            <b>Registrasi Polantas</b> 
        </div>
        <div class="card-body" style="background-color: #E4ECEF;">
            <div class="row">
                <div class="col-sm-8">
                    <form class="ml-3" method="POST" action="/tambah-user">
                        @csrf
                        <div class="form-group row">
                            <label for="role_id" class="col-sm-4 col-form-label @error('role_id') is-invalid @enderror"><strong>{{ __('Role Id') }}</strong></label>
                            <div class="col-sm-8">
                                <input id="role_id" type="text" class="form-control" name="role_id" value="2" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label"><strong>{{ __('Name') }}</strong></label>
                            <div class="col-sm-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label"><strong>{{ __('E-Mail Address') }}</strong></label>
                            <div class="col-sm-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label"><strong>{{ __('Password') }}</strong></label>
                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-4 col-form-label"><strong>{{ __('Confirm Password') }}</strong></label>
                            <div class="col-sm-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a type="button" href="/admin-users" class="btn btn-danger mr-3">Batal</a>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection