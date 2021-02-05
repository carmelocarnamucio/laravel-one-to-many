@extends('layouts.main-layout')

@section('content')

  <h1>Tasks:</h1>

  <ul>
    @foreach ($tasks as $task)

      <li>
        {{ $task -> title}} --->
        {{ $task -> employee -> name}}
      </li>

    @endforeach
  </ul>

@endsection
