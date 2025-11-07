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
    <link rel="stylesheet" href="linkstyle.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="logo/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
</head>

<body>

    <div class="links-container">

        <div class="form">
            <div class="shape">
                <div class="circle"></div>
                <div class="atoz-logo">
                </div>
            </div>
            <a class="tile-link"
                href="https://www.facebook.com/profile.php?id=61562642265158&name=xhp_ntfbaction__open_user">
                <i class="fa fa-angle-left"></i>
                <div class="">
                    <i class="fab fa-facebook"></i>
                    <p>ئێمە لە فەیسبووک</p>
                </div>

            </a>
            <a class="tile-link" href="https://www.tiktok.com/@a.to.z__krd?_t=8qe8UbPGfpQ&_r=1">
                <i class="fa fa-angle-left"></i>
                <div class="">
                    <i class="fab fa-tiktok"></i>
                    <p>ئێمە لە تیکتۆک</p>
                </div>
            </a>

            <a class="tile-link" href="https://www.instagram.com/a.to.z_krd?igsh=NTc4MTIwNjQ2YQ==">
                <i class="fa fa-angle-left"></i>
                <div class="">
                    <i class="fab fa-instagram"></i>
                    <p>ئێمە لە ئینستاگرام</p>
                </div>
            </a>
            <a class="tile-link">
                <i class="fa fa-angle-left"></i>
                <div class="">
                    <i class="fa  fa-phone"></i>
                    <p>0771 026 4040 </p>
                </div>
            </a>
            <!-- <h3>بەخێربێن </h3>
            <p>لەم شوێنانە سەردانمان بکەن</p>
            <div class="social-media">
                <a href=""><i class="fab fa-facebook "></i></a>
                <a href=""><i class="fab fa-tiktok"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fa fa-phone"></i></a>
            </div> -->

        </div>
        <!-- <div class="map" id="map"></div> -->

    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
</body>

</html>