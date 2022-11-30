@extends('layout')
@section('title') Авторизация @endsection
@section('main_content')
<div class="container">
    <br>
    <form method="POST" action="{{ route('user.login') }}">
      @csrf
      <div class="form-group">
        <label for="email" class="form-label">Ваша электронная почта</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" placeholder="Пароль" id="password" name="password" value="">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-dark">Войти</button>
      </div>
    </form>
  
  </div>
@endsection
