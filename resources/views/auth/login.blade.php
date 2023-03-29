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
                <h1 class="text-center">Login</h1>
                <form method="POST" action="{{ url('login') }}">
                    @csrf
                        @if (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif
                            <div class="form-floating">
                              <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                              <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                              <label for="password">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
   </div>
</div>
@endsection
