<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:12',
            'email' => 'required|email|unique:users',
            'age' => 'required|integer',
        ]);
        // Validation has passed; create the user
        User::create([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
        ]);

        return redirect()->route('users.create')->with('success', 'User created successfully.');
    }
}
