@extends('layouts.app')

@section('content')
<h1>menu volunteer</h1>
<a href="{{ route('volunteers.create') }}">  add new volunteer </a>

<table border="1">
    <thead>
        <tr>
            <th> full_name</th>
            <th> phone_number</th>
            <th>email </th>
            <th>gender</th>
            <th>operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($volunteers as $volunteer)
        <tr>
            <td>{{ $volunteer->full_name }}</td>
            <td>{{ $volunteer->phon_number }}</td>
            <td>{{ $volunteer->email }}</td>
            <td>{{ $volunteer->gender }}</td>
            <td>
                <a href="{{ route('volunteers.edit', $volunteer->id) }}">edit</a>
                <form method="POST" action="{{ route('volunteers.destroy', $volunteer->id) }}" style="display:inline;">
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
