<?php

namespace App\Controllers;

use App\Utils\View;

class HomeController
{
    // Fungsi untuk menampilkan halaman utama aplikasi
    public function index()
    {
        // Logika untuk menampilkan halaman utama aplikasi
        return View::render('home'); // Mengembalikan tampilan 'home' ke browser
    }
}
