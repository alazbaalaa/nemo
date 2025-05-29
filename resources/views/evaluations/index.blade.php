@extends('layouts.app')

@section('content')
<h1>menu evaluations </h1>
<a href="{{ route('evaluations.create') }}">add new evaluation  </a>

<table border="1">
    <thead>
        <tr>
            <th>volunteer</th>
            <th>event</th>
            <th>admin</th>
            <th>evaluation</th>
            <th>date_evaluation </th>
            <th>operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($evaluations as $evaluation)
        <tr>
            <td>{{ $evaluation->id_volunteer }}</td>
            <td>{{ $evaluation->id_event }}</td>
            <td>{{ $evaluation->id_admin }}</td>
            <td>{{ $evaluation->evaluation }}</td>
            <td>{{ $evaluation->date_evaluation }}</td>
            <td>
                <a href="{{ route('evaluations.edit', $evaluation->id) }}">edit</a>
                <form method="POST" action="{{ route('evaluations.destroy', $evaluation->id) }}" style="display:inline;">
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
