<div class="footer1-section section-padding">
    <div class="container heading-ff-1">
        <div class="row footer1-row">
            <div class="col-xs-6 col-sm-6 col-md-3 footer1-col footer-bottom-res-space footer1-common-space">
                 {{-- Ganti dengan logo Anda --}}
                <a href="#"><img src="{{ asset('assets/images/hotel-booking/250x100x1.png') }}" alt="footer-logo" class="img-responsive" /></a>
                <ul class="content-ul footer1-icon">
                    {{-- Ganti dengan link sosial media Anda --}}
                    <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/32x32x1.png') }}" alt="fb" /></a></li>
                    <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/32x32x2.png') }}" alt="twitter" /></a></li>
                    <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/32x32x3.png') }}" alt="gplus" /></a></li>
                    <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/32x32x4.png') }}" alt="linkedin" /></a></li>
                    <li><a href="#"><img src="{{ asset('assets/images/hotel-booking/32x32x5.png') }}" alt="youtube" /></a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 footer1-col footer-bottom-res-space footer1-common-space">
                <h5>ADDRESS</h5>
                <ul class="content-ul footer1-address footer1-address-space">
                    <li><img src="{{ asset('assets/images/hotel-booking/32x32x6.png') }}" alt="email" /></li>
                    <li>
                        <p class="letter-spacing"><a href="#">company@mail.com</a> </p>
                    </li>
                </ul>
                <ul class="content-ul footer1-address footer1-address-space">
                    <li><img src="{{ asset('assets/images/hotel-booking/32x32x7.png') }}" alt="address" /></li>
                    <li>
                        <p class="letter-spacing">Jl. Jenderal Sudirman, Pekanbaru, Riau.</p>
                    </li>
                </ul>
                <ul class="content-ul footer1-address footer1-address-space">
                    <li><img src="{{ asset('assets/images/hotel-booking/32x32x8.png') }}" alt="website" /></li>
                    <li>
                        <p class="letter-spacing"><a href="#">www.websiteanda.com</a> </p>
                    </li>
                </ul>
                <ul class="content-ul footer1-address">
                    <li><img src="{{ asset('assets/images/hotel-booking/32x32x9.png') }}" alt="phone" /></li>
                    <li>
                        <p class="letter-spacing"> +62 812 3456 7890</p>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-2 footer1-col footer-bottom-res-space footer1-border-all">
                <h5>SITE LINKS</h5>
                <ul class="content-ul links">
                    <li><a href="#" class="letter-spacing">About Us</a></li>
                    <li><a href="#" class="letter-spacing">Rooms</a></li>
                    <li><a href="#" class="letter-spacing">Restaurant</a></li>
                    <li><a href="#" class="letter-spacing">Gallery</a></li>
                    <li><a href="#" class="letter-spacing">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4 footer1-col footer1-border-all">
                <h5>RECENT POST</h5>
                {{-- Bagian ini nanti bisa Anda buat dinamis dengan data dari database --}}
                <div class="popular-post clearfix">
                    <div class="post-img-1">
                        <a href="#"><img src="{{ asset('assets/images/hotel-booking/100x80x1.png') }}" alt="post" /></a>
                    </div>
                    <div class="post-1">
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                    </div>
                </div>
                <div class="popular-post top-space clearfix">
                    <div class="post-img-1 side-post-img">
                        <a href="#"><img src="{{ asset('assets/images/hotel-booking/100x80x2.png') }}" alt="post" /></a>
                    </div>
                    <div class="post-1">
                        <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="copyright1-bg">
    <div class="container copyright1 text-center">
        {{-- Menggunakan helper date() agar tahun otomatis update --}}
        <p class="letter-spacing">{{ date('Y') }} © All Rights Reserved | Made with ❤️</p>
    </div>
</footer>