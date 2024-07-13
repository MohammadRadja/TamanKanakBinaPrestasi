<?php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
     // Menampilkan formulir reset password
     public function showLinkRequestForm()
     {
         return view('/siswa/forgot-password'); // Ganti dengan path view yang sesuai
     }
     public function resetPassword(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'new_password' => 'required|min:6|confirmed',
            ], [
                'new_password.confirmed' => 'Password baru dan konfirmasi password baru tidak cocok.',
            ]);
        
     
         $user = Pengguna::where('email', $request->email)->first();
     
         if ($user) {
             $user->password = Hash::make($request->new_password);
             $user->save();
     
             return back()->with('status', 'Password berhasil diperbarui.');
         }
     
         return back()->withErrors(['email' => 'Email tidak ditemukan.']);
     }
    }
