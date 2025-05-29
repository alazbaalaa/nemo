@extends('layouts.app')

@section('content')
<h1>menu campaigns  </h1>
<a href="{{ route('campaigns.create') }}"> add new campaingn</a>

<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>description</th>
            <th>time</th>
            <th>budget</th>
            <th>status</th>
            <th>operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaigns as $campaign)
        <tr>
            <td>{{ $campaign->name }}</td>
            <td>{{ $campaign->description }}</td>
            <td>{{ $campaign->start_date }} - {{ $campaign->end_date }}</td>
            <td>{{ $campaign->budget }} dollar</td>
            <td>{{ $campaign->status }}</td>
            <td>
                <a href="{{ route('campaigns.edit', $campaign->id) }}">edit</a>
                <form method="POST" action="{{ route('campaigns.destroy', $campaign->id) }}" style="display:inline;">
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
