<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom 'role' dengan nilai default 'editor'
            // agar semua user baru otomatis menjadi editor.
            $table->string('role')->default('editor')->after('password');

            // Menambahkan kolom foreign key untuk news_category_id.
            // Kolom ini boleh kosong (nullable) karena superadmin tidak terikat kategori.
            $table->foreignId('news_category_id')
                    ->nullable()
                    ->after('role')
                    ->constrained('news_categories') // Asumsi nama tabel kategori adalah 'news_categories'
                    ->onDelete('set null'); // Jika kategori dihapus, kolom ini jadi null
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus foreign key constraint terlebih dahulu
            $table->dropForeign(['news_category_id']);
            // Hapus kolomnya
            $table->dropColumn(['role', 'news_category_id']);
        });
    }
};