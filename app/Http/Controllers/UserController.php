<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        try {
            User::create([
                'name' => $request->validated('name'),
                'email' => $request->validated('email'),
                'password' => Hash::make($request->validated('password')),
            ]);

            return redirect()->route('users.index')->with([
                'success' => 'User created successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function edit(User $user)
    {
        return view('pages.users.edit', [
            'user' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try {
            $user->update([
                'name' => $request->validated('name'),
                'email' => $request->validated('email'),
                'password' => $request->validated('password') ? Hash::make($request->validated('password')) : $user->password
            ]);

            return redirect()->route('users.index')->with([
                'success' => 'User updated successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->back()->with([
                'success' => 'User deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'error' => $th->getMessage()
            ]);
        }
    }
}
