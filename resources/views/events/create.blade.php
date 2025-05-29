@extends('layouts.app')

@section('content')
<h1>  add new event </h1>
<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <label>name: <input type="text" name="name" required></label><br>
    <label>description: <textarea name="description"></textarea></label><br>
    <label>location: <input type="text" name="location"></label><br>
    <label> start_date: <input type="datetime-local" name="start_date"></label><br>
    <label> end_date: <input type="datetime-local" name="end_date"></label><br>
    <label>status:
        <select name="status">
            <option value="planned">planned</option>
            <option value="finished">finiehed</option>
            <option value="canceled">canceled</option>
        </select>
    </label><br>
    <label>  Maximum_number_of_volunteers: <input type="number" name="Maximum_number_of_volunteers"></label><br>
    <button type="submit">save</button>
</form>
@endsection
