@extends('layouts.app')

@section('content')
<h1>menu events</h1>
<a href="{{ route('events.create') }}"> add new event </a>

<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>description</th>
            <th>location</th>
            <th>date</th>
            <th>status</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->name }}</td>
            <td>{{ $event->description }}</td>
            <td>{{ $event->location }}</td>
            <td>{{ $event->start_date }} - {{ $event->end_date }}</td>
            <td>{{ $event->status }}</td>
            <td>
                <a href="{{ route('events.edit', $event->id) }}">edit</a>
                <form method="POST" action="{{ route('events.destroy', $event->id) }}" style="display:inline;">
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
