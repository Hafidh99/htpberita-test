<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // <-- 1. Import Gate
use App\Models\News;                 // <-- 2. Import Model News
use App\Policies\NewsPolicy;         // <-- 3. Import Policy News

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 4. Daftarkan policy di sini
        Gate::policy(News::class, NewsPolicy::class);
    }
}