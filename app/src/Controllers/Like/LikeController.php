<?php

namespace App\Controllers\Like;

use App\Models\Like;

class LikeController
{
    // Fungsi untuk memberi like pada posting
    public function likePost($postId, $userId)
    {
        // Logika untuk menambahkan like pada posting dan menyimpannya ke basis data
    }

    // Fungsi untuk menghapus like pada posting
    public function unlikePost($postId, $userId)
    {
        // Logika untuk menghapus like dari posting di basis data
    }

    // Fungsi untuk memberi like pada komentar
    public function likeComment($commentId, $userId)
    {
        // Logika untuk menambahkan like pada komentar dan menyimpannya ke basis data
    }

    // Fungsi untuk menghapus like pada komentar
    public function unlikeComment($commentId, $userId)
    {
        // Logika untuk menghapus like dari komentar di basis data
    }
}
