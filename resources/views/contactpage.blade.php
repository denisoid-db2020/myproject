@extends('layouts.app')

@section('title')
Контакты@endsection

@section('content')
  <h1> Контакты </h1>


<form  action="{{route('contact-form') }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" placeholder="Введите имя"  id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="mail">Введите email</label>
    <input type="text" name="mail" placeholder="Введите email"  id="mail" class="form-control">
  </div>

  <div class="form-group">
    <label for="number">Введите номер</label>
    <input type="text" name="number" placeholder="Введите номер"  id="number" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection
