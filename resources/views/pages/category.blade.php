@extends('layout.app')

@section('title', 'Kategori: ' . $category->title)

@section('content')
    <section class="page-header">
        <div class="container">
            <p class="page-header-subtitle">Menampilkan Berita untuk Kategori</p>
            <h1 class="page-header-title">{{ $category->title }}</h1>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="news-grid">
                @forelse ($news as $newsItem)
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
                    <p class="empty-message">Tidak ada berita yang ditemukan dalam kategori ini.</p>
                @endforelse
            </div>
             <div class="pagination-wrapper">
                {{ $news->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection