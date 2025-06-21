@extends('layout.app') 

@section('content')
<div class="flex flex-col px-4 md:px-10 lg:px-14 mt-10">
    <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
            <p>Semua Berita</p>
        </div>
        <a href="{{ route('landing') }}" class="bg-primary px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit">
            Kembali ke Beranda
        </a>
    </div>

    <!-- Daftar Semua Berita -->
    <div class="grid grid-cols-1 gap-6">
        @forelse ($allNews as $newsItem)
            <a href="{{ route('news.show', $newsItem->slug) }}"
                class="relative flex flex-col md:flex-row gap-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
                
                <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">
                    {{ $newsItem->newsCategory->title }}
                </div>

                <img src="{{ asset('storage/' . $newsItem->thumbnail) }}"
                        alt="thumbnail"
                        class="rounded-xl md:max-h-48"
                        style="width: 240px; height: 100px; object-fit: cover;">

                <div class="mt-2 md:mt-0">
                    <p class="font-semibold text-lg">{{ $newsItem->title }}</p>
                    <p class="text-slate-400 mt-3 text-sm font-normal">
                        {!! \Str::limit($newsItem->content ?? '', 100) !!}
                    </p>
                </div>
            </a>
        @empty
            <p class="text-center text-slate-500">Tidak ada berita tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
