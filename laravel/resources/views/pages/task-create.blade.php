@extends('layouts.main-layout')

@section('content')

  <h2>New task</h2>

  <form action="{{route('task-store')}}" method="post">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input type="text" name="title" value="">

    <br><br>

    <label for="description">Description</label>
    <input type="text" name="description" value="">

    <br><br>

    <label for="priority">Priority</label>
    <input type="text" name="priority" value="">

    <br><br>

    <select class="" name="employee_id">

      @foreach ($employees as $employee)

        <option value="{{$employee -> id}}">{{$employee -> name}}</option>

      @endforeach

    </select>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
