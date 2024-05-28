<?php

namespace App\Models;

use PDO;

class User
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    // Fungsi untuk membuat pengguna baru
    public function createUser($username, $email, $password)
    {
        // Logika untuk menyimpan data pengguna baru ke dalam basis data
    }

    // Fungsi untuk mengambil informasi pengguna berdasarkan ID
    public function getUserById($userId)
    {
        // Logika untuk mengambil informasi pengguna dari basis data berdasarkan ID
    }

    // Fungsi untuk mengambil informasi pengguna berdasarkan nama pengguna (username)
    public function getUserByUsername($username)
    {
        // Logika untuk mengambil informasi pengguna dari basis data berdasarkan nama pengguna (username)
    }

    // Fungsi untuk mengambil informasi pengguna berdasarkan alamat email
    public function getUserByEmail($email)
    {
        // Logika untuk mengambil informasi pengguna dari basis data berdasarkan alamat email
    }

    // Fungsi untuk memperbarui informasi pengguna
    public function updateUser($userId, $newData)
    {
        // Logika untuk memperbarui informasi pengguna di basis data
    }

    // Fungsi untuk menghapus pengguna
    public function deleteUser($userId)
    {
        // Logika untuk menghapus pengguna dari basis data
    }

    // Fungsi untuk melakukan autentikasi pengguna berdasarkan nama pengguna dan kata sandi
    public function authenticateUser($username, $password)
    {
        // Logika untuk memeriksa kecocokan nama pengguna dan kata sandi di basis data
    }

    // Fungsi untuk menambahkan teman baru untuk pengguna
    public function addFriend($userId, $friendId)
    {
        // Logika untuk menambahkan teman baru untuk pengguna di basis data
    }

    // Fungsi untuk menghapus teman dari daftar teman pengguna
    public function removeFriend($userId, $friendId)
    {
        // Logika untuk menghapus teman dari daftar teman pengguna di basis data
    }

    // Fungsi untuk mendapatkan daftar teman pengguna
    public function getFriends($userId)
    {
        // Logika untuk mengambil daftar teman pengguna dari basis data
    }
}
