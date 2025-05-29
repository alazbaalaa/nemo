@extends('layouts.app')

@section('content')
<h1>  add new user</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label> user_name: <input type="text" name="user_name" required></label><br>
    <label> password: <input type="password" name="password" required></label><br>
    <label>role:
        <select name="role">
            <option value="manager">manager</option>
            <option value="admin">admin</option>
            <option value="accountant">accountant</option>
        </select>
    </label><br>
    <label>status:
        <select name="status">
            <option value="1">activ</option>
            <option value="0">not activ </option>
        </select>
    </label><br>
    <button type="submit">save</button>
</form>
@endsection
