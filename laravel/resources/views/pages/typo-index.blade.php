@extends('layouts.main-layout')

@section('content')

  <h1>Typologies</h1>

    <ul>

      @foreach ($typologies as $typology)

        <li>

          <a href="{{route('typo-show', $typology -> id)}}">
            {{$typology -> name}}
          </a>

        </li>

      @endforeach

    </ul>

@endsection
