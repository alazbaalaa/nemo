@extends('layouts.app')

@section('content')
<h1>add new volunteer</h1>
<form action="{{ route('volunteers.store') }}" method="POST">
    @csrf
    <label> full_name: <input type="text" name="full_name" required></label><br>
    <label> phone_number: <input type="text" name="phone_number" required></label><br>
    <label>email : <input type="email" name="email"></label><br>
    <label>gender:
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    </label><br>
    <button type="submit">send</button>
</form>
@endsection
