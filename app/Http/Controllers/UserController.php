<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user) {
        return User::findOrFail($user);
    }

    public function create() {
    return view('users.create');
}

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('users.index');
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
       return redirect()->route('users.index');
    }

    public function destroy(User $user) {
        User::destroy($user);
        return redirect()->route('users.index');
    }
}
