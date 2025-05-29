@extends('layouts.app')

@section('content')
<h1>partners </h1>
<a href="{{ route('partners.create') }}">add new partner  </a>

<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>connection data </th>
            <th>Collaboration_type </th>
            <th>operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partners as $partner)
        <tr>
            <td>{{ $partner->name }}</td>
            <td>{{ $partner->connection }}</td>
            <td>{{ $partner->Collaboration_type }}</td>
            <td>
                <a href="{{ route('partners.edit', $partner->id) }}">edit</a>
                <form method="POST" action="{{ route('partners.destroy', $partner->id) }}" style="display:inline;">
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
