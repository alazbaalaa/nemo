@extends('layouts.app')

@section('content')
<h1>edit volunteer : {{ $volunteer->full_name }}</h1>
<form action="{{ route('volunteers.update', $volunteer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>full_name : <input type="text" name="full_name" value="{{ $volunteer->full_name }}"></label><br>
    <label> phone_number: <input type="text" name="phone_number" value="{{ $volunteer->phone_number }}"></label><br>
    <label>email : <input type="email" name="email" value="{{ $volunteer->email }}"></label><br>
    <label>gender:
        <select name="gender">
            <option value="male" {{ $volunteer->gender == 'male' ? 'selected' : '' }}>male</option>
            <option value="female" {{ $volunteer->gender == 'female' ? 'selected' : '' }}>female</option>
        </select>
    </label><br>
    <button type="submit">update</button>
</form>
@endsection
