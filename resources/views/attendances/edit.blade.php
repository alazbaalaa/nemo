@extends('layouts.app')

@section('content')
<h1>edit menu attendance  </h1>
<form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>volunteer ID: <input type="number" name="id_volunteer" value="{{ $attendance->id_volunteer }}"></label><br>
    <label>event ID: <input type="number" name="id_events" value="{{ $attendance->id_event }}"></label><br>
    <label> time_attendance: <input type="datetime-local" name="time_attendance" value="{{ $attendance->time_attendance }}"></label><br>
    <label>dismissal_time: <input type="datetime-local" name="dismissal_time" value="{{ $attendance->dismissal_time }}"></label><br>
    <label> number_of_hours: <input type="number" step="0.1" name="hours" value="{{ $attendance->hours }}"></label><br>
    <button type="submit">update</button>
</form>
@endsection
