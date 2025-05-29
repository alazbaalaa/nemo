@extends('layouts.app')

@section('content')
<h1>  add new attendance</h1>
<form action="{{ route('attendances.store') }}" method="POST">
    @csrf
    <label> id_volunteer: <input type="number" name="id_volunteer" required></label><br>
    <label> id_event: <input type="number" name="id_event" required></label><br>
    <label>time_attendance : <input type="datetime-local" name="time_attendance"></label><br>
    <label>dismissal_time : <input type="datetime-local" name="dismissal_time"></label><br>
    <label>number_of_hours : <input type="number" step="0.1" name="hours"></label><br>
    <button type="submit">send</button>
</form>
@endsection
