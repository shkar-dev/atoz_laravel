{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @font-face {
            font-family: "shasenem-kurd";
            src: url("fonts/shasenem-kurd.ttf")
        }

        .mail-container {
            background-color: #ffffff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            direction: rtl;


        }

        .mail-header {
            height: 70px;
            font-family: "shasenem-kurd";
            background: rgb(255, 255, 255);
            width: 75%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .mail-content {
            width: 75%;
            display: flex;
            flex-direction: row;
            align-items: start;
            justify-content: center;
        }

        .mail-content>div {
            width: 50%;

        }

        .item {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 80px;
            background: #a7a3a3;
        }

        .item>.label {
            width: 25%;
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: center;
            background: #e6e6e6;
            font-family: "shasenem-kurd";
            border-bottom: 1px solid black;
        }

        .item>.text {
            width: 75%;
            background: #a7a3a3;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background: #f0efef;
            font-family: "shasenem-kurd";
            border-bottom: 1px solid black;

        }
    </style>
</head>

<body>

    <div class="mail-container">

        <div class="mail-header">
            زانیاریەکان
        </div>
        <div class="mail-content">
            <div>
                <div class="item">
                    <div class="label">ناوی سیانی</div>
                    <div class="text">شکار شهاب باقر</div>
                </div>
                <div class="item">
                    <div class="label">بڕوانامە</div>
                    <div class="text">تەکنەلۆجیای زانیاری</div>
                </div>
                <div class="item">
                    <div class="label">شار</div>
                    <div class="text"> سلێمانی </div>
                </div>
                <div class="item">
                    <div class="label">شەقام </div>
                    <div class="text"> کانی با</div>
                </div>
                <div class="item">
                    <div class="label">بەرواری لەدایکبوون </div>
                    <div class="text"> ١٥/٣/١٩٩٩ </div>
                </div>
            </div>
            <div>
                <div class="item">
                    <div class="label">شارەزایی کۆمپیوتەر </div>
                    <div class="text">نێتوۆرک / کۆمپوتەر</div>
                </div>
                <div class="item">
                    <div class="label">ئەزموونی پێشوو </div>
                    <div class="text">هیچ </div>
                </div>
                <div class="item">
                    <div class="label">زمان </div>
                    <div class="text">کوردی - ئینگلیزی - عەرەبی </div>
                </div>
                <div class="item">
                    <div class="label">شارەزایی کۆمپیوتەر </div>
                    <div class="text"> excel - word - powerpoint </div>
                </div>
                <div class="item">
                    <div class="label">ماوەی کارکردن </div>
                    <div class="text"> ٨ بەیانی بۆ ٤ ئێوارە </div>
                </div>
                <div class="item">
                    <div class="label">هۆکاری هاتووچۆ </div>
                    <div class="text"> بەڵی </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}

{{--
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Return</title>
    <style>
        /* Mobile-first simple responsive tweaks.
         Many email clients ignore <style>, so key styles are repeated inline.
         Keep CSS minimal to increase compatibility. */
        @media only screen and (max-width: 480px) {
            .container {
                width: 100% !important;
                padding: 12px !important;
            }

            .two-col {
                display: block !important;
                width: 100% !important;
            }

            .col {
                display: block !important;
                width: 100% !important;
            }

            .data-table td,
            .data-table th {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box;
            }

            .h1 {
                font-size: 20px !important;
            }
        }
    </style>
</head>

<body
    style="margin:0; padding:0; background:#f2f4f6; font-family: Arial, sans-serif; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">
    <!-- outer wrapper -->
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
        style="background:#f2f4f6; width:100%; padding:24px 0;">
        <tr>
            <td align="center">
                <!-- main container -->
                <table role="presentation" class="container" width="600" cellpadding="0" cellspacing="0"
                    style="width:600px; max-width:600px; background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.08);">
                    <!-- header -->
                    <tr>
                        <td
                            style="padding:20px; background:linear-gradient(90deg,#0b74de,#0066cc); color:#ffffff; text-align:left;">
                            <h1 class="h1" style="margin:0; font-size:22px; line-height:1.2; font-weight:700;">Your
                                Request Result</h1>
                            <p style="margin:6px 0 0; font-size:13px; opacity:0.95;">Here’s the data we returned for
                                your request.</p>
                        </td>
                    </tr>

                    <!-- summary -->
                    <tr>
                        <td style="padding:18px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <!-- left: summary -->
                                    <td class="two-col" style="vertical-align:top; padding-right:12px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            style="border:1px solid #e7e9eb; border-radius:6px;">
                                            <tr>
                                                <td style="padding:12px;">
                                                    <strong style="display:block; font-size:14px;">Summary</strong>
                                                    <p style="margin:6px 0 0; font-size:13px; color:#333333;">
                                                        <span style="display:block;">Status:
                                                            <strong>Success</strong></span>
                                                        <span style="display:block;">Records: <strong>4</strong></span>
                                                        <span style="display:block;">Requested at: <strong>2025-11-05
                                                                19:00</strong></span>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>

                                    <!-- right: key / value -->
                                    <td class="two-col" style="vertical-align:top; width:260px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                            style="border:1px solid #e7e9eb; border-radius:6px;">
                                            <tr>
                                                <td style="padding:12px;">
                                                    <strong style="display:block; font-size:14px;">Details</strong>
                                                    <table role="presentation" width="100%" cellpadding="0"
                                                        cellspacing="0" style="margin-top:6px;">
                                                        <tr>
                                                            <td style="font-size:13px; color:#666666; width:80px;">
                                                                Request ID</td>
                                                            <td style="font-size:13px; color:#111111;">
                                                                <strong>#A12345</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-size:13px; color:#666666; padding-top:6px;">
                                                                Type</td>
                                                            <td style="font-size:13px; color:#111111; padding-top:6px;">
                                                                <strong>Invoice Lookup</strong>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- data table -->
                    <tr>
                        <td style="padding:0 18px 18px;">
                            <table role="presentation" class="data-table" width="100%" cellpadding="0" cellspacing="0"
                                style="border-collapse:collapse; font-size:14px;">
                                <thead>
                                    <tr style="background:#f7fafc;">
                                        <th align="left"
                                            style="padding:10px 12px; border-bottom:1px solid #e7e9eb; text-align:left; font-weight:600;">
                                            Invoice #</th>
                                        <th align="left"
                                            style="padding:10px 12px; border-bottom:1px solid #e7e9eb; text-align:left; font-weight:600;">
                                            Date</th>
                                        <th align="left"
                                            style="padding:10px 12px; border-bottom:1px solid #e7e9eb; text-align:left; font-weight:600;">
                                            Amount</th>
                                        <th align="left"
                                            style="padding:10px 12px; border-bottom:1px solid #e7e9eb; text-align:left; font-weight:600;">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">INV-2025-001
                                        </td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">2025-10-29</td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">$1,240.00</td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">Paid</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">INV-2025-017
                                        </td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">2025-11-02</td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">$320.00</td>
                                        <td style="padding:10px 12px; border-bottom:1px solid #f0f0f0;">Pending</td>
                                    </tr>
                                    <!-- add more rows as needed -->
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    <!-- call to action -->
                    <tr>
                        <td style="padding:18px; text-align:center;">
                            <!-- button built with table for better support -->
                            <table role="presentation" cellspacing="0" cellpadding="0" style="margin:0 auto;">
                                <tr>
                                    <td style="border-radius:6px; background:#0b74de;">
                                        <a href="https://yourapp.example.com/requests/A12345"
                                            style="display:inline-block; padding:10px 18px; font-size:14px; color:#ffffff; text-decoration:none; border-radius:6px;">
                                            View full result
                                        </a>
                                    </td>
                                    <td style="width:8px;"></td>
                                    <td style="border-radius:6px; background:#f3f4f6;">
                                        <a href="https://yourapp.example.com/export/A12345"
                                            style="display:inline-block; padding:10px 14px; font-size:14px; color:#0b74de; text-decoration:none; border-radius:6px;">
                                            Export CSV
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- footer -->
                    <tr>
                        <td style="padding:14px; background:#fbfcfd; font-size:12px; color:#9aa3ad; text-align:center;">
                            <div style="max-width:520px; margin:0 auto;">
                                If you did not request this, please ignore this email or <a
                                    href="mailto:support@yourapp.example.com"
                                    style="color:#0b74de; text-decoration:none;">contact support</a>.
                                <div style="height:6px;"></div>
                                © 2025 Your Company — All rights reserved.
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- end main container -->
            </td>
        </tr>
    </table>
</body>

</html> --}}

{{--
<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>معلومات المستخدم</title>
    <style>
        @font-face {
            font-family: "Shrikhand";
            src: url("fonts/Shrikhand.ttf")
        }

        @font-face {
            font-family: "KMagroon";
            src: url("fonts/KMagroon.ttf")
        }

        @font-face {
            font-family: "Dongle_Bold";
            src: url("fonts/Dongle-Bold.ttf")
        }

        @font-face {
            font-family: "font2";
            src: url("fonts/font2.ttf")
        }

        @font-face {
            font-family: "shasenem-kurd";
            src: url("fonts/shasenem-kurd.ttf")
        }

        @font-face {
            font-family: "rudawregular2";
            src: url("fonts/rudawregular2.ttf")
        }

        body {
            margin: 0;
            padding: 0;
            background: #f3f4f6;
            direction: rtl;
            font-family: "rudawregular2";
            text-align: right;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            margin: 30px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: linear-gradient(45deg, #9a1320, rgb(205, 49, 49), #9a1320);
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 700;
        }

        .content {
            padding: 20px 24px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
            color: #333;
        }

        .info-table td {
            padding: 10px 6px;
            border-bottom: 1px solid #e8ebed;
            vertical-align: top;
        }

        .label {
            color: #911313ff;
            font-weight: 600;
            width: 35%;
            white-space: nowrap;
        }

        .value {
            color: #111;
            font-weight: 500;
            width: 65%;
        }

        .footer {
            background: #fafbfc;
            color: #666;
            font-size: 13px;
            text-align: center;
            padding: 14px;
        }

        .footer a {
            color: #0066cc;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .container {
                width: 100%;
                margin: 0;
                border-radius: 0;
            }

            .content {
                padding: 14px;
            }

            .info-table td {
                display: block;
                width: 100%;
                border-bottom: none;
            }

            .label {
                display: block;
                margin-top: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>زانیاری بەکارهێنەر </h1>
        </div>

        <div class="content">
            <table class="info-table">
                <tr>
                    <td class="label">الاسم الكامل</td>
                    <td class="value">محمد أحمد الشمري</td>
                </tr>
                <tr>
                    <td class="label">اسم المستخدم</td>
                    <td class="value">mohammed1995</td>
                </tr>
                <tr>
                    <td class="label">الجنس</td>
                    <td class="value">ذكر</td>
                </tr>
                <tr>
                    <td class="label">المدينة</td>
                    <td class="value">بغداد</td>
                </tr>
                <tr>
                    <td class="label">الشارع</td>
                    <td class="value">شارع النهر</td>
                </tr>
                <tr>
                    <td class="label">تاريخ الميلاد</td>
                    <td class="value">١٩٩٥-٠٤-١٢</td>
                </tr>
                <tr>
                    <td class="label">الحالة الاجتماعية</td>
                    <td class="value">أعزب</td>
                </tr>
                <tr>
                    <td class="label">مهارات الحاسوب</td>
                    <td class="value">Microsoft Office, Excel, البريد الإلكتروني</td>
                </tr>
                <tr>
                    <td class="label">الوظائف السابقة</td>
                    <td class="value">موظف مبيعات، إداري</td>
                </tr>
                <tr>
                    <td class="label">اللغات</td>
                    <td class="value">العربية، الإنجليزية</td>
                </tr>
                <tr>
                    <td class="label">الوظيفة المفضلة</td>
                    <td class="value">الموارد البشرية</td>
                </tr>
                <tr>
                    <td class="label">وقت العمل المفضل</td>
                    <td class="value">صباحي</td>
                </tr>
                <tr>
                    <td class="label">هل لديك رخصة قيادة؟</td>
                    <td class="value">نعم</td>
                </tr>
            </table>
        </div>

        <div class="footer">
            <p>تم إرسال هذه البيانات من نظامنا تلقائيًا.</p>
            <p>© ٢٠٢٥ شركتك. جميع الحقوق محفوظة.</p>
        </div>
    </div>
</body>

</html> --}}

{{--
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بيانات المستخدم</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f5f9;
            font-family: "Vazirmatn", sans-serif;
            direction: rtl;
        }

        .email-wrapper {
            max-width: 650px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
            position: relative;
        }

        /* Header with SVG waves */
        .header {
            background: linear-gradient(45deg, #9a1320, rgb(205, 49, 49), #9a1320);
            color: #fff;
            padding: 50px 30px 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 700;
            margin: 0;
        }

        .header svg {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
        }

        .content {
            padding: 30px 40px;
            position: relative;
            z-index: 2;
        }

        .info-card {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #e6eaf0;
            padding: 12px 0;
        }

        .info-card:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 30px;
            font-size: 18px;
            color: #ad2b2bff;
            margin-left: 10px;
            text-align: center;
        }

        .info-label {
            color: #000000ff;
            font-weight: 700;
            font-size: 15px;
            width: 35%;
        }

        .info-value {
            color: #222;
            font-size: 15px;
            font-weight: 500;
        }

        /* CV Button */
        .cv-section {
            text-align: center;
            margin-top: 25px;
        }

        .cv-button {
            background: #0073e6;
            color: #fff !important;
            text-decoration: none;
            padding: 12px 26px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            transition: background 0.3s ease;
        }

        .cv-button:hover {
            background: #005bb5;
        }

        .cv-button i {
            margin-left: 8px;
        }

        /* Footer */
        .footer {
            background: #f9fafc;
            text-align: center;
            font-size: 13px;
            color: #666;
            padding: 18px 0;
        }

        @media (max-width: 600px) {
            .content {
                padding: 20px;
            }

            .info-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-label {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="email-wrapper">

        <!-- Header -->
        <div class="header">
            <h1>زانیاری کەسی </h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,96L80,112C160,128,320,160,480,149.3C640,139,800,85,960,58.7C1120,32,1280,32,1360,32L1440,32L1440,180L1360,180C1280,180,1120,180,960,180C800,180,640,180,480,180C320,180,160,180,80,180L0,180Z">
                </path>
            </svg>
        </div>

        <!-- Content -->
        <div class="content">

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-user"></i></div>
                <div class="info-label"> ناوی سیانی</div>
                <div class="info-value">
                    {{ $content['name'] }}
                </div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-id-badge"></i></div>
                <div class="info-label">بڕوانامە </div>
                <div class="info-value">{{ $content['certificate'] }}</div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-venus-mars"></i></div>
                <div class="info-label">ڕەگەز</div>
                <div class="info-value">{{ $content['gender'] }}</div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-city"></i></div>
                <div class="info-label"> شار/شەقام </div>
                <div class="info-value">{{ $content['city'] }}/{{ $content['street'] }}</div>
            </div>


            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-calendar-days"></i></div>
                <div class="info-label">بەرواری لەدایکبوون </div>
                <div class="info-value"> {{ $content['birth'] }} </div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-heart"></i></div>
                <div class="info-label">باری خێزانی </div>
                <div class="info-value">{{ $content['marriage'] }}</div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-laptop-code"></i></div>
                <div class="info-label">شارەزایی کۆمپیوتەر </div>
                <div class="info-value"> {{ $content['computer_skills'] }}</div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-briefcase"></i></div>
                <div class="info-label">ئەزموونی پێشوو </div>
                <div class="info-value"> {{ $content['prev_jobs'] }} </div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-language"></i></div>
                <div class="info-label">زمان</div>
                <div class="info-value"> {{ $content['language'] }} </div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-bullseye"></i></div>
                <div class="info-label">ئارەزووە پیشەییەکان </div>
                <div class="info-value">{{ $content['job_wanted'] }} </div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                <div class="info-label">ماوەی کارکردن </div>
                <div class="info-value">{{ $content['job_time'] }}</div>
            </div>

            <div class="info-card">
                <div class="info-icon"><i class="fa-solid fa-car"></i></div>
                <div class="info-label">هۆکاری هاتووچۆت هەیە ؟ </div>
                <div class="info-value">{{ $content['traffic_reasons'] }}</div>
            </div>

            <!-- CV Download -->
            <div class="cv-section">
                <a href="https://yourwebsite.com/uploads/cv123.pdf" class="cv-button" target="_blank">
                    <i class="fa-solid fa-file-arrow-down"></i> داگرتنی زانیاری کەسی
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            © ٢٠٢٥ شركتك. جميع الحقوق محفوظة.
        </div>

    </div>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بيانات المستخدم</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
</head>

<body style="margin:0; padding:0; background-color:#f2f5f9; font-family:'Vazirmatn', sans-serif; direction:rtl;">
    <div
        style="max-width:650px; margin:30px auto; background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 4px 25px rgba(0,0,0,0.08); position:relative;">

        <!-- Header -->
        <div
            style="background:linear-gradient(45deg,#9a1320,rgb(205,49,49),#9a1320); color:#fff; padding:50px 30px 80px; text-align:center; position:relative; overflow:hidden;">
            <h1 style="font-size:26px; font-weight:700; margin:0;">زانیاری کەسی</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 180"
                style="position:absolute; bottom:-1px; left:0; width:100%;">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,96L80,112C160,128,320,160,480,149.3C640,139,800,85,960,58.7C1120,32,1280,32,1360,32L1440,32L1440,180L1360,180C1280,180,1120,180,960,180C800,180,640,180,480,180C320,180,160,180,80,180L0,180Z">
                </path>
            </svg>
        </div>

        <!-- Content -->
        <div style="padding:30px 40px; position:relative; z-index:2;">

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-user"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">ناوی سیانی</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['name'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-id-badge"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">بڕوانامە</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['certificate'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-venus-mars"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">ڕەگەز</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['gender'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-city"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">شار/شەقام</div>
                <div style="color:#222; font-size:15px; font-weight:500;">
                    {{ $content['city'] }}/{{ $content['street'] }}
                </div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-calendar-days"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">بەرواری لەدایکبوون</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['birth'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-heart"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">باری خێزانی</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['marriage'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-laptop-code"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">شارەزایی کۆمپیوتەر</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['computer_skills'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-briefcase"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">ئەزموونی پێشوو</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['prev_jobs'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-language"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">زمان</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['language'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-bullseye"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">ئارەزووە پیشەییەکان</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['job_wanted'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:1px solid #e6eaf0; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-clock"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">ماوەی کارکردن</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['job_time'] }}</div>
            </div>

            <div style="display:flex; align-items:center; border-bottom:none; padding:12px 0;">
                <div style="width:30px; font-size:18px; color:#ad2b2b; margin-left:10px; text-align:center;"><i
                        class="fa-solid fa-car"></i></div>
                <div style="color:#000; font-weight:700; font-size:15px; width:35%;">هۆکاری هاتووچۆت هەیە ؟</div>
                <div style="color:#222; font-size:15px; font-weight:500;">{{ $content['traffic_reasons'] }}</div>
            </div>


        </div>

        <!-- Footer -->
        <div
            style="background:#f9fafc; text-align:center; font-size:13px; color:#666; padding:18px 0;direction:ltr!important">
            © {{ date('Y') }} AtoZ. All rights reserved.
        </div>

    </div>
</body>

</html>