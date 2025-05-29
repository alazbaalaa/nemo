@extends('layouts.app')

@section('content')
<h1> add note-warring </h1>
<form action="{{ route('note-warnings.store') }}" method="POST">
    @csrf
    <label> id_volunteer: <input type="number" name="id_volunteer" required></label><br>
    <label> id_admin: <input type="number" name="id_admin" required></label><br>
    <label>type:
        <select name="type">
            <option value="note">note</option>
            <option value="warring">warring</option>
        </select>
    </label><br>
    <label>content: <textarea name="content"></textarea></label><br>
    <label>date: <input type="date" name="date"></label><br>
    <button type="submit">send</button>
</form>
@endsection
