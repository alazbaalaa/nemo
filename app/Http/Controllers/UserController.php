<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
       return response()->json(User::all());
    }

    public function show(User $user) {
        return User::findOrFail($user);
    }

    public function create() {
    return response()->json(User::findOrFail($user));
}

    public function store(Request $request) {
        $user = User::create($request->all());
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return response()->json($user, 201); // Created
    }


    public function edit($id) {
         $user = User::findOrFail($id);
         return view('users.edit', compact('user'));
}

    public function update(Request $request, User $user) {
        $user = User::findOrFail($user);
        $data = $request->all();

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        return response()->json($user);
    }

    public function destroy(User $user) {
        User::destroy($user);
        return response()->json(['message' => 'User deleted']);

    }
}
