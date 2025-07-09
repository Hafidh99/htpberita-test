<header>
    <nav class="topbar1 navbar navbar-default" id="top-nav1">
        <div class="container">
            <div class="logo-image1">
                {{-- Ganti dengan path logo Anda --}}
                <a href="#"><img src="{{ asset('assets/images/hotel-booking/350x150.png') }}" alt="logo" class="img-responsive" /></a>
            </div>
            <div class="logo1-image1">
                {{-- Ganti dengan path logo Anda versi kecil --}}
                <a href="#"><img src="{{ asset('assets/images/hotel-booking/150x50.png') }}" alt="logo-small" class="img-responsive" /></a>
            </div>

            <div class="navbar-right">
                <div class="nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="collapse navbar-collapse">
                            <div class="menu1-div">
                                <ul class="content-ul menu1-address">
                                    <li><img src="{{ asset('assets/images/hotel-booking/40x40x1.png') }}" alt="phone" /></li>
                                    <li>
                                        {{-- Ganti dengan nomor telepon Anda --}}
                                        <p class="letter-spacing">1-800-987-543</p>
                                        <p class="letter-spacing">1-765-987-234</p>
                                    </li>
                                </ul>
                                <ul class="content-ul menu1-address">
                                    <li><img src="{{ asset('assets/images/hotel-booking/40x40x2.png') }}" alt="email" /></li>
                                    <li>
                                         {{-- Ganti dengan email Anda --}}
                                        <p class="letter-spacing"><a href="#">login@domain.com</a> </p>
                                        <p class="letter-spacing"><a href="#">website@domain.com</a> </p>
                                    </li>
                                </ul>
                                <div class="menu-booknow btn1-div">
                                    <a href="#" class="btn btn-1">Book Now</a>
                                </div>
                            </div>
                            <ul class="nav navbar-nav menu1-ul" id="menu_1">
                                {{-- Nanti Anda bisa ganti href="#" dengan route('nama-route') --}}
                                <li class="menu">
                                    <a href="#home" class="booking-pagescroll letter-spacing font-weight600">HOME</a>
                                </li>
                                <li class="menu">
                                    <a href="#about" class="booking-pagescroll letter-spacing font-weight600">ABOUT</a>
                                </li>
                                <li class="menu">
                                    <a href="#rooms" class="booking-pagescroll letter-spacing font-weight600">ROOMS</a>
                                </li>
                                <li class="menu">
                                    <a href="#restaurant" class="booking-pagescroll letter-spacing font-weight600">RESTAURANT</a>
                                </li>
                                <li class="menu">
                                    <a href="#bar" class="booking-pagescroll letter-spacing font-weight600">NIGHT BAR</a>
                                </li>
                                <li class="menu">
                                    <a href="#contact" class="booking-pagescroll letter-spacing font-weight600">CONTACT US</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>