@extends('front.layouts.app')
@section('content')
    <div id="menutours" class="popular-categories">
        <div class="popular-alt">
            <h1 class="decorative-title">POPULAR CATEGORIES</h1>
            <div class="category-nav">
                <div class="category" data-index="0">TRADES SERVICES</div>
                <div class="category" data-index="1">CONSTYUCTION</div>
                <div class="category" data-index="2">EDUCATION</div>
                <div class="category" data-index="3">HOSBITALITY</div>
                <div class="category" data-index="4">HEALTHING</div>
            </div>
            <div class="slider">
                <div class="slider-wrapper">
                    <!-- Slide for Category 1 -->
                    <div class="slide" data-index="0">
                        <div class="slide-content">
                            <div class="tour" id="hotel1-cat1">
                                <img src="{{asset('front/assets/photo/hoteller/hotel1.jpg')}}" alt="Rose Hotel" />
                                ROSE HOTEL
                            </div>
                            <div class="info" id="info-hotel1-cat1">
                                <h2>Rose Hotel</h2>
                                <p>
                                    Rose Hotel, modern ve şık tasarımıyla dikkat çeken, şehir
                                    merkezine yakın konumda bir oteldir. Geniş odaları ve
                                    muhteşem şehir manzarasıyla konuklarına unutulmaz bir
                                    konaklama deneyimi sunar. Otelde ayrıca 24 saat açık bir
                                    spor salonu, spa hizmetleri ve gurme restoran bulunmaktadır.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel1-cat1')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel2-cat1">
                                <img src="{{asset('front/assets/photo/hoteller/hotel2.jpg')}}" alt="Sunset Inn" />

                                SUNSET INN
                            </div>
                            <div class="info" id="info-hotel2-cat1">
                                <h2>Sunset Inn</h2>
                                <p>
                                    Sunset Inn, sahil kenarında konforlu bir konaklama sunar.
                                    Rahat odaları ve harika deniz manzarası ile tatilciler için
                                    mükemmel bir tercih olan bu otel, aynı zamanda açık yüzme
                                    havuzu ve lezzetli yemeklerin sunulduğu restoranıyla da
                                    bilinir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel2-cat1')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel3-cat1">
                                <img src="{{asset('front/assets/photo/hoteller/hotel3.jpg')}}" alt="Mountain Lodge" />

                                MOUNTAIN LODGE
                            </div>
                            <div class="info" id="info-hotel3-cat1">
                                <h2>Mountain Lodge</h2>
                                <p>
                                    Mountain Lodge, dağ manzaralı odaları ve doğal çevresiyle
                                    dikkat çeker. Misafirlerine doğa ile iç içe bir deneyim
                                    sunan bu otel, ayrıca yürüyüş parkurları ve açık hava
                                    aktiviteleri için ideal bir yerdir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel3-cat1')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel4-cat1">
                                <img
                                    src="{{asset('front/assets/photo/hoteller/hotel4.jpg')}}"
                                    alt="City Central Hotel"
                                />

                                CITY CENTRAL HOTEL
                            </div>
                            <div class="info" id="info-hotel4-cat1">
                                <h2>City Central Hotel</h2>
                                <p>
                                    City Central Hotel, şehrin kalbinde yer alan ve alışveriş
                                    bölgelerine yakın konumda bulunan bir oteldir. Konforlu
                                    odaları, modern olanakları ve çeşitli yemek seçenekleri ile
                                    konuklarına rahat bir konaklama sunar.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel4-cat1')"
                                >
                                    Kapat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide for Category 2 -->
                    <div class="slide" data-index="1">
                        <div class="slide-content">
                            <div class="tour" id="hotel1-cat2">
                                <img src="{{asset('front/assets/photo/hoteller/hotel1.jpg')}}" alt="Rose Hotel" />
                                <div class="favorite-icon">&#9825;</div>
                                ROSE HOTEL
                            </div>
                            <div class="info" id="info-hotel1-cat2">
                                <h2>Rose Hotel</h2>
                                <p>
                                    Rose Hotel, modern ve şık tasarımıyla dikkat çeken, şehir
                                    merkezine yakın konumda bir oteldir. Geniş odaları ve
                                    muhteşem şehir manzarasıyla konuklarına unutulmaz bir
                                    konaklama deneyimi sunar. Otelde ayrıca 24 saat açık bir
                                    spor salonu, spa hizmetleri ve gurme restoran bulunmaktadır.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel1-cat2')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel2-cat2">
                                <img src="{{asset('front/assets/photo/hoteller/hotel2.jpg')}}" alt="Sunset Inn" />
                                <div class="favorite-icon">&#9825;</div>
                                SUNSET INN
                            </div>
                            <div class="info" id="info-hotel2-cat2">
                                <h2>Sunset Inn</h2>
                                <p>
                                    Sunset Inn, sahil kenarında konforlu bir konaklama sunar.
                                    Rahat odaları ve harika deniz manzarası ile tatilciler için
                                    mükemmel bir tercih olan bu otel, aynı zamanda açık yüzme
                                    havuzu ve lezzetli yemeklerin sunulduğu restoranıyla da
                                    bilinir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel2-cat2')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel3-cat2">
                                <img src="{{asset('front/assets/photo/hoteller/hotel3.jpg')}}" alt="Mountain Lodge" />
                                <div class="favorite-icon">&#9825;</div>
                                MOUNTAIN LODGE
                            </div>
                            <div class="info" id="info-hotel3-cat2">
                                <h2>Mountain Lodge</h2>
                                <p>
                                    Mountain Lodge, dağ manzaralı odaları ve doğal çevresiyle
                                    dikkat çeker. Misafirlerine doğa ile iç içe bir deneyim
                                    sunan bu otel, ayrıca yürüyüş parkurları ve açık hava
                                    aktiviteleri için ideal bir yerdir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel3-cat2')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel4-cat2">
                                <img
                                    src="{{asset('front/assets/photo/hoteller/hotel4.jpg')}}"
                                    alt="City Central Hotel"
                                />
                                <div class="favorite-icon">&#9825;</div>
                                CITY CENTRAL HOTEL
                            </div>
                            <div class="info" id="info-hotel4-cat2">
                                <h2>City Central Hotel</h2>
                                <p>
                                    City Central Hotel, şehrin kalbinde yer alan ve alışveriş
                                    bölgelerine yakın konumda bulunan bir oteldir. Konforlu
                                    odaları, modern olanakları ve çeşitli yemek seçenekleri ile
                                    konuklarına rahat bir konaklama sunar.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel4-cat2')"
                                >
                                    Kapat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide for Category 3 -->
                    <div class="slide" data-index="2">
                        <div class="slide-content">
                            <div class="tour" id="hotel1-cat3">
                                <img src="{{asset('front/assets/photo/hoteller/hotel1.jpg')}}" alt="Rose Hotel" />
                                <div class="favorite-icon">&#9825;</div>
                                ROSE HOTEL
                            </div>
                            <div class="info" id="info-hotel1-cat3">
                                <h2>Rose Hotel</h2>
                                <p>
                                    Rose Hotel, modern ve şık tasarımıyla dikkat çeken, şehir
                                    merkezine yakın konumda bir oteldir. Geniş odaları ve
                                    muhteşem şehir manzarasıyla konuklarına unutulmaz bir
                                    konaklama deneyimi sunar. Otelde ayrıca 24 saat açık bir
                                    spor salonu, spa hizmetleri ve gurme restoran bulunmaktadır.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel1-cat3')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel2-cat3">
                                <img src="{{asset('front/assets/photo/hoteller/hotel2.jpg')}}" alt="Sunset Inn" />
                                <div class="favorite-icon">&#9825;</div>
                                SUNSET INN
                            </div>
                            <div class="info" id="info-hotel2-cat3">
                                <h2>Sunset Inn</h2>
                                <p>
                                    Sunset Inn, sahil kenarında konforlu bir konaklama sunar.
                                    Rahat odaları ve harika deniz manzarası ile tatilciler için
                                    mükemmel bir tercih olan bu otel, aynı zamanda açık yüzme
                                    havuzu ve lezzetli yemeklerin sunulduğu restoranıyla da
                                    bilinir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel2-cat3')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel3-cat3">
                                <img src="{{asset('front/assets/photo/hoteller/hotel3.jpg')}}" alt="Mountain Lodge" />
                                <div class="favorite-icon">&#9825;</div>
                                MOUNTAIN LODGE
                            </div>
                            <div class="info" id="info-hotel3-cat3">
                                <h2>Mountain Lodge</h2>
                                <p>
                                    Mountain Lodge, dağ manzaralı odaları ve doğal çevresiyle
                                    dikkat çeker. Misafirlerine doğa ile iç içe bir deneyim
                                    sunan bu otel, ayrıca yürüyüş parkurları ve açık hava
                                    aktiviteleri için ideal bir yerdir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel3-cat3')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel4-cat3">
                                <img
                                    src="{{asset('front/assets/photo/hoteller/hotel4.jpg')}}"
                                    alt="City Central Hotel"
                                />
                                <div class="favorite-icon">&#9825;</div>
                                CITY CENTRAL HOTEL
                            </div>
                            <div class="info" id="info-hotel4-cat3">
                                <h2>City Central Hotel</h2>
                                <p>
                                    City Central Hotel, şehrin kalbinde yer alan ve alışveriş
                                    bölgelerine yakın konumda bulunan bir oteldir. Konforlu
                                    odaları, modern olanakları ve çeşitli yemek seçenekleri ile
                                    konuklarına rahat bir konaklama sunar.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel4-cat3')"
                                >
                                    Kapat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide for Category 4 -->
                    <div class="slide" data-index="3">
                        <div class="slide-content">
                            <div class="tour" id="hotel1-cat4">
                                <img src="{{asset('front/assets/photo/hoteller/hotel1.jpg')}}" alt="Rose Hotel" />
                                <div class="favorite-icon">&#9825;</div>
                                ROSE HOTEL
                            </div>
                            <div class="info" id="info-hotel1-cat4">
                                <h2>Rose Hotel</h2>
                                <p>
                                    Rose Hotel, modern ve şık tasarımıyla dikkat çeken, şehir
                                    merkezine yakın konumda bir oteldir. Geniş odaları ve
                                    muhteşem şehir manzarasıyla konuklarına unutulmaz bir
                                    konaklama deneyimi sunar. Otelde ayrıca 24 saat açık bir
                                    spor salonu, spa hizmetleri ve gurme restoran bulunmaktadır.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel1-cat4')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel2-cat4">
                                <img src="{{asset('front/assets/photo/hoteller/hotel2.jpg')}}" alt="Sunset Inn" />
                                <div class="favorite-icon">&#9825;</div>
                                SUNSET INN
                            </div>
                            <div class="info" id="info-hotel2-cat4">
                                <h2>Sunset Inn</h2>
                                <p>
                                    Sunset Inn, sahil kenarında konforlu bir konaklama sunar.
                                    Rahat odaları ve harika deniz manzarası ile tatilciler için
                                    mükemmel bir tercih olan bu otel, aynı zamanda açık yüzme
                                    havuzu ve lezzetli yemeklerin sunulduğu restoranıyla da
                                    bilinir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel2-cat4')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel3-cat4">
                                <img src="{{asset('front/assets/photo/hoteller/hotel3.jpg')}}" alt="Mountain Lodge" />
                                <div class="favorite-icon">&#9825;</div>
                                MOUNTAIN LODGE
                            </div>
                            <div class="info" id="info-hotel3-cat4">
                                <h2>Mountain Lodge</h2>
                                <p>
                                    Mountain Lodge, dağ manzaralı odaları ve doğal çevresiyle
                                    dikkat çeker. Misafirlerine doğa ile iç içe bir deneyim
                                    sunan bu otel, ayrıca yürüyüş parkurları ve açık hava
                                    aktiviteleri için ideal bir yerdir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel3-cat4')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel4-cat4">
                                <img
                                    src="{{asset('front/assets/photo/hoteller/hotel4.jpg')}}"
                                    alt="City Central Hotel"
                                />
                                <div class="favorite-icon">&#9825;</div>
                                CITY CENTRAL HOTEL
                            </div>
                            <div class="info" id="info-hotel4-cat4">
                                <h2>City Central Hotel</h2>
                                <p>
                                    City Central Hotel, şehrin kalbinde yer alan ve alışveriş
                                    bölgelerine yakın konumda bulunan bir oteldir. Konforlu
                                    odaları, modern olanakları ve çeşitli yemek seçenekleri ile
                                    konuklarına rahat bir konaklama sunar.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel4-cat4')"
                                >
                                    Kapat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide for Category 5 -->
                    <div class="slide" data-index="4">
                        <div class="slide-content">
                            <div class="tour" id="hotel1-cat5">
                                <img src="{{asset('front/assets/photo/hoteller/hotel1.jpg')}}" alt="Rose Hotel" />
                                <div class="favorite-icon">&#9825;</div>
                                ROSE HOTEL
                            </div>
                            <div class="info" id="info-hotel1-cat5">
                                <h2>Rose Hotel</h2>
                                <p>
                                    Rose Hotel, modern ve şık tasarımıyla dikkat çeken, şehir
                                    merkezine yakın konumda bir oteldir. Geniş odaları ve
                                    muhteşem şehir manzarasıyla konuklarına unutulmaz bir
                                    konaklama deneyimi sunar. Otelde ayrıca 24 saat açık bir
                                    spor salonu, spa hizmetleri ve gurme restoran bulunmaktadır.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel1-cat5')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel2-cat5">
                                <img src="{{asset('front/assets/photo/hoteller/hotel2.jpg')}}" alt="Sunset Inn" />
                                <div class="favorite-icon">&#9825;</div>
                                SUNSET INN
                            </div>
                            <div class="info" id="info-hotel2-cat5">
                                <h2>Sunset Inn</h2>
                                <p>
                                    Sunset Inn, sahil kenarında konforlu bir konaklama sunar.
                                    Rahat odaları ve harika deniz manzarası ile tatilciler için
                                    mükemmel bir tercih olan bu otel, aynı zamanda açık yüzme
                                    havuzu ve lezzetli yemeklerin sunulduğu restoranıyla da
                                    bilinir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel2-cat5')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel3-cat5">
                                <img src="{{asset('front/assets/photo/hoteller/hotel3.jpg')}}" alt="Mountain Lodge" />
                                <div class="favorite-icon">&#9825;</div>
                                MOUNTAIN LODGE
                            </div>
                            <div class="info" id="info-hotel3-cat5">
                                <h2>Mountain Lodge</h2>
                                <p>
                                    Mountain Lodge, dağ manzaralı odaları ve doğal çevresiyle
                                    dikkat çeker. Misafirlerine doğa ile iç içe bir deneyim
                                    sunan bu otel, ayrıca yürüyüş parkurları ve açık hava
                                    aktiviteleri için ideal bir yerdir.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel3-cat5')"
                                >
                                    Kapat
                                </button>
                            </div>

                            <div class="tour" id="hotel4-cat5">
                                <img
                                    src="{{asset('front/assets/photo/hoteller/hotel4.jpg')}}"
                                    alt="City Central Hotel"
                                />
                                <div class="favorite-icon">&#9825;</div>
                                CITY CENTRAL HOTEL
                            </div>
                            <div class="info" id="info-hotel4-cat5">
                                <h2>City Central Hotel</h2>
                                <p>
                                    City Central Hotel, şehrin kalbinde yer alan ve alışveriş
                                    bölgelerine yakın konumda bulunan bir oteldir. Konforlu
                                    odaları, modern olanakları ve çeşitli yemek seçenekleri ile
                                    konuklarına rahat bir konaklama sunar.
                                </p>
                                <button
                                    class="close-btn"
                                    onclick="closeInfo('info-hotel4-cat5')"
                                >
                                    Kapat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="prev">‹</button>
                <button class="next">›</button>
            </div>
        </div>
    </div>

    <div class="swiper mySwiper">
        <h1 style="text-align: center">" BEST DEALS "</h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="turbir.html">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/slayd1.jpg')}}" alt="" />
                        <span class="swipspan">
                <h4>ROSE HOTEL</h4>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <h3>4700 $</h3>
              </span>
                    </div>
                </a>
                <a href="turiki.html">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/slayd2.webp')}}" alt="" />
                        <span class="swipspan">
                <h4>SUNSET HOTEL</h4>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <h3>3500 $</h3>
              </span>
                    </div>
                </a>
                <a href="turuc.html">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/slayd3.jpg')}}" alt="" />
                        <span class="swipspan">
                <h4>BAKU HOTEL</h4>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <h3>8400 $</h3>
              </span>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd1.jpg')}}" alt="" />
                    <span class="swipspan">
              <h4>ROSE HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>4700 $</h3>
            </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd2.webp')}}" alt="" />
                    <span class="swipspan">
              <h4>SUNSET HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>3500 $</h3>
            </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd3.jpg')}}" alt="" />
                    <span class="swipspan">
              <h4>BAKU HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>8400 $</h3>
            </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd1.jpg')}}" alt="" />
                    <span class="swipspan">
              <h4>ROSE HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>4700 $</h3>
            </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd2.webp')}}" alt="" />
                    <span class="swipspan">
              <h4>SUNSET HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>3500 $</h3>
            </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/slayd3.jpg')}}" alt="" />
                    <span class="swipspan">
              <h4>BAKU HOTEL</h4>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <h3>8400 $</h3>
            </span>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div id="menublog" class="contr">
        <h2>POPULAR DESTINATIONS</h2>
        <div class="contrs">
            <a href="{{ route('afgan') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag-Afghanistan.webp')}}" alt="" />
                    <h3>Afghanistan</h3>
                </div>
            </a>
            <a href="{{ route('turkey') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag-Turkey.webp')}}" alt="" />
                    <h3>Turkey</h3>
                </div>
            </a>
            <a href="{{ route('azer') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag_of_Azerbaijan.svg.png')}}" alt="" />
                    <h3>Azerbaijan</h3>
                </div>
            </a>
            <a href="{{ route('norvay') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag_of_Norway.svg.png')}}" alt="" />
                    <h3>Norway</h3>
                </div>
            </a>
            <a href="{{ route('sweden') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag_of_Sweden.svg.png')}}" alt="" />
                    <h3>Sweden</h3>
                </div>
            </a>
            <a href="{{ route('turkey') }}">
                <div class="contr1">
                    <img src="{{asset('front/assets/photo/countryflag/Flag-Turkey.webp')}}" alt="" />
                    <h3>Turkey</h3>
                </div>
            </a>

        </div>
    </div>

    <div id="menutickets" class="swiper mySwiper">
        <h1 style="text-align: center;">Popular Tickets</h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ route('ticket') }}">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/maldiv.jpg')}}" alt="" />
                        <span class="swipspan">
                  <h4>BUDAPEST -> <br>
                    ISTANBUL</h4>
                            </h4>
                            <p>25.07.2024 / 7:56</p>
                  <h3>4700 $</h3>
                </span>
                    </div>
                </a>
                <a href="{{ route('ticket') }}">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/maldivler-hakkinda-bilgiler.jpg')}}" alt="" />
                        <span class="swipspan">
                  <h4>  <h4>ISTANBUL -> <br>
                    BALI</h4></h4>

                    <p>25.07.2024 / 7:56</p>
                  <h3>3500 $</h3>
                </span>
                    </div>
                </a>
                <a href="{{ route('ticket') }}">
                    <div class="swipalt">
                        <img src="{{asset('front/assets/photo/ticket/bf25b4ad-eded-47a3-8fd4-08af2b1f9440.avif')}}" alt="" />
                        <span class="swipspan">
                    <h4>  <h4>MALE -> <br>
                        DUBAI</h4></h4>
                        <p>25.07.2024 / 7:56</p>
                  <h3>8400 $</h3>
                </span>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/ticket/0619-0941_bali.jpg')}}" alt="" />
                    <span class="swipspan">
                <h4>  <h4>BAKU -> <br>
                    ISTANBUL</h4></h4>
                    <p>25.07.2024 / 7:56</p>
                <h3>4700 $</h3>
              </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo//ticket/bf25b4ad-eded-47a3-8fd4-08af2b1f9440.avif')}}" alt="" />
                    <span class="swipspan">
                <h4>SUNSET HOTEL</h4>
                <p>25.07.2024 / 7:56</p>
                <h3>3500 $</h3>
              </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/ticket/peter-chen-Re_mehWVo-A-unsplash.webp')}}" alt="" />
                    <span class="swipspan">
                <h4>BAKU HOTEL</h4>
                <p>25.07.2024 / 7:56</p>
                <h3>8400 $</h3>
              </span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/ticket/0619-0941_bali.jpg')}}" alt="" />
                    <span class="swipspan">
                <h4>ROSE HOTEL</h4>
                <p>25.07.2024 / 7:56</p>
                <h3>4700 $</h3>
              </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/ticket/best-hotel-bali.jpeg')}}" alt="" />
                    <span class="swipspan">
                <p>25.07.2024 / 7:56</p>
                <h3>3500 $</h3>
              </span>
                </div>
                <div class="swipalt">
                    <img src="{{asset('front/assets/photo/ticket/peter-chen-Re_mehWVo-A-unsplash.webp')}}" alt="" />
                    <span class="swipspan">
                <h4>BAKU HOTEL</h4>
                <p>25.07.2024 / 7:56</p>
                <h3>8400 $</h3>
              </span>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="forest">
        <div class="content">
            <h1>SIGN UP FOR OUR UPDATES</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum exercitationem doloribus doloremque, iusto aspernatur facilis expedita voluptatibus voluptas illum nobis!</p>
            <form action="">
                <input type="email" placeholder="Your Email" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
@endsection
