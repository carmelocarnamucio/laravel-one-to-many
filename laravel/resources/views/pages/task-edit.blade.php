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

        >
          {{$employee -> name}}
          {{$employee -> lastname}}

        </option>

      @endforeach

    </select>

    <br><br>

    <label for="typologies[]">Typologies</label> <br>

      @foreach ($typologies as $typology)

          <input
            name="typologies[]"
            type="checkbox"
            value="{{ $typology -> id }}"

            @if ($task -> typologies -> contains($typology -> id))
              checked
            @endif
          >
            {{ $typology -> name }}
    <br>

      @endforeach

    <br><br>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
