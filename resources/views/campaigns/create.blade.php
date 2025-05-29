@extends('layouts.app')

@section('content')
<h1> add new campaingn </h1>
<form action="{{ route('campaigns.store') }}" method="POST">
    @csrf
    <label>name: <input type="text" name="name" required></label><br>
    <label>description: <textarea name="description"></textarea></label><br>
    <label>start_date : <input type="date" name="start_date"></label><br>
    <label> end_date: <input type="date" name="end_date"></label><br>
    <label>budget: <input type="number" step="0.01" name="budget"></label><br>
    <label>status:
        <select name="status">
            <option value="activ">activ</option>
            <option value="finished">finished</option>
            <option value="canceled">canceled</option>
        </select>
    </label><br>
    <button type="submit">save</button>
</form>
@endsection
