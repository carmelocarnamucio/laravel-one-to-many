@extends('layouts.main-layout')

@section('content')

  <h3>Name: {{$employee -> name}}</h3>

  <h3>Lastname: {{$employee -> lastname}}</h3>

  <h3>Date of birth: {{$employee -> dateOfBirth}}</h3>

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
