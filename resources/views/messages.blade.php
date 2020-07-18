@extends('layouts.app')
@section('title')Все сообщения@endsection

@section('content')
    <h1> Все сообщения </h1>

@foreach($data as $el)
<div class="alert alert-info">
  <h5>{{$el -> mail}}</h5>
  <p>{{$el -> name}}</p>
  <p>{{$el -> created_at}}</p>
  <a href="{{ route ('contact-message', $el->id)}}"><button class="btn btn-warning"> Подробнее</button></a>

</div>
@endforeach

@endsection
