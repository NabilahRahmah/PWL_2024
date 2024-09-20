<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan profil pengguna berdasarkan ID dan nama
    // public function show($id, $name)
    // {
        // Dummy data untuk simulasi informasi user (dapat digantikan dengan database)
    //     $user = [
    //         'id' => $id,
    //         'name' => $name,
    //         'email' => 'user'.$id.'@example.com',
    //         'age' => 25 + $id // Hanya untuk simulasi
    //     ];

    //     return view('user', ['user' => $user]);
    // }

    //  NO 8 PRAKTIKUM 6
    public function index() {
    //     //tambah data user dengan Eloquent Model
    //     $data = [
    //         'username' => 'customer-1',
    //         'nama' => 'Pelanggan',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 3
    //     ];
    //     UserModel::insert($data); //tambahkan data ke table m_user

    //     // NO 5 PRAKTIKUM 6
    //     //coba akses model UserModel
    //     $user = UserModel::all(); //ambil semua data dari  table m_user
    //     return view('user', ['data' => $user]);

    // $data = [
    //     'nama' => 'Pelanggan Pertama'
    // ];    
    //     UserModel :: where('username', 'customer-1')->update($data);
        
    //     // coba akses mode usermodel
    //     $user = UserModel :: all(); // ambil semua data dari tabel m_user
    //     return view( 'user', ['data' => $user]);

     //Jobsheet 4 Prak 1.2
    $data
        = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345')
        ];
    UserModel::create($data);
    $user = UserModel::all();
    return view('user', ['data' => $user]);
    }
}
