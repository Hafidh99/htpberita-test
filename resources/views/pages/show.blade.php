@extends('layout.app')

@section('title', $news->title)

@section('content')
    <div class="section">
        <div class="container">
            <div class="news-detail-layout">
                <article class="news-detail-content">
                    <div class="news-meta">
                        <span class="news-category">{{ $news->newsCategory->title }}</span>
                        <span class="news-date">{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</span>
                    </div>
                    <h1 class="news-detail-title">{{ $news->title }}</h1>
                    <img class="news-detail-thumbnail" src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}">
                    
                    <div class="news-article-body">
                        {!! $news->content !!}
                    </div>
                </article>

                <aside class="news-sidebar">
                    <div class="sidebar-sticky-inner">
                        <h3 class="sidebar-title">Berita Lainnya</h3>
                        <div class="sidebar-news-list">
                            @foreach ($newestNews as $new)
                                <a href="{{ route('news.show', $new->slug) }}" class="sidebar-news-card">
                                    <img src="{{ asset('storage/' . $new->thumbnail) }}" alt="{{ $new->title }}">
                                    <div class="sidebar-news-content">
                                        <h4>{{ \Illuminate\Support\Str::limit($new->title, 50) }}</h4>
                                        <span class="sidebar-news-date">{{ \Carbon\Carbon::parse($new->created_at)->translatedFormat('d F Y') }}</span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection