<?php

namespace App\Controllers\Post;

use App\Models\Post;

class PostController
{
    // Fungsi untuk menampilkan semua posting
    public function index()
    {
        // Logika untuk mengambil dan menampilkan semua posting
    }

    // Fungsi untuk menampilkan detail suatu posting
    public function show($postId)
    {
        // Logika untuk mengambil dan menampilkan detail suatu posting berdasarkan ID
    }

    // Fungsi untuk membuat posting baru
    public function create($userId, $content)
    {
        // Logika untuk membuat posting baru dan menyimpannya ke basis data
    }

    // Fungsi untuk mengedit posting
    public function update($postId, $content)
    {
        // Logika untuk mengedit posting dan menyimpan perubahannya ke basis data
    }

    // Fungsi untuk menghapus posting
    public function delete($postId)
    {
        // Logika untuk menghapus posting dari basis data
    }
}
