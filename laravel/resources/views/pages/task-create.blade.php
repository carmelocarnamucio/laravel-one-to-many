@extends('layouts.main-layout')

@section('content')

  <h2>New task</h2>

  <form action="{{route('task-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input type="text" name="title">

    <br><br>

    <label for="description">Description</label>
    <input type="text" name="description">

    <br><br>

    <label for="priority">Priority</label>
    <input type="text" name="priority">

    <br><br>

    <select class="" name="employee_id">

      @foreach ($employees as $employee)

        <option value="{{$employee -> id}}">{{$employee -> name}} {{ $employee -> lastname }} </option>

      @endforeach

    </select>

    <br><br>

    <label for="typologies[]"> Typologies </label> <br>

        @foreach ($typologies as $typology)

          <input name="typologies[]" type="checkbox" value="{{ $typology -> id }}"> {{ $typology -> name }} <br>

        @endforeach

    <br><br>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
