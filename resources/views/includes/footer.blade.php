<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-about">
                <div class="footer-logo">
                    <img src="{{ asset('assets/img/Logo1.png') }}" alt="Logo HTP Berita">
                    <span>HTP BERITA</span>
                </div>
                <p>Portal berita resmi seputar kegiatan, prestasi, dan informasi terkini dari lingkungan kampus.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="{{ route('landing') }}">Beranda</a></li>
                    <li><a href="{{ route('news.all') }}">Semua Berita</a></li>
                    <li><a href="https://siakadm.htp.ac.id/">Sistem Akademik</a></li>
                    <li><a href="https://spmb.htp.ac.id/authspmb/view/">Penerimaan Mahasiswa</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Kontak Kami</h3>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Jenderal Sudirman, Pekanbaru, Riau.</p>
                <p><i class="fas fa-phone-alt"></i> +62 812 3456 7890</p>
                <p><i class="fas fa-envelope"></i> info@htp.ac.id</p>
                <p><i class="fas fa-clock"></i> Senin-Jumat: 08:00 - 17:00</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} HTP Berita. All Rights Reserved.</p>
        </div>
    </div>
</footer>   