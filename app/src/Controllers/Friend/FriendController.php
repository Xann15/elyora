<?php

namespace App\Controllers\Friend;

use App\Models\Friend;

class FriendController
{
    // Fungsi untuk menambahkan teman baru
    public function addFriend($userId, $friendId)
    {
        // Logika untuk menambahkan teman baru untuk pengguna dan menyimpannya ke basis data
    }

    // Fungsi untuk menghapus teman dari daftar teman
    public function removeFriend($userId, $friendId)
    {
        // Logika untuk menghapus teman dari daftar teman pengguna di basis data
    }

    // Fungsi untuk menampilkan daftar teman pengguna
    public function getFriends($userId)
    {
        // Logika untuk mengambil dan menampilkan daftar teman pengguna dari basis data
    }
}
