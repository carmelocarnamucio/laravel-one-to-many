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

  <h2>New Typology</h2>

  <form action="{{route('typo-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name"> Name </label>
    <input type="text" name="name">

    <br><br>

    <label for="description"> Description </label>
    <input type="text" name="description">

    <br><br>

    <input type="submit" name="" value="Save">

    <br><br>

    Tasks:
    <br>
    @foreach ($tasks as $task)

      <input type="checkbox" name="tasks[]" value="{{$task -> id}}">

      {{$task -> title}}

      <br>

    @endforeach

    <br>

    <input type="submit" name="" value="Invia">

  </form>

@endsection
