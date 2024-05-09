<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function indexRegister(){
        return view('auth.register');
    }

    
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        
        // Jika user berhasil login
        if ($user->hasRole('admin')) {
            return redirect('/dashboard');
        } else {
            return redirect('/userDashboard');
        }
    }

    // Jika login gagal, kembalikan ke halaman login dengan pesan error
    return redirect()->back()->withInput($request->only('email'))->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}
public function logout(Request $request)
    {
        Auth::logout();

        // Mencegah pengguna kembali ke halaman sebelumnya menggunakan tombol "kembali" di browser
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
