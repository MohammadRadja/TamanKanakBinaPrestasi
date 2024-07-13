<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;
use App\Models\BiodataDiri;

class PenggunaController extends Controller
{
    public function registerSiswa(Request $request){
    $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'username' => 'required|string|max:50|unique:pengguna',
        'email' => 'required|string|email|max:100|unique:pengguna',
        'password' => 'required|string|min:6',
    ]);

    try {
        $pengguna = Pengguna::create([
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa', // Set role default to 'siswa'
        ]);

        return redirect()->route('login')->with(['success' => 'Akun berhasil dibuat. Silakan login.']);

    } catch (QueryException $e) {
        $errorCode = $e->errorInfo[1];
        if ($errorCode == 1062) { // 1062 adalah kode error untuk duplicate entry
            return back()->withInput()->withErrors(['username' => 'Username sudah digunakan. Silakan pilih username lain.']);
        } else {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat membuat akun. Silakan coba lagi nanti.']);
        }
    }
}

    public function registerAdmin(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'username' => 'required|string|max:50|unique:pengguna',
            'email' => 'required|string|email|max:100|unique:pengguna',
            'password' => 'required|string|min:6',
        ]);

        try {
            $pengguna = Pengguna::create([
                'nama_lengkap' => $request->nama_lengkap,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'admin', // Set role to 'admin'
            ]);

            return redirect()->route('login')->with(['success' => 'Akun berhasil dibuat. Silakan login.']);

        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) { // 1062 is the code for duplicate entry
                return back()->withInput()->withErrors(['username' => 'Username sudah digunakan. Silakan pilih username lain.']);
            } else {
                return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat membuat akun. Silakan coba lagi nanti.']);
            }
        }
    }

public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Ambil input username dan password dari request
        $username = $request->input('username');
        $password = $request->input('password');

        // Cari pengguna berdasarkan username
        $pengguna = Pengguna::where('username', $username)->first();

        // Jika pengguna ditemukan
        if ($pengguna) {
            // Verifikasi password
            if (Hash::check($password, $pengguna->password)) {
                // Mulai session login
                Session::put('pengguna_id', $pengguna->id);
                Session::put('pengguna_username', $pengguna->username);

                // Redirect berdasarkan peran (role)
                if ($pengguna->role === 'admin') {
                    return redirect()->route('admin.dashboard');
                } elseif ($pengguna->role === 'siswa') {
                    return redirect()->route('siswa.dashboard');
                } else {
                    // Jika peran tidak dikenali
                    return back()->withErrors(['login_failed' => 'Peran pengguna tidak valid.']);
                }
            } else {
                // Jika password tidak cocok
                return back()->withErrors(['login_failed' => 'Username atau password salah.']);
            }
        } else {
            // Jika pengguna tidak ditemukan
            return back()->withErrors(['login_failed' => 'Username atau password salah.']);
        }
    }

}