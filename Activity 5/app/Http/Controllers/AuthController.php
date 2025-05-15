<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
class AuthController extends Controller
{
public function showLogin() {
    return view('auth.login');
}

public function login(Request $request) {
    $credentials = $request->only('email', 'password');
    $user = DB::table('users')->where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        session(['loggedUser' => $user->id]);
        return redirect('/dashboard');
    } else {
        return back()->with('error', 'Invalid credentials');
    }
}

public function dashboard() {
    $user = \App\Models\User::with(['profile', 'posts', 'roles'])->find(session('loggedUser'));
    return view('dashboard', compact('user'));
}

public function logout() {
    session()->forget('loggedUser');
    return redirect('/login');
}

public function showEncryptedId()
{
    $encrypted = Crypt::encrypt(42); // example user ID
    return view('show', compact('encrypted'));
}

}
