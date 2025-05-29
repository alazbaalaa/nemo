@extends('layouts.app')

@section('content')
<h1> edit note-warrings </h1>
<form action="{{ route('note-warnings.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label> id_volunteer: <input type="number" name="id_volunteer" value="{{ $note->id_volunteer }}"></label><br>
    <label> id_admin: <input type="number" name="id_admin" value="{{ $note->id_admin }}"></label><br>
    <label>type:
        <select name="type">
            <option value="note" {{ $note->type == 'note' ? 'selected' : '' }}>note</option>
            <option value="warring" {{ $note->type == 'warring' ? 'selected' : '' }}>warring</option>
        </select>
    </label><br>
    <label>content: <textarea name="content">{{ $note->content }}</textarea></label><br>
    <label>date: <input type="date" name="date" value="{{ $note->date }}"></label><br>
    <button type="submit">update</button>
</form>
@endsection
