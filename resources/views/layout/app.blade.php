<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="don't need to think, you get what you need">
    <meta name="keywords"
        content="A to Z, a to z, a-to-z, A-to-Z, market, shop, bakery, dairy, snacks, detergents، buthcer, fruits">
    <title>A to Z</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="icon" href="logo/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="{{ (str_contains(url()->current(), 'product')) ? 'product-header' : '' }}">
        <div class="home">
            <a href="{{ route('index') }}">سەرەکی</a>
            <i class="fa fa-home "></i>
            <span></span>
        </div>
        <div class="home">
            <a>چیرۆکى ئێمە</a>
            <i class="fa fa-book "></i>
            <span></span>
        </div>
        <div class="home">
            <a>هەواڵ و چالاکى</a>
            <i class="fa fa-newspaper "></i>
            <span></span>
        </div>
        <div class="home">
            <a>ئۆفەرەکان </a>
            <i class="fa fa-ticket "></i>
            <span></span>
        </div>
        <div class="home">
            <a href="{{ route('product') }}">بەشەکان</a>
            <i class="fa fa-layer-group "></i>
            <span></span>
        </div>
        <div class="home">
            <a>لقەکانمان</a>
            <i class="fa fa-map-location-dot "></i>
            <span></span>
        </div>
        <div class="home">
            <a href="{{ route('cv_info') }}">هەلی کار</a>
            <i class="fa fa-info "></i>
            <span></span>
        </div>
        <div class="menu">
            <i class="fa fa-bars" id="menu"></i>
        </div>
        <img src="{{ asset('logo/logo.png') }}" alt="Logo" id="logo">
    </header>

    @yield('content')
    <footer>

        set to "relative".
        <div class="custom-shape-divider-bottom-1760100742 mobile-shape">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill">
                </path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1738433273 desktop-shape">
            <div class="custom-shape-divider-bottom-1738434216">
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
                        d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                        opacity=".25" class="shape-fill">

                    </path>
                    <path
                        d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                        opacity=".5" class="shape-fill"></path>
                    <path
                        d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>
        <div class="icon">
            <div class="top">
                E-Mail : shkar@gmail.com
            </div>
            <div class="bottom">
                <a href="https://www.instagram.com/a.to.z_krd?igsh=NTc4MTIwNjQ2YQ==" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61562642265158&name=xhp_ntfbaction__open_user"
                    target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.tiktok.com/@a.to.z__krd?_t=8qe8UbPGfpQ&_r=1" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="https://www.google.com/maps/place/A+to+Z/@35.5892608,45.4243229,15z/data=!4m6!3m5!1s0x40002d8977d41b27:0x957609e279c51865!8m2!3d35.5892608!4d45.4243229!16s%2Fg%2F11wg88qygj?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank">
                    <i class="fa fa-location-dot"></i>
                </a>
                <a href="https://www.google.com/maps/place/A+to+Z/@35.5892608,45.4243229,15z/data=!4m6!3m5!1s0x40002d8977d41b27:0x957609e279c51865!8m2!3d35.5892608!4d45.4243229!16s%2Fg%2F11wg88qygj?entry=ttu&g_ep=EgoyMDI0MTAxNi4wIKXMDSoASAFQAw%3D%3D"
                    target="_blank">
                    <i class="fa fa-phone"></i>
                </a>
            </div>
        </div>
    </footer>



    <div class="menu-mobile">
        <div class="first">
            <i class="fa fa-close" id="close"> </i>
        </div>

        <div class="second">
            <div class="row-mobile">
                <a href="{{ route('index') }}">سەرەکی</a>
                <i class="fa fa-home "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>چیرۆکى ئێمە</a>
                <i class="fa fa-book "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>هەواڵ و چالاکى</a>
                <i class="fa fa-newspaper "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>ئۆفەرەکان </a>
                <i class="fa fa-ticket "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a href="{{ route('product') }}">بەشەکان</a>
                <i class="fa fa-layer-group "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>لقەکانمان</a>
                <i class="fa fa-map-location-dot "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a href=" {{ route('cv_info') }}">پۆستی کار</a>
                <i class="fa fa-info "></i>
                <span></span>
            </div>

        </div>
        <div class="third">
            <img src="logo/logo2.png" />
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var setElementHeight = function () {
        var height = $(window).height();
        $('.autoheight').css('min-height', (height));
    };

    $(window).on("resize", function () {
        setElementHeight();
    }).resize();

    $('#menu').on('click', function () {
        $('.menu-mobile').css('transform', 'translateX(0%)');
    });
    $('#close').on('click', function () {
        $('.menu-mobile').css('transform', 'translateX(-100%)');
    });
</script>
{{--
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
</script> --}}

</html>