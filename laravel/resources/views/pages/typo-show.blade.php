
@extends('layouts.main-layout')

@section('content')

  <h3>Name:</h3> {{$typology -> name}}

  <h3>Description:</h3> {{$typology -> description}}

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
