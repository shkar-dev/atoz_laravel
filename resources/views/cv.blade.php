<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="don't need to think, you get what you need">
    <meta name="keywords"
        content="A to Z, a to z, a-to-z, A-to-Z, market, shop, bakery, dairy, snacks, detergents، buthcer, fruits">
    <title>A to Z</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="logo/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>

<body>
    <!-- <header id="header">
        <div class="home">
            <a href="index.html">سەرەکی</a>
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
            <a href="product.html">بەشەکان</a>
            <i class="fa fa-layer-group "></i>
            <span></span>
        </div>
        <div class="home">
            <a>لقەکانمان</a>
            <i class="fa fa-map-location-dot "></i>
            <span></span>
        </div>
        <div class="home">
            <a href="cv.html">هەلی کار</a>
            <i class="fa fa-info "></i>
            <span></span>
        </div>
        <div class="menu">
            <i class="fa fa-bars" id="menu"></i>
        </div>
        <img src="logo/logo.png" alt="Logo" id="logo">
    </header> -->
    <div class="main-container main-cv">
        <div class="cv-inside">
            <div>
                <a href="{{ url()->previous() }}" class="back-container"> <i class="fa fa-circle-left"></i></a>
                <div>
                    <h5 class="vacancy-text" style=" direction: rtl;">پۆستی کار </h5>
                    <img src=" {{ asset('logo/logo.png') }}" alt="Logo" id="logo">
                </div>
            </div>

            <form>
                <div class="py-2 px-5">

                    <div class="row cv-line">
                        <div class="cv-text">
                            <p>زانیاری کەسی بنووسە</p>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">ناوی سیانی</label>
                            <input type="email" placeholder="ناوی سیانی" class="cv-input" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">بڕوانامە</label>
                            <input type="email" class="cv-input" placeholder="بڕوانامە" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">ڕەگەز</label>
                            <select class="cv-input form-control cv-select" aria-label="Default select example">
                                <option selected>ڕەگەز</option>
                                <option value="1">نێر</option>
                                <option value="2">مێ</option>
                            </select>
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">شار</label>
                            <input type="email" class="cv-input" placeholder="شار" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">گەڕەک</label>
                            <input type="email" class="cv-input" placeholder="گەڕەک" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">لەدایکبوون</label>
                            <input type="date" class="cv-input" placeholder="لەدایکبوون" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="exampleInputEmail1" class="form-label my-label">باری خێزانی</label>
                            <select class="cv-input form-control cv-select" aria-label="Default select example">
                                <option selected>باری خێزانی</option>
                                <option value="1">خێزاندار</option>
                                <option value="2">سەڵت</option>
                            </select>
                        </div>
                    </div>
                    <div class="row cv-line">
                        <div class="cv-text">
                            <p>لێهاتووییەکان بنووسە</p>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">شارەزایی کۆمپیوتەر</label>
                            <input type="email" class="cv-input" placeholder="شارەزایی کۆمپیوتەر"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">ئەزموونی پێشوو</label>
                            <input type="text" class="cv-input" placeholder="ئەزموونی پێشوو" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">زمان</label>
                            <input type="email" class="cv-input" placeholder="زمان" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                    </div>
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <div class="row cv-line">
                        <div class="cv-text">
                            <p>ئارەزووە پیشەییەکان </p>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">شارەزایی کۆمپیوتەر</label>
                            <div class="form-check  my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label my-label" for="flexCheckDefault">
                                    ژمێریاری
                                </label>
                            </div>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label my-label" for="flexCheckChecked">
                                    کۆگا </label>
                            </div>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label my-label" for="flexCheckDefault">
                                    ناوڕەف </label>
                            </div>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label my-label" for="flexCheckChecked">
                                    کاشێر </label>
                            </div>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label my-label" for="flexCheckDefault">
                                    داتائینتری و ئایتیداتائینتری و ئایتی </label>
                            </div>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label my-label" for="flexCheckChecked">
                                    پاکەرەوە </label>
                            </div>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">ماوەی کارکردن</label>
                            <div class="form-check my-form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label my-label" for="flexCheckDefault">
                                    ٨ بەیانی بۆ ٤ ئێوارە</label>
                            </div>
                            <div class="form-check my-form-check ">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label my-label" for="flexCheckChecked">
                                    ٤ ئێوارە بۆ ١٢ شەو </label>
                            </div>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="exampleInputEmail1" class="form-label my-label">هۆکاری هاتووچۆت هەیە
                                ؟</label>
                            <select class="cv-input form-control cv-select" aria-label="Default select example">
                                <option selected> هۆکاری هاتووچۆت هەیە</option>
                                <option value="1">بەڵێ</option>
                                <option value="2">نەخێر</option>
                            </select>
                        </div>

                    </div>
                    <div class="row cv-line">
                        <div class="cv-text">
                            <p>زیادکردنی سیڤی (CV)</p>
                        </div>
                        <div class="line"></div>
                    </div>
                    <div class="row cv-file-container">
                        <div class="mb-3 col-md-4">
                            <!-- Real file input (hidden) -->
                            <input type="file" id="file" class="file-input" />

                            <!-- Custom styled label -->
                            <label for="file" class="file-label">📂 زیادکردنی فایل</label>

                            <!-- Display filename -->
                            <span class="file-name" id="file-name">هیچ بەڵگەنامەیەک دیارینەکراوە</span>
                        </div>
                    </div>

                    <div class="row cv-line">

                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-2">
                            <button type="submit" class="btn btn-primary cv-button  w-100">ناردنی
                                زانیاریەکان</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <script>
            // Show file name when selected
            const fileInput = document.getElementById("file");
            const fileName = document.getElementById("file-name");

            fileInput.addEventListener("change", () => {
                fileName.textContent = fileInput.files.length > 0 ?
                    fileInput.files[0].name :
                    "No file chosen";
            });
        </script>

    </div>

    <!-- <div class="custom-shape-divider-bottom-1738684334">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
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
    </div> -->

    <!-- <footer>
        <div class="custom-shape-divider-bottom-1738433273">
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
    </footer> -->

    <div class="menu-mobile">
        <div class="first">
            <i class="fa fa-close" id="close"> </i>
        </div>

        <div class="second">
            <div class="row-mobile">
                <a href="index.html">سەرەکی</a>
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
                <a>بەشەکان</a>
                <i class="fa fa-layer-group "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>لقەکانمان</a>
                <i class="fa fa-map-location-dot "></i>
                <span></span>
            </div>
            <div class="row-mobile">
                <a>دەربارە</a>
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

</html>