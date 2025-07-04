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
        Schema::table('authors', function (Blueprint $table) {
            // Menambahkan kolom foreign key 'news_category_id'
            // Pastikan tabel kategori Anda bernama 'news_categories'
            $table->foreignId('news_category_id')
                    ->nullable()
                    ->after('id') // Opsional: meletakkan kolom setelah kolom 'id'
                    ->constrained('news_categories')
                    ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            // Menghapus foreign key constraint terlebih dahulu
            $table->dropForeign(['news_category_id']);
            // Menghapus kolom
            $table->dropColumn('news_category_id');
        });
    }
};