@extends('layouts.app')
@section('title'){{$data -> mail}}@endsection

@section('content')
    <h1> {{$data -> mail}} </h1>

<div class="alert alert-info">
  <p>{{$data -> name}}</p>
  <p>{{$data -> message}}</p>
  <p>{{$data -> number}}</p>
  <p>{{$data -> created_at}}</p>
<a href="{{ route ('contact-update', $data->id)}}"><button class="btn btn-primary"> Редактировать</button></a>
  <a href="{{ route ('contact-delete', $data->id)}}"><button class="btn btn-danger"> Удалить</button></a>
</div>


@endsection
