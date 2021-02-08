@extends('layouts.main-layout')

@section('content')

  <h1>Typologies</h1>

  <a href="{{route('typo-create')}}">New Typo</a>

    <ul>

      @foreach ($typologies as $typology)

        <li>

          <a href="{{route('typo-show', $typology -> id)}}">
            {{$typology -> name}}
          </a>

          <a href="{{route('typo-edit', $typology -> id)}}">Edit</a>

        </li>

      @endforeach

    </ul>

@endsection
