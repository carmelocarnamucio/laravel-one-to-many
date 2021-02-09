@extends('layouts.main-layout')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <h2>Edit Task</h2>

  <form action="{{route('typo-update', $typology -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name"> Name </label>
    <input type="text" name="name" value="{{$typology -> name}}">

    <br><br>

    <label for="description"> Description </label>
    <input type="text" name="description" value="{{$typology -> description}}">

    <br><br>

    Tasks:
    <br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{$task -> id}}"

        @if ($typology -> tasks -> contains($task -> id))
          checked
        @endif

      >
      {{$task -> title}}

      <br>

    @endforeach

    <br>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
