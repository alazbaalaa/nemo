@extends('layouts.app')

@section('content')
<h1> edit user: {{ $user->user_name }}</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>user_name : <input type="text" name="user_name" value="{{ $user->user_name }}"></label><br>
    <label> password ( ): <input type="password" name="password"></label><br>
    <label>role:
        <select name="role">
            <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>manager</option>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>admin</option>
            <option value="accountant" {{ $user->role == 'accountant' ? 'selected' : '' }}>accountant</option>
        </select>
    </label><br>
    <label>status:
        <select name="status">
            <option value="1" {{ $user->status ? 'selected' : '' }}>activ</option>
            <option value="0" {{ !$user->status ? 'selected' : '' }}> not activ</option>
        </select>
    </label><br>
    <button type="submit">update</button>
</form>
@endsection
