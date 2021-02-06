@extends('layouts.main-layout')

@section('content')

  <h3>Title: {{$task -> title}}</h3>

  <h3>Description: {{$task -> description}}</h3>

  <h3>Priority: {{$task -> priority}}</h3>

  <h3>

    Task done by:

    <a href="{{route('emp-show', $task -> employee -> id)}}">
      {{$task -> employee -> name}} {{$task -> employee -> lastname}}
    </a>

  </h3>

  </ul>

@endsection
