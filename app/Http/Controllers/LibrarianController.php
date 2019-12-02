<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class LibrarianController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = "librarian";

        User::create($validated);
        return redirect()->route('home');
    }

    public function create()
    {
        return view('auth.registerAdmin');
    }
}
