@extends('layout.app')

@section('title', 'Selamat Datang di Hotel & Resort Kami')

@section('content')

    {{-- ====================================================================== --}}
    {{-- BAGIAN 1: SLIDESHOW TANPA RELASI NEWS (FINAL)                         --}}
    {{-- ====================================================================== --}}
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            
            @forelse ($slideshows as $slide)
                <div class="swiper-slide">
                    {{-- GAMBAR: Langsung dari kolom 'image' di tabel slideshows --}}
                    <div class="header-bgimage-1 bgimage-property" style="background-image: url('{{ asset('storage/' . $slide->image) }}');">
                        <div class="container heading-ff-1">
                            <div class="col-sm-12 header-div-1 heading-padding-1 text-center">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="swiper-slide">
                    <div class="header-bgimage-1 bgimage-property">
                        <div class="container heading-ff-1">
                            <div class="col-sm-12 header-div-1 heading-padding-1 text-center">
                                <h1>Tidak Ada Data Slideshow</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    

    {{-- ====================================================================== --}}
    {{-- BAGIAN 2: BERITA UTAMA / WELCOME SECTION                                --}}
    {{-- Menggantikan bagian 'Berita Terbaru' utama Anda.                      --}}
    {{-- Kita gunakan komponen 'Welcome Resort' dari template.                  --}}
    {{-- ====================================================================== --}}
    @if(isset($latestNews) && $latestNews->count() > 0)
        @php
            $firstNews = $latestNews->first();
            $otherNews = $latestNews->slice(1);
        @endphp
        <section class="section-1-bg section-padding" id="about">
            <div class="container heading-ff-1">
                <div class="row">
                    <div class="col-md-6 section-bottom-space20">
                        {{-- Mengambil gambar dari berita utama Anda --}}
                        <a href="{{ route('news.show' , $firstNews->slug) }}">
                            <img src="{{ asset('storage/' . $firstNews->thumbnail) }}" alt="{{ $firstNews->title }}" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-md-6">
                        {{-- Mengambil judul dan konten dari berita utama Anda --}}
                        <h3>{{ $firstNews->title }}</h3>
                        <p class="content-top-space">{!! \Str::limit($firstNews->content, 250) !!}</p>
                        <div class="btn-top-space btn1-div">
                            <a href="{{ route('news.show' , $firstNews->slug) }}" class="btn btn-1">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    {{-- ====================================================================== --}}
    {{-- BAGIAN 3: BERITA UNGGULAN (FEATURED NEWS)                               --}}
    {{-- Menggantikan 'Berita Unggulan' Anda.                                  --}}
    {{-- Kita gunakan komponen 'Rooms Offer' dari template, tapi kita modifikasi.--}}
    {{-- ====================================================================== --}}
    @if(isset($featuredNews) && $featuredNews->count() > 0)
        <section class="section-2-bg section-padding" id="rooms">
            <div class="container heading-ff-1">
                <div class="heading-div-1 text-center">
                    <h2>BERITA UNGGULAN</h2>
                    <img src="{{ asset('assets/images/hotel-booking/underline-1.png') }}" alt="underline"/>
                </div>
                <div class="row">
                    {{-- Loop melalui data $featuredNews Anda --}}
                    @foreach ($featuredNews as $news)
                        <div class="col-md-4 col-sm-6 section-bottom-space30">
                            <div class="resort-accordion">
                                <div class="accordion-main">
                                    <div class="accordion-title" style="position: relative;">
                                        <a href="{{ route('news.show' , $news->slug) }}">
                                            <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}" class="img-responsive" style="height: 250px; object-fit: cover;"/>
                                        </a>
                                        <div class="accordion-subtitle" style="width: 100%; bottom: 0; position: absolute; background: rgba(0,0,0,0.5); color: white;">
                                            {{-- Ganti dengan judul berita --}}
                                            <h4 style="margin-top: 10px;">{{ \Illuminate\Support\Str::limit($news->title, 40) }}</h4>
                                            {{-- Ganti dengan kategori --}}
                                            <p class="letter-spacing">{{ $news->newsCategory->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    {{-- ====================================================================== --}}
    {{-- BAGIAN 4: BERITA TERBARU LAINNYA                                       --}}
    {{-- Menggantikan daftar 'Berita Terbaru' Anda.                            --}}
    {{-- Kita gunakan komponen 'Latest News' dari template.                     --}}
    {{-- ====================================================================== --}}
    @if(isset($otherNews) && $otherNews->count() > 0)
        <section class="section-padding section-1-bg">
            <div class="container heading-ff-1">
                <div class="heading-div-1 text-center">
                    <h2>BERITA TERBARU LAINNYA</h2>
                    <img src="{{ asset('assets/images/hotel-booking/underline-1.png') }}" alt="underline"/>
                </div>
                @foreach ($otherNews->chunk(2) as $newsChunk)
                    <div class="row news1-bg news1-space">
                        @foreach ($newsChunk as $newsItem)
                            <div class="col-sm-6">
                                <div class="row" style="margin-bottom: 30px;">
                                    <div class="col-xs-5 no-padding">
                                        <a href="{{ route('news.show' , $newsItem->slug) }}">
                                            <img src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="{{ $newsItem->title }}" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-xs-7 news1-col-1" style="padding-left: 20px;">
                                        <h4><a href="{{ route('news.show' , $newsItem->slug) }}">{{ $newsItem->title }}</a></h4>
                                        <div class="news1-div">
                                            <ul class="content-ul news-ul">
                                                <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/24x24x1.png') }}" alt="date"/></a></li>
                                                <li><p class="letter-spacing font-weight600"><a href="#">{{ \Carbon\Carbon::parse($newsItem->created_at)->translatedFormat('d M, Y') }}</a></p></li>
                                            </ul>
                                            <ul class="content-ul news-ul news-ul-1">
                                                <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/24x24x2.png') }}" alt="category"/></a></li>
                                                <li><p class="letter-spacing font-weight600"><a href="#">{{ $newsItem->newsCategory->title }}</a></p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                 <div class="btn-top-space text-center">
                    <div class="btn1-div">
                        <a href="{{ route('news.all') }}" class="btn btn-1">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection