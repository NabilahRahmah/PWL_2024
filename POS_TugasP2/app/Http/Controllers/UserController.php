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
    //public function index() {
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
    // $data
    //     = [
    //         'level_id' => 2,
    //         'username' => 'manager_tiga',
    //         'nama' => 'Manager 3',
    //         'password' => Hash::make('12345')
    //     ];
    // UserModel::create($data);
    // $user = UserModel::all();
    // return view('user', ['data' => $user]);

    //Js4 Prak 2.1
        // $user = UserModel::findOr(1, ['username','nama'], function (){
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

    //Js4 Prak 2.2
        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

    //Js4 Prak 2.3
        // $user = UserModel::where('level_id', 2)->count('level_id');
        // return view('user', ['data' => $user]);

    //Js4 Prak 2.4
    // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // return view('user', ['data' => $user]);
        
    //     $user = UserModel::firstOrCreate(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'Manager',
    //     ],
    // );    
    //     return view('user', ['data' => $user]);
    
    //Langkah 8
    // $user = UserModel::firstOrNew(
    //         [
    //             'username' => 'manager33',
    //             'nama' => 'Manager Tiga Tiga',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2
    //         ],
    //     );
    //     $user -> save();
    //     return view('user', ['data' => $user]);

        //Praktikum 2.5 langkah 1
        // $user = UserModel::FirstOrCreate( [
        // 'username' => 'manager55',
        // 'nama' => 'Manager Lima Lima',
        // 'password' => Hash::make('12345'),
        // 'level_id'=> 2
        // ]);
        // $user -> username='Manager 56';

        // $user->isDirty();
        // $user->isDirty( 'username');
        // $user->isDirty('nama');
        // $user->isDirty( ['nama','username']);

        // $user->isClean();
        // $user->isClean( 'username');
        // $user->isClean('nama');
        // $user->isClean(['nama','username']);

        // $user->save();
        // $user->isDirty();
        // $user->isClean();

        // dd($user->isDirty());


        //Praktikum 2.5 Langkah 3
        // $user = UserModel::create([
        //     'username' => 'manager11',
        //     'nama' => 'Manager11',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2,
        // ]);

        // $user->username = 'manager12';

        // $user->save();

        // $user->wasChanged(); //true
        // $user->wasChanged('username'); //true
        // $user->wasChanged('username', 'level_id'); //true
        // $user->wasChanged('nama'); //false
        // dd($user->wasChanged(['nama', 'username'])); //true
        //}

        //JS4 PRAK 2.6
        // public function index(){
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        // }

        // public function tambah(){
        //     return view('user_tambah');
        // }
        
        // public function tambah_simpan(Request $request)
        // {
        //     UserModel::create([
        //         'username' => $request->username,
        //         'nama' => $request->nama,
        //         'password' => Hash::make('$request->password'),
        //         'level_id' => $request->level_id
        //     ]);
        //     return redirect('/user');
        // }
    
        // public function ubah($id) {
        //     $user = UserModel::find($id);
        //     return view('user_ubah', ['data' => $user]);
        // }
    
        // public function ubah_simpan($id, Request $request){
        //     $user = UserModel::find($id);
    
        //     $user->username = $request->username;
        //     $user->nama = $request->nama;
        //     $user->password = Hash::make('$request->passowrd');
        //     $user->level_id = $request->level_id;
    
        //     $user->save();
    
        //     return redirect('/user');
        // }
    
        // public function hapus($id) {
        //     $user = UserModel::find($id);
        //     $user->delete();
    
        //     return redirect('/user');
        // }

        
        //Prak 2.7
        public function index() {
        // $user = UserModel::with('level')->get();
        // dd($user);
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
        }
    }