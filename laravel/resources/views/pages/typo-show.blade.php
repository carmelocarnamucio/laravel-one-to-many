
@extends('layouts.main-layout')

@section('content')

  <h3>Name: {{$typology -> name}}</h3>

  <h3>Description: {{$typology -> description}}</h3>

  <h3>Task:</h3>

  <ul>

    @foreach ($typology -> tasks as $task)

      <li>

        <a href="{{route('task-show', $task -> id)}}">
          {{$task -> title}}
        </a>

      </li>

    @endforeach

  </ul>

@endsection
