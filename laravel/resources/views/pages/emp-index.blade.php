@extends('layouts.main-layout')

@section('content')

  <h1>Employee</h1>

  <a href="{{route('emp-create')}}">New Employee</a>


  <ul>
    @foreach ($employees as $employee)

      <li>

        <a href="{{route('emp-show', $employee -> id)}}">
            {{$employee -> name}}
            {{$employee -> lastname}}
        </a>

        <a href="{{route('emp-edit', $employee -> id)}}">Edit</a>

      </li>

    @endforeach
  </ul>

@endsection
