@extends('layouts.main-layout')

@section('content')

  <h2>Edit Task</h2>

  <form action="{{route('task-update', $task -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input type="text" name="title" value="{{$task -> title}}">

    <br><br>

    <label for="description">Description</label>
    <input type="text" name="description" value="{{$task -> description}}">

    <br><br>

    <label for="priority">Priority</label>
    <input type="text" name="priority" value="{{$task -> priority}}">

    <br><br>

    <select class="" name="employee_id">

      @foreach ($employees as $employee)

        <option value="{{$employee -> id}}"

          @if ($employee -> id === $task -> employee_id)
            selected
          @endif

        > {{$employee -> name}} </option>

      @endforeach

    </select>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
