<?php

namespace App\Controllers\Notification;

use App\Models\Notification;

class NotificationController
{
    // Fungsi untuk mengirim notifikasi kepada pengguna
    public function sendNotification($userId, $message)
    {
        // Logika untuk mengirim notifikasi kepada pengguna dan menyimpannya ke basis data
    }

    // Fungsi untuk menampilkan notifikasi pengguna
    public function showNotifications($userId)
    {
        // Logika untuk mengambil dan menampilkan notifikasi pengguna dari basis data
    }

    // Fungsi untuk menghapus notifikasi yang sudah dibaca
    public function clearReadNotifications($userId)
    {
        // Logika untuk menghapus notifikasi yang sudah dibaca oleh pengguna dari basis data
    }
}
