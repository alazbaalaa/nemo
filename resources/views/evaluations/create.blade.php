@extends('layouts.app')

@section('content')
<h1>add new evaluation  </h1>
<form action="{{ route('evaluations.store') }}" method="POST">
    @csrf
    <label> id_volunteer: <input type="number" name="id_volunteer" required></label><br>
    <label>id_event: <input type="number" name="id_event" required></label><br>
    <label> id_admin: <input type="number" name="id_admin" required></label><br>
    <label>evaluation: <input type="number" step="0.1" min="1" max="5" name="evaluation" required></label><br>
    <label>notes: <textarea name="notes"></textarea></label><br>
    <label> date_evaluation: <input type="date" name="date_evaluation"></label><br>
    <button type="submit">send</button>
</form>
@endsection
