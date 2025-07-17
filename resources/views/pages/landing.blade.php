{{-- resources/views/landing.blade.php --}}

@extends('layout.app')

@section('title', 'Selamat Datang di Portal Berita HTP')

@section('content')

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="animate">Portal Berita Universitas Hang Tuah Pekanbaru</h1>
            <p class="animate">Sumber informasi terpercaya seputar kegiatan akademik, prestasi, dan event terbaru dari lingkungan UHT Pekanbaru.</p>
            <div class="btn-group">
                <a href="{{ route('news.all') }}" class="btn btn-primary animate">Lihat Semua Berita</a>
                <a href="#" class="btn btn-secondary animate">Tentang UHT</a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Keunggulan Portal Berita Kami</h2>
            <p>Temukan alasan mengapa portal berita kami menjadi sumber informasi utama Anda.</p>
        </div>

        <div class="features">
            <div class="feature-card animate">
                <div class="feature-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3>Berita Terkini & Akurat</h3>
                <p>Menyajikan informasi paling update dan terverifikasi langsung dari sumbernya di lingkungan kampus.</p>
            </div>

            <div class="feature-card animate">
                <div class="feature-icon">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <h3>Kategori Lengkap</h3>
                <p>Jelajahi berbagai kategori berita mulai dari Akademik, Kemahasiswaan, Olahraga, hingga Seni dan Budaya.</p>
            </div>

            <div class="feature-card animate">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Prestasi Mahasiswa</h3>
                <p>Memberikan sorotan utama pada pencapaian dan prestasi mahasiswa di berbagai bidang akademik dan non-akademik.</p>
            </div>
        </div>
    </div>
</section>

<section class="section news" style="background-color: var(--primary-light);">
    <div class="container">

        <div class="section-title">
            <h2>Berita Unggulan</h2>
            <p>Berita pilihan yang kami rekomendasikan khusus untuk Anda.</p>
        </div>

        {{-- Grid untuk Berita Unggulan --}}
        <div class="news-grid">
            @foreach ($featuredNews as $news)
                <div class="news-card">
                    <a href="{{ route('news.show', $news->slug) }}" class="news-image-link">
                        <div class="news-image">
                            <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}">
                        </div>
                    </a>
                    <div class="news-content">
                        <div class="news-meta" style="margin-bottom: 10px;">
                            <span class="news-category" style="background-color: var(--primary); color: white; padding: 3px 8px; border-radius: 5px; font-size: 0.8em;">{{ $news->newsCategory->title }}</span>
                            <span class="news-date" style="color: #718096; margin-left: 10px;">{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                        <a href="{{ route('news.show', $news->slug) }}">
                            <h3>{{ \Illuminate\Support\Str::limit($news->title, 55) }}</h3>
                        </a>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($news->content), 100) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="section news">
    <div class="container">
        <div class="section-title" style="margin-top: 80px;">
            <h2>Berita Terbaru</h2>
            <p>Ikuti perkembangan dan informasi terkini dari kampus kami.</p>
        </div>

        {{-- Grid untuk Berita Terbaru --}}
        <div class="news-grid">
            @foreach ($latestNews as $news)
                <div class="news-card">
                    <a href="{{ route('news.show', $news->slug) }}" class="news-image-link">
                        <div class="news-image">
                            <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}">
                        </div>
                    </a>
                    <div class="news-content">
                        <div class="news-meta" style="margin-bottom: 10px;">
                            <span class="news-category" style="background-color: var(--primary); color: white; padding: 3px 8px; border-radius: 5px; font-size: 0.8em;">{{ $news->newsCategory->title }}</span>
                            <span class="news-date" style="color: #718096; margin-left: 10px;">{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                        <a href="{{ route('news.show', $news->slug) }}">
                            <h3>{{ \Illuminate\Support\Str::limit($news->title, 55) }}</h3>
                        </a>
                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($news->content), 100) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div style="text-align: center; margin-top: 50px;">
            <a href="{{ route('news.all') }}" class="btn btn-primary" style="background-color: var(--primary); color: var(--white);">Lihat Semua Berita</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Animation on Scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.animate');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            // Trigger animation when element is 100px from the bottom of the viewport
            if (elementPosition < windowHeight - 100) {
                // Remove the 'animate' class and add a 'visible' class to trigger animation
                // This ensures the animation only runs once
                if (!element.classList.contains('visible')) {
                    element.classList.add('visible');
                }
            }
        });
    }

    // Initial check on page load
    document.addEventListener('DOMContentLoaded', animateOnScroll);
    
    // Check on scroll
    window.addEventListener('scroll', animateOnScroll);
</script>

{{-- Sedikit CSS tambahan untuk animasi --}}
<style>
    .animate {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .animate.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
@endpush