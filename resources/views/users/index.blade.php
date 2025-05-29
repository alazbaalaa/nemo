@extends('layouts.app')

@section('content')
<h1>menu users </h1>
<a href="{{ route('users.create') }}">add new user  </a>

<table border="1">
    <thead>
        <tr>
            <th>user_name </th>
            <th>role</th>
            <th>status</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_name }}</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->status ? 'activ' : 'not activ ' }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">edit</a>
                <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
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
