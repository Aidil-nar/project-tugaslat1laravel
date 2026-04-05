<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // 1. Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // 2. Menerima data submit dari form login
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('error', 'Email / password salah');
    }

    // 3. Menampilkan halaman registrasi (Fungsi ini yang tadi hilang)
    public function registration()
    {
        return view('registration');
    }

    // 4. Menerima data submit registrasi dan insert ke DB
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6', // Pastikan password minimal 6 karakter
        ]);

        User::create([
            'name' => $request->name, 
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        return redirect('/registration')->with('success', 'Registrasi berhasil');
    }

    // 5. Menampilkan halaman home untuk user yang sedang login
    public function home()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        return view('home', [
            'user' => Auth::user() 
        ]);
    }

    // 6. Logout dan redirect ke login
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}