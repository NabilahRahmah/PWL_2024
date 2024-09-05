<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    // Menampilkan halaman transaksi POS
    public function sale()
    {
        // Dummy data untuk simulasi item barang yang dijual
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 7000000],
            ['id' => 2, 'name' => 'Smartphone', 'price' => 3000000],
            ['id' => 3, 'name' => 'Mouse', 'price' => 150000],
        ];

        // Mengirim data produk ke view
        return view('sale', ['products' => $products]);
    }
}
