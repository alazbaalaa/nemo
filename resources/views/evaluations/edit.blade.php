@extends('layouts.app')

@section('content')
<h1> edit evaluation</h1>
<form action="{{ route('evaluations.update', $evaluation->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label> id_volunteer: <input type="number" name="id_volunteer" value="{{ $evaluation->id_volunteer }}"></label><br>
    <label> id_event: <input type="number" name="id_event" value="{{ $evaluation->id_event }}"></label><br>
    <label> id_admin: <input type="number" name="id_admin" value="{{ $evaluation->id_admin }}"></label><br>
    <label>evaluation: <input type="number" step="0.1" min="1" max="5" name="evaluation" value="{{ $evaluation->evaluation }}"></label><br>
    <label>notes: <textarea name="notes">{{ $evaluation->notes }}</textarea></label><br>
    <label>date_evaluation : <input type="date" name="date_evaluation" value="{{ $evaluation->date_evaluation }}"></label><br>
    <button type="submit">update</button>
</form>
@endsection
