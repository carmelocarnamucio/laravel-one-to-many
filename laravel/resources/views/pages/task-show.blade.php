@extends('layouts.main-layout')

@section('content')

  <h3>Title:</h3> {{$task -> title}}

  <h3>Description:</h3> {{$task -> description}}

  <h3>Priority:</h3> {{$task -> priority}}

  <h3>Task done by:</h3>

    <a href="{{route('emp-show', $task -> employee -> id)}}">
      {{$task -> employee -> name}} {{$task -> employee -> lastname}}
    </a>

  <h3>Typologies:</h3>

  <ul>

    @foreach ($task -> typologies as $typology)

      <li>
        <a href="{{route('typo-show', $typology -> id)}}">
          {{$typology -> name}}
        </a>
      </li>

    @endforeach

  </ul>

@endsection
