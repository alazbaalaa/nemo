@extends('layouts.app')

@section('content')
<h1> edit partner: {{ $partner->name }}</h1>
<form action="{{ route('partners.update', $partner->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>name: <input type="text" name="name" value="{{ $partner->name }}"></label><br>
    <label>connection data : <input type="text" name="connection" value="{{ $partner->connection }}"></label><br>
    <label> Collaboration_type: <input type="text" name="Collaboration_type" value="{{ $partner->Collaboration_type }}"></label><br>
    <button type="submit">update</button>
</form>
@endsection
