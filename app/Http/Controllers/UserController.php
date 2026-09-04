<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $reqs) {

    $validatedData = $reqs->validate([

        // inputan yang akan di isi
        'name' => ['required', 'min:3'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'min:8', 'max:10'],
        ],
        // Pesan error yang akan di munculkan "bahasa indonesia"
        [
            'name.required' => "Nama lengkap harus di isi",
            'name.min' => "Nama lengkap harus di isi mninmal 3 karakter",
            'email.required' => "Email harus di isi",
            'email.unique' => "email harus di isi dengan data yang belum terdaftar",
            'password.required' => "password harus di isi",
            'password.min' => "password harus di isi minimal 8 karakter",
            'password.max' => "password harus di isi minimal 10 karakter",
        ]);

        // simpan data ke databse : model
        // ELLOQUENT = create, delete,
        $createAccount = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
             // Hash::make mengubah pw plain text menjadi karakter acak yang tidak bisa dibaca/dikembalikan ke text aslinya 
            'password' => Hash::make($validatedData['password'])
        ]);

        return redirect()->route('login')->with('success', 'Berhasil membuat akun! silahkan login.');
    }

    public function login(Request $reqs) {
        $validatedData = $reqs->validate([
            //inputan yang akan di isi
            'email' => ['required'],
            'password' => ['required'],
        ],  [
            // pesan requirement (ubah ke indonesia)
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);
        // dd($reqs->all());

        // untuk proses auth ambil data selain _token csrf (email & password aja)
        $auth = $reqs->except(['_token']);
        // Auth::Attempt();
        // 1. cek pasangan email pw bener atau salah
        // 2. kalau bener, simpan data di session/cookies web
        // 3. kalau salah, tentukan aksi yg akan dilakukan
        $checkAuth = Auth::attempt($auth);

        if($checkAuth) {
            return redirect()->route('home')->with('success', 'Berhasil Login!');
        } else {
            return redirect()->route('login')->with('error', 'Email dan Password salah. Silahkan coba lagi!')->withInput();
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home')->with('success', 'Berhasil Logout!');
    }
}
