@extends('layouts.app')

@section('content')
<h1> add new partner </h1>
<form action="{{ route('partners.store') }}" method="POST">
    @csrf
    <label>name: <input type="text" name="name" required></label><br>
    <label>connection data : <input type="text" name="connection"></label><br>
    <label>Collaboration_type : <input type="text" name="Collaboration_type"></label><br>
    <button type="submit">save</button>
</form>
@endsection
