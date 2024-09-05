<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function hello() {
    //     return 'Hello World';
    //     }
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Nama: Nabilah Rahmah Diyanah <br> NIM: 2241760014';
    }
    public function articles($id){
        return 'Halaman Dengan Id - '.$id;
    }

    //Praktikum3
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Bila']);
    //     }

    //No11
    public function hello(){
        return('Hello World');
        }
        public function greeting(){
        return view('blog.hello')
        ->with('name','Nabila')
        ->with('occupation','Astronaut');
        }
}
