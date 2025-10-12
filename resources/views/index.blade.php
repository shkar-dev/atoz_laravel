@extends('layout.app')
@section('content')
    <div class="main-container">
        <div class="slider-custom">
            <div>
                <section class="splide" aria-label="Splide Basic HTML Example">

                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="img-box">
                                    <div class="slide1 custom-slide"></div>
                                    <div class="darkness">ss </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="img-box">
                                    <div class="slide2 custom-slide"></div>
                                    <div class="darkness">بەخێربێن </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="img-box">
                                    <div class="slide3 custom-slide"></div>
                                    <div class="darkness">بەخێربێن </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="parts">
            <div class="part-heading">
                <img src="./logo/favicon.png" />
                <h3>بەشەکانی </h3>
            </div>
            <div class="part-tiles">
                <div>
                    <div class="tile">
                        <div class="tile-heading">پاککەرەوە و ناوماڵ</div>
                        <img src="{{ asset('image/2.png') }}" alt="1">
                        <a href="./product.html" class="btn-tile"> زیاتر</a>
                    </div>
                    <div class="tile">
                        <div class="tile-heading"> خواردن و خواردنەوە</div>
                        <img src="{{ asset('image/6.png') }}" alt="2">
                        <a href="./product.html" class="btn-tile"> زیاتر</a>
                    </div>
                    <div class="tile">
                        <div class="tile-heading">قەساب و میوە</div>
                        <img src="{{ asset('image/3.png') }}" alt="3">
                        <a href="./product.html" class="btn-tile"> زیاتر</a>
                    </div>
                    <div class="tile">
                        <div class="tile-heading"> بەیکەرى</div>
                        <img src="{{ asset('image/5.png') }}" alt="4">
                        <a href="./product.html" class="btn-tile"> زیاتر</a>
                    </div>
                </div>
            </div>

            <div class="custom-shape-divider-bottom-1738684334">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="grad1" x1="50%" x2="100%" y1="0%" y2="0%">
                            <stop offset="0%" stop-color="#9A1320FF" />
                            <stop offset="60%" stop-color="#DD3E3EFF" />
                            <stop offset="100%" stop-color="#9A1320FF" />
                        </linearGradient>
                    </defs>
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="story">
            <div class="custom-shape-divider-top-1739382059">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="grad2" x1="0%" x2="50%" y1="0%" y2="0%">
                            <stop offset="0%" stop-color="#9A1320FF" />
                            <stop offset="60%" stop-color="#DD3E3EFF" />
                            <stop offset="100%" stop-color="#9A1320FF" />
                        </linearGradient>
                    </defs>
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>

            <div class="story-img">
                <!--                <img src="./image/slider/1.jpg" alt="">-->
                <div class="border-box"></div>
                <div class="img"></div>
            </div>
            <div class="story-content">
                <h1 class="story-heading">
                    چیرۆکی من
                </h1>
                <div class="story-text">
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى ئ
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                    چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها دوو شتى بۆ زیاد بکرێت،
                    لەبارەى
                    ئێمەوە، پەیوەندی.
                </div>
                <div class="button-container">
                    <button class="story-button"><i class="fa fa-book-open"></i>زیاتر </button>

                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var splide = new Splide('.splide', {
                    type: 'loop',
                });
                splide.mount();
            });
            var header = document.getElementById('header')
            var logo = document.getElementById('logo');
            window.addEventListener("scroll", function () {
                if (window.scrollY > 0) {
                    header.classList.add('active-header');
                    logo.classList.add('active-logo');
                } else {
                    header.classList.remove('active-header');
                    logo.classList.remove('active-logo');
                }
            });
        </script>
@endsection