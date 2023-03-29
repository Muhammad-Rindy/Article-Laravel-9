@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
    .login {
        margin-bottom: 50px;
        margin-top: 50px;
        margin-left: 450px;
    }
</style>
<div class="container login">
   <div class="row">
    <div class="col-md-7">
        <div class="card col-md-7">
            <div class="card-body">
                <h1 class="text-center">Register</h1>
                <form method="POST" action="{{ url('register') }}">
                    @csrf
                            <div class="form-floating">
                              <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                              <label for="floatingInput">Nama</label>
                              @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                              @endif
                            </div>
                            <div class="form-floating">
                              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                              <label for="email">Email address</label>
                              @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                              @endif
                            </div>
                            <div class="form-floating">
                              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                              <label for="password">Password</label>
                              @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                              @endif
                            </div>
                            <div class="form-floating">
                              <input type="password" class="form-control" id="password_confirmation" placeholder="Password" name="password_confirmation">
                              <label for="password_confirmation">Konfirmasi Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection
