<header>
    <div class="container">
        <nav class="navbar">
            <a href="{{ route('landing') }}" class="logo">
                <img src="{{ asset('assets/img/Logo1.png') }}" alt="Logo HTP Berita">
                <div class="logo-text">HTP Berita</div>
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('landing') }}">Beranda</a></li>
                <li><a href="{{ route('news.all') }}">Berita</a></li>
                <li><a href="https://siakadm.htp.ac.id/">Sistem Akademik</a></li>
                <li><a href="https://spmb.htp.ac.id/authspmb/view/">Penerimaan Mahasiswa</a></li>
            </ul>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>
</header>