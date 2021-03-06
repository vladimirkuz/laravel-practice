@extends('master')

@section('title', 'Homepageee')

@section('content')

<form action='/create' method='post'>
  <input type='text' name='title' placeholder='title'>
  <input type='text' name='content' placeholder='content'>
  {{ csrf_field()}}
  <button type="submit">Submit</button>
</form>

<br>

Recent Messages:

<ul>
@foreach($messages as $message)
  <li><strong>{{ $message -> title}}</strong> <br> {{ $message -> content}}
    <br>
    {{$message -> created_at -> diffForHumans()}}
  </li> <!-- title, content are colum headings -->
    <a href="/message/{{$message->id}}">View</a>
@endforeach
</ul>

@endsection
