@extends('layouts.app')

@section('title')
Обновление записи@endsection

@section('content')
  <h1> Обновление записи </h1>


<form  action="{{route('contact-update-submit', $data->id) }}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя"  id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="mail">Введите email</label>
    <input type="text" name="mail" value="{{$data->mail}}" placeholder="Введите email"  id="mail" class="form-control">
  </div>

  <div class="form-group">
    <label for="number">Введите номер</label>
    <input type="text" name="number" value="{{$data->number}}" placeholder="Введите номер"  id="number" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message"  class="form-control" placeholder="Введите сообщение">{{$data->message}}</textarea>
  </div>
  <button type="submit" class="btn btn-success">Обновить</button>

</form>
@endsection
