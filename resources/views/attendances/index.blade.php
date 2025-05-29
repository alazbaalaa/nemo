@extends('layouts.app')

@section('content')
<h1> menu attendances</h1>
<a href="{{ route('attendances.create') }}">add new attendances  </a>

<table border="1">
    <thead>
        <tr>
            <th>volunteer</th>
            <th>event</th>
            <th>time_attendance </th>
            <th>dismissal_time </th>
            <th>hours</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attendances as $attendance)
        <tr>
            <td>{{ $attendance->id_volunteer }}</td>
            <td>{{ $attendance->id_events }}</td>
            <td>{{ $attendance->time_attendance}}</td>
            <td>{{ $attendance->dismissal time }}</td>
            <td>{{ $attendance->hours }}</td>
            <td>
                <a href="{{ route('attendances.edit', $attendance->id) }}">edit</a>
                <form method="POST" action="{{ route('attendances.destroy', $attendance->id) }}" style="display:inline;">
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
