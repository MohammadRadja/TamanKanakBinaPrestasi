<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Siswa; 
use App\Models\BiodataDiri;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log; // Tambahkan ini


class AdminController extends Controller
{
  
    public function __construct()
    {
        // Middleware untuk memeriksa peran admin
        $this->middleware(function ($request, $next) {
            if ($request->is('admin/*') && $request->session()->has('pengguna_id')) {
                $pengguna = Pengguna::findOrFail($request->session()->get('pengguna_id'));
                if ($pengguna->role !== 'admin') {
                    return redirect()->route('login')->with('error', 'Anda bukan admin. Akses ditolak.');
                }
            } elseif ($request->is('admin/*')) {
                return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
            }
    
            return $next($request);
        });
    }
  
    public function dashboard()
    {
        $adminId = session('pengguna_id');
        $admin = Pengguna::findOrFail($adminId);

        return view('admin.dashboard', compact('admin'));
    }
    
    
    // Method untuk halaman data siswa
    public function dataSiswa()
    {
        // Ambil semua pengguna dengan role 'siswa'
        $siswa = Pengguna::where('role', 'siswa')->get();
        return view('admin.data_siswa', ['siswa' => $siswa]);
    }
    
// Method untuk menampilkan biodata siswa
    public function viewBiodata($id)
    {
        // Ambil biodata berdasarkan pengguna ID
        $biodata = BiodataDiri::where('pengguna_id', $id)->firstOrFail();
        return view('admin.view_biodata', ['biodata' => $biodata]);
    }
    
    // AdminController.php
    public function tambahSiswaView(){
    return view('admin.tambah_siswa');
    }

    public function tambahSiswa(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:20',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'anak_ke' => 'required|integer',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ayah' => 'required|string|max:255',
            'pekerjaan_ibu' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'username' => 'required|string|max:50|unique:pengguna',
            'email' => 'required|string|email|max:100|unique:pengguna',
            'password' => 'required|string|min:6',
        ]);

        $pengguna = Pengguna::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'username' => $request->input('username'), // tambahkan sesuai dengan input form
            'email' => $request->input('email'), // tambahkan sesuai dengan input form
            'password' => Hash::make($request->input('password')),
            'role' => 'siswa', 
        ]);
        
        $siswa = Siswa::create([
            'nama' => $request->input('nama_lengkap'), // Adjust according to your field name in the 'siswa' table
            'tempat_tanggal_lahir' => $request->input('tempat_tanggal_lahir'),
            'alamat' => $request->input('alamat'), // Adjust according to your field name in the 'siswa' table
            'pengguna_id' => $request->session()->get('pengguna_id'), // Assuming you have stored the logged-in user's ID in the session
        ]);

        $biodata = BiodataDiri::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'nama_panggilan' => $request->input('nama_panggilan'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_tanggal_lahir' => $request->input('tempat_tanggal_lahir'),
            'agama' => $request->input('agama'),
            'anak_ke' => $request->input('anak_ke'),
            'nama_ayah' => $request->input('nama_ayah'),
            'nama_ibu' => $request->input('nama_ibu'),
            'pekerjaan_ayah' => $request->input('pekerjaan_ayah'),
            'pekerjaan_ibu' => $request->input('pekerjaan_ibu'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
            'pengguna_id' => $request->session()->get('pengguna_id'), 
            
        ]);

    // Redirect with a success message
    return redirect()->route('admin.data_siswa')->with('success', 'Data siswa berhasil ditambahkan');
}

    public function editSiswa($id)
{
    $siswa = Pengguna::findOrFail($id); // Ensure you are getting a single model instance
    $biodata = BiodataDiri::where('pengguna_id', $id)->firstOrFail();
    return view('admin.edit_siswa', compact('siswa', 'biodata'));
}

public function updateSiswa(Request $request, $id)
{
    $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'nama_panggilan' => 'required|string|max:100',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'tempat_tanggal_lahir' => 'required|string',
        'agama' => 'required|string',
        'anak_ke' => 'required|integer',
        'nama_ayah' => 'required|string|max:100',
        'nama_ibu' => 'required|string|max:100',
        'pekerjaan_ayah' => 'required|string',
        'pekerjaan_ibu' => 'required|string',
        'no_hp' => 'required|string',
        'alamat' => 'required|string',
    ]);

    $siswa = Pengguna::findOrFail($id);
    $siswa->update([
        'nama_lengkap' => $request->nama_lengkap,
    ]);

    $biodata = BiodataDiri::where('pengguna_id', $id)->firstOrFail();
    $biodata->update([
        'nama_panggilan' => $request->nama_panggilan,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
        'agama' => $request->agama,
        'anak_ke' => $request->anak_ke,
        'nama_ayah' => $request->nama_ayah,
        'nama_ibu' => $request->nama_ibu,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'pekerjaan_ibu' => $request->pekerjaan_ibu,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
    ]);

    return redirect()->route('admin.data_siswa')->with('success', 'Data siswa berhasil ditambahkan');
}


public function deleteSiswa($id)
{
    $siswa = Pengguna::findOrFail($id);
    $siswa->delete();

    return redirect()->route('admin.data_siswa')->with('success', 'Data siswa berhasil dihapus.');
}
}
