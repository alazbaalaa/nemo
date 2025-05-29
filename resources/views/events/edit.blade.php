@extends('layouts.app')

@section('content')
<h1> edit event: {{ $event->name }}</h1>
<form action="{{ route('events.update', $event->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>name: <input type="text" name="name" value="{{ $event->name }}"></label><br>
    <label>description : <textarea name="description">{{ $event->description }}</textarea></label><br>
    <label>location: <input type="text" name="location" value="{{ $event->location }}"></label><br>
    <label> start_date: <input type="datetime-local" name="start_date" value="{{ $event->start_date }}"></label><br>
    <label> end_date: <input type="datetime-local" name="end_date" value="{{ $event->end_date }}"></label><br>
    <label>status:
        <select name="status">
            <option value="planned" {{ $event->status == 'planned' ? 'selected' : '' }}>planned</option>
            <option value="finiehed" {{ $event->status == 'finished' ? 'selected' : '' }}>finished</option>
            <option value="canceled" {{ $event->status == 'canceled' ? 'selected' : '' }}>canceled</option>
        </select>
    </label><br>
    <label> Maximum_number_of_volunteers : <input type="number" name="Maximum_number_of_volunteers" value="{{ $event->Maximum_number_of_volunteers }}"></label><br>
    <button type="submit">update</button>
</form>
@endsection
