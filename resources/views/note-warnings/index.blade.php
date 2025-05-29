@extends('layouts.app')

@section('content')
<h1>menu note-warrings </h1>
<a href="{{ route('note-warnings.create') }}">new add </a>

<table border="1">
    <thead>
        <tr>
            <th>volunteer</th>
            <th>admin</th>
            <th>type</th>
            <th>content</th>
            <th>date</th>
            <th>operatios</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)
        <tr>
            <td>{{ $note->id_volunteer }}</td>
            <td>{{ $note->id_admin }}</td>
            <td>{{ $note->type }}</td>
            <td>{{ $note->content }}</td>
            <td>{{ $note->date }}</td>
            <td>
                <a href="{{ route('note-warnings.edit', $note->id) }}">edit</a>
                <form method="POST" action="{{ route('note-warnings.destroy', $note->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

