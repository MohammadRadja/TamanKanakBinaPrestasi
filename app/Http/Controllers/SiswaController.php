<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BiodataDiri;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use App\Models\Ekstrakurikuler;
use App\Models\JadwalMasukSekolah;
use App\Models\KegiatanHarian;
use App\Models\KegiatanHarianDetail;
use App\Models\KegiatanSemester;
use App\Models\MenuCookingClass;
use App\Models\MenuSehatPOMG;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Session::has('pengguna_id')) {
                return redirect('/login');
            }

            return $next($request);
        });
    }

    public function dashboard()
    {
        if (!session('pengguna_id')) {
            return redirect()->route('login')->withErrors(['message' => 'Anda harus login terlebih dahulu.']);
        }

        $pengguna_id = session('pengguna_id');
        $biodata = BiodataDiri::where('pengguna_id', $pengguna_id)->first();
        $siswa = Siswa::where('pengguna_id', $pengguna_id)->first();

        return view('main.dashboard', [
            'biodata' => $biodata,
            'siswa' => $siswa
        ]);
    }

    public function biodata()
    {
        if (!session('pengguna_id')) {
            return redirect()->route('login')->withErrors(['message' => 'Anda harus login terlebih dahulu.']);
        }

        $pengguna_id = session('pengguna_id');
        $biodata = BiodataDiri::where('pengguna_id', $pengguna_id)->first();

        return view('main.bio', [
            'biodata' => $biodata,
        ]);
    }
    
    public function biodatasave(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'nickName' => 'required|string|max:255',
            'gender' => 'required|string',
            'birthPlaceDate' => 'required|string|max:255',
            'agama' => 'required|string|max:50',
            'anakKe' => 'required|string|max:10',
            'parentNameAyah' => 'required|string|max:255',
            'parentNameIbu' => 'required|string|max:255',
            'profesiayah' => 'required|string|max:255',
            'profesiibu' => 'required|string|max:255',
            'telayah' => 'required|string|max:15',
            'address' => 'required|string|max:500',
        ]);

        try {
            $pengguna_id = session('pengguna_id');
            $biodata = BiodataDiri::updateOrCreate(
                ['pengguna_id' => $pengguna_id],
                [
                    'nama_lengkap' => $request->input('fullName'),
                    'nama_panggilan' => $request->input('nickName'),
                    'jenis_kelamin' => $request->input('gender'),
                    'tempat_tanggal_lahir' => $request->input('birthPlaceDate'),
                    'agama' => $request->input('agama'),
                    'anak_ke' => $request->input('anakKe'),
                    'nama_ayah' => $request->input('parentNameAyah'),
                    'nama_ibu' => $request->input('parentNameIbu'),
                    'pekerjaan_ayah' => $request->input('profesiayah'),
                    'pekerjaan_ibu' => $request->input('profesiibu'),
                    'no_hp' => $request->input('telayah'),
                    'alamat' => $request->input('address')
                ]
            );

            return redirect()->back()->with('success', 'Biodata berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan biodata: ' . $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        return redirect('/login')->with('success', 'Anda telah logout.');
    }

    public function profil()
    {
        // Ambil informasi pengguna yang sedang login
        $pengguna = Pengguna::findOrFail(Session::get('pengguna_id'));

        // Kirim data pengguna ke view profil
        return view('main.profil', compact('pengguna'));
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'password' => 'nullable|string|min:6|confirmed', // tambahkan validasi password
        ]);

        try {
            // Ambil pengguna yang sedang login
            $pengguna = Pengguna::findOrFail(Session::get('pengguna_id'));

            // Perbarui informasi profil
            $pengguna->nama_lengkap = $request->input('nama_lengkap');
            $pengguna->email = $request->input('email');

            // Perbarui password jika dimasukkan
            if ($request->filled('password')) {
                $pengguna->password = Hash::make($request->input('password'));

                // Simpan perubahan profil
                $pengguna->save();

                // Hapus semua s    ession
                Session::flush();

                // Redirect ke halaman login dengan pesan sukses
                return redirect('/login')->with('success', 'Password berhasil diubah. Silakan login kembali.');
            }

            // Simpan perubahan profil tanpa menghapus session
            $pengguna->save();

            return redirect()->route('siswa.profil')->with('success', 'Profil berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Gagal memperbarui profil. Silakan coba lagi.']);
        }
    }

    public function showJadwal()
    {
        // Ambil data dari masing-masing tabel menggunakan model

        $kegiatanHarian = KegiatanHarian::all();
        $kegiatanHarianDetail = KegiatanHarianDetail::all();
        $ekstrakurikuler = Ekstrakurikuler::all();
        $menuCookingClass = MenuCookingClass::all();
        $menuSehatPOMG = MenuSehatPOMG::all();
        $kegiatanSemester = KegiatanSemester::all();

        // Tampilkan view 'jadwal' dengan data yang telah diambil

        return view('main.jadwal', compact('kegiatanHarian', 'kegiatanHarianDetail', 'ekstrakurikuler', 'menuCookingClass', 'menuSehatPOMG', 'kegiatanSemester'));
    }
}
