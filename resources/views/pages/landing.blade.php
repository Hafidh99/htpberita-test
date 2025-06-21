@extends('layout.app')

@section('title', 'HTP Berita')
@section('content')
        <!-- swiper -->
        <div class="swiper mySwiper mt-9">
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide">
            <a href="{{ route('news.show' , $banner->news->slug)}}" class="block">
                <div class="relative flex flex-col gap-1 justify-end p-3 h-72 rounded-xl bg-cover bg-center overflow-hidden"
                style="background-image: url('{{ asset('storage/' . $banner->news->thumbnail) }}')">
                <div
                    class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-[rgba(0,0,0,0.4)] to-[rgba(0,0,0,0)] rounded-b-xl">
                </div>
                <div class="relative z-10 mb-3" style="padding-left: 10px;">
                    <div class="bg-primary text-white text-xs rounded-lg w-fit px-3 py-1 font-normal mt-3"> {{ $banner->news->newsCategory->title }} </div>
                    <p class="text-3xl font-semibold text-white mt-1">{{ $banner->news->title }}</p>
                    <div class="flex items-center gap-1 mt-1">
                    <img src="{{ asset('storage/' . $banner->news->author->avatar) }}" alt="" class="w-5 h-5 rounded-full">
                    <p class="text-white text-xs">{{ $banner->news->author->name }}</p>
                    </div>
                </div>
                </div>
            </a>
            </div>
            @endforeach
        </div>
        </div>

        
        <!-- Berita Unggulan -->
        <div class="flex flex-col px-14 mt-10 ">
        <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
            
            <div class="font-bold text-2xl text-center md:text-left">
            <p>Berita Unggulan</p>
            <p>Untuk Kamu</p>
            </div>
        </div>
        <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
            @foreach ($featuredNews as $news)
            <a href="{{ route('news.show' , $news->slug) }}">
                <div class="relative border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out" style="height: 100%">
                    <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute z-10">
                        {{ $news->newsCategory->title }}
                    </div>
                    <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}" class="w-full rounded-xl mb-3" style="height: 150px; witdh: 80px; object-fit: cover;">
                    <p class="font-bold text-base mb-1">{{ \Illuminate\Support\Str::limit($news->title, 60) }}</p>
                    <p class="text-slate-400">{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y') }}</p>
                </div>
            </a>
            @endforeach
        </div>

        </div>

        <!-- Berita Terbaru -->
        <div class="flex flex-col px-4 md:px-10 lg:px-14 mt-10">
        <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
            <div class="font-bold text-2xl text-center md:text-left">
            <p>Berita Terbaru</p>
            </div>
            <a href="{{ route('news.all') }}"
            class="bg-primary px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit">
            Lihat Semua
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-12 gap-5">
            <!-- Berita Utama -->
            @php
                $firstNews = $latestNews->first();
                $otherNews = $latestNews->slice(1);
            @endphp
            <div class="relative col-span-7 lg:row-span-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
                <a href="{{ route('news.show' , $firstNews->slug) }}">
                    <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-5 mt-5 absolute">
                        {{ $firstNews->newsCategory->title }}
                    </div>
                    <img src="{{ asset('storage/' . $firstNews->thumbnail) }}" alt="berita1" class="rounded-2xl w-full h-auto object-cover" style="height: 300px; width: 100%; object-fit: cover;">
                    <p class="font-bold text-xl mt-3">{{ $firstNews->title }}</p>
                    <p class="text-slate-400 text-base mt-1">{!! \Str::limit($firstNews->content, 100) !!}</p>
                    <p class="text-slate-400 text-base mt-1">{{ $firstNews->created_at }}</p>
                </a>
            </div>


            <!-- Berita 1 -->
            @foreach ($otherNews as $newsItem)
            <a href="{{ route('news.show' , $newsItem->slug) }}"
            class="relative col-span-5 flex flex-col h-fit md:flex-row gap-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
            <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">
                {{ $newsItem->newsCategory->title }}</div>
            <img src="{{ asset('storage/' . $newsItem->thumbnail) }}" alt="berita2" class="rounded-xl md:max-h-48" style="width: 240px; height: 100px; object-fit: cover;">
            <div class="mt-2 md:mt-0">
                <p class="font-semibold text-lg">{{ $newsItem->title }}</p>
                <p class="text-slate-400 mt-3 text-sm font-normal">
                    {!! \Str::limit($newsItem->content ?? '', 100) !!}</p>
                </p>
            </div>
            </a>
            @endforeach

            
@endsection