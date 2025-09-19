<?php

namespace App\Http\Controllers;

use App\Models\User;                      
use Illuminate\Http\Request;              
use Illuminate\Support\Facades\Auth;      
use Illuminate\Support\Facades\Hash;      

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ✅ arahkan ke halaman login setelah sukses register
        return redirect()->route('login')
            ->with('success', 'Akun berhasil dibuat, silakan login.');
    }

    public function login(Request $request) {
        $request->validate([
            'nama' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('name', $request->nama)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }
        return back()->withErrors(['nama' => 'Nama atau password salah']);
    }
}
