@extends('layouts.app')

@section('content')
<h1> edit campaign: {{ $campaign->name }}</h1>
<form action="{{ route('campaigns.update', $campaign->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>name: <input type="text" name="name" value="{{ $campaign->name }}"></label><br>
    <label>description: <textarea name="description">{{ $campaign->description }}</textarea></label><br>
    <label>start_date : <input type="date" name="start_date" value="{{ $campaign->start_date }}"></label><br>
    <label>end_date : <input type="date" name="end_date" value="{{ $campaign->end_date }}"></label><br>
    <label>budget: <input type="number" step="0.01" name="budget" value="{{ $campaign->budget }}"></label><br>
    <label>status:
        <select name="status">
            <option value="activ" {{ $campaign->status == 'activ' ? 'selected' : '' }}>activ</option>
            <option value="finished" {{ $campaign->status == 'finished' ? 'selected' : '' }}>finished</option>
            <option value="canceled" {{ $campaign->status == 'canceled' ? 'selected' : '' }}>canceled</option>
        </select>
    </label><br>
    <button type="submit">update</button>
</form>
@endsection
