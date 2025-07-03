<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NewsPolicy
{
    /**
     * Izinkan superadmin melakukan apa saja, kapan saja.
     * Ini akan dieksekusi sebelum method lainnya.
     */
    public function before(User $user, string $ability): bool|null
    {
        if ($user->role === 'superadmin') {
            return true;
        }
        return null; // Lanjutkan ke method lain jika bukan superadmin
    }

    /**
     * Tentukan apakah user boleh melihat menu & daftar berita.
     * Inilah yang mengontrol munculnya menu di sidebar.
     */
    public function viewAny(User $user): bool
    {
        // Izinkan jika rolenya adalah 'editor'
        return $user->role === 'editor';
    }

    /**
     * Tentukan apakah user boleh melihat detail satu berita.
     */
    public function view(User $user, News $news): bool
    {
        // Izinkan editor melihat berita jika kategorinya sesuai
        return $user->news_category_id === $news->news_category_id;
    }

    /**
     * Tentukan apakah user boleh membuat berita baru.
     */
    public function create(User $user): bool
    {
        // Izinkan editor membuat berita jika ia punya kategori
        return $user->role === 'editor' && !is_null($user->news_category_id);
    }

    /**
     * Tentukan apakah user boleh mengedit berita.
     */
    public function update(User $user, News $news): bool
    {
        // Izinkan editor mengedit berita jika kategorinya sesuai
        return $user->news_category_id === $news->news_category_id;
    }

    /**
     * Tentukan apakah user boleh menghapus berita.
     */
    public function delete(User $user, News $news): bool
    {
        // Editor tidak boleh menghapus, superadmin sudah diizinkan oleh method before()
        return false;
    }
}