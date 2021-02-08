@extends('layouts.main-layout')

@section('content')

  <h3>Name:</h3> {{$employee -> name}}

  <h3>Lastname:</h3> {{$employee -> lastname}}

  <h3>Date of birth:</h3> {{$employee -> dateOfBirth}}

  <h3>Task:</h3>

  <ul>

    @foreach ($employee -> tasks as $task)

      <li>
        <a href="{{route('task-show', $task -> id)}}">
          {{$task -> title}}
        </a>

      </li>
      
    @endforeach

  </ul>

@endsection
