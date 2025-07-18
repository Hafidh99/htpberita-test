@extends('layout.app')

@section('title', 'Semua Berita')

@section('content')

    <!-- Hero Section / Slideshow -->
    <section class="hero-slideshow">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($slideshows as $slideshow)
                <div class="swiper-slide" style="background-image: url('{{ asset('storage/' . $slideshow->image) }}');">
                    <div class="slide-overlay"></div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Semua Berita</h1>
            <p class="page-header-subtitle">Jelajahi semua berita dan artikel yang telah kami publikasikan.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="news-grid">
                @forelse ($allNews as $newsItem)
                    <div class="news-card">
                        <a href="{{ route('news.show', $newsItem->slug) }}" class="news-image-link">
                            <div class="news-image">
                                <img src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="{{ $newsItem->title }}">
                            </div>
                        </a>
                        <div class="news-content">
                            <div class="news-meta">
                                <span class="news-category">{{ $newsItem->newsCategory->title }}</span>
                                <span class="news-date">{{ \Carbon\Carbon::parse($newsItem->created_at)->translatedFormat('d F Y') }}</span>
                            </div>
                            <a href="{{ route('news.show', $newsItem->slug) }}">
                                <h3>{{ \Illuminate\Support\Str::limit($newsItem->title, 55) }}</h3>
                            </a>
                            <p>{!! \Illuminate\Support\Str::limit(strip_tags($newsItem->content), 100) !!}</p>
                        </div>
                    </div>
                @empty
                    <p class="empty-message">Tidak ada berita tersedia saat ini.</p>
                @endforelse
            </div>

            <div class="pagination-wrapper">
                {{ $allNews->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection