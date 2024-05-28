<?php

namespace App\Controllers\Comment;

use App\Models\Comment;

class CommentController
{
    // Fungsi untuk menambahkan komentar pada posting
    public function addComment($postId, $userId, $content)
    {
        // Logika untuk menambahkan komentar pada posting dan menyimpannya ke basis data
    }

    // Fungsi untuk mengedit komentar
    public function editComment($commentId, $content)
    {
        // Logika untuk mengedit komentar dan menyimpan perubahannya ke basis data
    }

    // Fungsi untuk menghapus komentar
    public function deleteComment($commentId)
    {
        // Logika untuk menghapus komentar dari basis data
    }
}
