@extends('layouts.auth.layout')
@section('content')
<div class="login-logo">
    <a href="../../index2.html"><b>Please Login!</b></a>
  </div>
<div class="login-box-body" style="background-color:lightyellow">

    {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
    <div class="inner-box text-center">
        <div class="image-box">
            <figure>
                <img src="resources/admin/images/img/img.png" alt="" height="200" width="200" style="padding: 5px; margin:2px;">
            </figure>
        </div>
    </div>
    @if(auth()->check())
    <pre>{{auth()->user()->full_name}}</pre>
    @endif
    <form action="{{route('auth.login')}}" method="post">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('email')}}</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="text-danger">{{$errors->first('password')}}</span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <div class="col-xs-6">
          <a href="{{route('auth.register')}}" class="text-center">Register a new membership</a>
        </div
        <!-- /.col -->
      </div>
    </form>
  </div>
  @endsection

