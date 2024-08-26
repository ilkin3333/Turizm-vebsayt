<header>
    <!-- Main Navbar -->
    <div class="mainnavbar">
        <div class="navbar">
            <div class="left-navbar">
                <h1 style="font-style: italic">SIUSIU</h1>
            </div>
            <div class="center-navbar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="#menutours">Tours</a></li>
                    <li><a href="#menublog">Blog</a></li>
                    <li><a href="#menutickets">Air tickers</a></li>
                </ul>
            </div>
            <div class="navbarmenuicon"><i class="fa-solid fa-bars"></i></div>
            <div class="right-navbar">
                <div class="login">
                    @if(Auth::check())
                        <div class="pp">
                            <img src="{{ asset('storage/app/public/avatars' . Auth::user()->avatar) }}" alt="Profil Fotoğrafı" />
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Çıxış
                        </a>


                    @else
                        <a href="/login">Login</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
    <div class="altnavbar">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#menutours">Tours</a></li>
            <li><a href="#menublog">Blog</a></li>
            <li><a href="#menutickets">Air tickers</a></li>
        </ul>
    </div>

    <!-- Travel Hub Section -->
    <div class="travelhub">
        <div class="centertravel">
            <h2>TRIPS WITH US</h2>
            <h1>TRAVEL HUB</h1>
            <h3>PLAN YOUR TRIPS WITH US</h3>
        </div>
        <div class="right-travel">
            <div style="height: 100px;" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('front/assets/photo/slayd1.jpg')}}" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('front/assets/photo/slayd2.webp')}}" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('front/assets/photo/slayd3.jpg')}}" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('front/assets/photo/slayd4.webp')}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="search">
        <div class="search-menu">
            <ul>
                <div class="fortourrespo">
                    <li>
                        <a href="">TOURS <i class="fa-solid fa-briefcase"></i></a>
                    </li>
                    <li>
                        <a href="">HOUSING <i class="fa-solid fa-house"></i></a>
                    </li>
                </div>
                <div class="fortourrespo">
                    <li>
                        <a href="">AIR TICKETS <i class="fa-solid fa-plane"></i></a>
                    </li>
                    <li>
                        <a href="">CAR RENTAL <i class="fa-solid fa-car"></i></a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="ticket-search">
            <form class="search-form" id="search-form">
                <div class="form-group">
                    <label for="location-from">Haradan</label>
                    <select id="location-from" name="locationfrom" required></select>
                </div>
                <div class="form-group">
                    <label for="location-to">Haraya</label>
                    <select id="location-to" name="locationto" required></select>
                </div>
                <div class="form-group">
                    <label for="date-from">Reys tarixi</label>
                    <input type="date" id="date-from" name="datefrom" required />
                </div>
                <div class="form-group">
                    <label for="date-to">Çatış tarixi</label>
                    <input type="date" id="date-to" name="dateto" required />
                </div>
                <button type="submit">Bilet Ara</button>
                <div id="price-result"></div>
            </form>
        </div>
    </div>
</header>
