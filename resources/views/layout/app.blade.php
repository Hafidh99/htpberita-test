<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <div class="w-full">    
        @include('includes.navbar')

        @yield('content')
    </div>


        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ asset('assets/js/swiper.js') }}"></script>
</body>
<footer class="bg-yellow-400 text-slate-800 mt-10">
    <div class="px-4 lg:px-14 py-10 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Logo dan Deskripsi -->
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/img/Logo1.png') }}" alt="Logo" class="w-10" 
                style="width: 40px; height: 40px;">
                <p class="text-xl font-bold">HTP Berita</p>
            </div>
            <p class="text-sm">Media informasi terpercaya seputar berita kampus, teknologi, dan gaya hidup.</p>
        </div>

        <!-- Info Kontak -->
        <div class="flex flex-col gap-2">
            <h3 class="text-lg font-semibold">Kontak</h3>
            <p>Email: htp@ac.id</a></p>
            <p>Telepon: 0811-7561-5130</p>
            <p>Alamat: Jl. Mustafa Sari, Pekanbaru</p>
        </div>

        <!-- Navigasi Footer -->
        <div class="flex flex-col gap-2">
            <h3 class="text-lg font-semibold">Tautan Cepat</h3>
            <a href="{{ route('landing') }}" class="hover:underline">Beranda</a>
            {{-- <a href="#" class="hover:underline">Tentang Kami</a> --}}
            {{-- <a href="#" class="hover:underline">Layanan</a> --}}
            {{-- <a href="#" class="hover:underline">Kebijakan Privasi</a> --}}
        </div>
    </div>

    <!-- Copyright -->
    <div class="text-center text-sm py-4 border-t border-yellow-300">
        &copy; {{ date('Y') }} HTP Berita. All rights reserved.
    </div>
</footer>


</html>