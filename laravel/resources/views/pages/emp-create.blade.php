@extends('layouts.main-layout')

@section('content')

  <h2>New Employee</h2>

  <form action="{{route('emp-store')}}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" value="">

    <br><br>

    <label for="lastname">Lastname</label>
    <input type="text" name="lastname" value="">

    <br><br>

    <label for="dateOfBirth">Date of birth</label>
    <input type="text" name="dateOfBirth" value="">

    <br><br>

    <input type="submit" name="" value="Save">

    <br><br>

  </form>

@endsection
