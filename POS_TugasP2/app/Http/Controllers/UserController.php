<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan profil pengguna berdasarkan ID dan nama
    public function show($id, $name)
    {
        // Dummy data untuk simulasi informasi user (dapat digantikan dengan database)
        $user = [
            'id' => $id,
            'name' => $name,
            'email' => 'user'.$id.'@example.com',
            'age' => 25 + $id // Hanya untuk simulasi
        ];

        return view('user', ['user' => $user]);
    }
}
