<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        // Dummy data produk kategori Food & Beverage
        $products = [
            ['name' => 'Teh Pucuk', 'price' => 3000],
            ['name' => 'Good Day Freeze', 'price' => 18000],
            ['name' => 'Le Mineral', 'price' => 3000],
        ];

        return view('food-beverage', ['products' => $products]);
    }

    // Menampilkan daftar produk untuk kategori beauty & health
    public function beautyHealth()
    {
        // Dummy data produk kategori Beauty & Health
        $products = [
            ['name' => 'Sunsilk', 'price' => 18000],
            ['name' => 'Detol', 'price' => 5000],
            ['name' => 'Wardah Cushion ColorFit', 'price' => 150000],
        ];

        return view('beauty-health', ['products' => $products]);
    }

    // Menampilkan daftar produk untuk kategori Home Care
    public function homeCare()
    {
        $products = [
            ['name' => 'Pembersih Lantai', 'price' => 15000],
            ['name' => 'Sabun Cuci Piring', 'price' => 12000],
            ['name' => 'Pengharum Ruangan', 'price' => 18000],
        ];

        return view('home-care', ['products' => $products]);
    }

    // Menampilkan daftar produk untuk kategori Baby & Kid
    public function babyKid()
    {
        $products = [
            ['name' => 'Popok Bayi', 'price' => 40000],
            ['name' => 'Susu Formula', 'price' => 100000],
            ['name' => 'Mainan Edukatif', 'price' => 50000],
        ];

        return view('baby-kid', ['products' => $products]);
    }
}
