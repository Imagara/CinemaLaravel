@extends('layout')
@section('title') Регистрация @endsection
@section('main_content')
<div class="container">
    <br>
    <form method="POST" action="{{ route('user.registration') }}">
      @csrf
      <div class="form-group">
        <label for="name" class="form-label">Ваше имя</label>
        <input type="name" class="form-control" id="name" placeholder="Name" name="name">
      </div>
      <div class="form-group">
        <label for="email" class="form-label">Ваша электронная почта</label>
        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
      </div>
      <div class="form-group">
        <label for="password" class="form-label">Пароль</label>
        <input type="password" class="form-control" placeholder="Пароль" id="password" name="password" value="">
        @error('password')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-dark">Регистрация</button>
      </div>
    </form>
  
  </div>
@endsection
