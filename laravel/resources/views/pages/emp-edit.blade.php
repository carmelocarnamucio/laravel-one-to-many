@extends('layouts.main-layout')

@section('content')

  <h2>Edit Employee</h2>

  <form action="{{route('emp-update', $employee -> id)}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" value="{{$employee -> name}}">

    <br><br>

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="{{$employee -> lastname}}">

    <br><br>

    <label for="dateOfBirth">Date of birth</label>
    <input type="text" name="dateOfBirth" value="{{$employee -> dateOfBirth}}">

    <br><br>

    <input type="submit" name="" value="Save">
    <br><br>

  </form>

@endsection
