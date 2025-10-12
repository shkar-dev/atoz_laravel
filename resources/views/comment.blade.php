@extends('layout.app')
@section('content')
    <div class="carer-header">
        <img src="{{ asset('logo/logo2.png') }}" />
    </div>
    <div class="custom-shape-divider-bottom-1738958926">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <defs>
                <linearGradient id="grad1" x1="50%" x2="100%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="#9A1320FF" />
                    <stop offset="60%" stop-color="#DD3E3EFF" />
                    <stop offset="100%" stop-color="#9A1320FF" />
                </linearGradient>
            </defs>
            <path
                d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                opacity=".25" class="shape-fill"></path>
            <path
                d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                opacity=".5" class="shape-fill"></path>
            <path
                d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                class="shape-fill"></path>
        </svg>
    </div>
    <div class="carer-container">
        <div class="carer-right">
            <div>
                <h3>سەرنج و تێبینی </h3>
                <div><i class="fa fa-check"> </i> چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها
                    دوو
                    شتى بۆ زیاد بکرێت، لەبارەى ئێمەوە، پەیوەندی.</div>
                <div><i class="fa fa-check"> </i> چوارەم- بەشى خوارى خوارەوە، ئەو ستایلەى ئێستاى جوانە بمێنێت، تەنها
                    دوو
                    شتى بۆ زیاد بکرێت، لەبارەى ئێمەوە، پەیوەندی.</div>
            </div>
            <img src="{{ asset('image/comment/1.svg')}}" class=" carer-image" />
        </div>
        <div class="carer-left">
            <h3>تکایە ڕاو سەرنجی خۆت بنووسە</h3>
            <div class="mb-3 col-md-4">
                <label for="exampleInputEmail1" class="form-label my-label">ڕەگەز</label>
                <select class="cv-input form-control cv-select" aria-label="Default select example">
                    <option selected>ڕەگەز</option>
                    <option value="1">نێر</option>
                    <option value="2">مێ</option>
                </select>
            </div>
            <div class="mb-3 col-md-4">
                <label for="exampleInputEmail1" class="form-label my-label">تەمەن</label>
                <select class="cv-input form-control cv-select" aria-label="Default select example">
                    <option selected>تەمەن</option>
                    <option value="1">18-25</option>
                    <option value="2">25-35</option>
                    <option value="3">35-40</option>
                    <option value="4"> سەروو 40 </option>
                </select>
            </div>
            <div class="mb-3 col-md-4">
                <label for="exampleInputEmail1" class="form-label my-label">شار</label>
                <select class="cv-input form-control cv-select" aria-label="Default select example">
                    <option selected>شار</option>
                    <option value="1">سلێمانی</option>
                    <option value="2">هەولێر</option>
                    <option value="3">دهۆک</option>
                    <option value="4">هەڵەبجە</option>
                </select>
            </div>
            <div class="mb-3 col-md-4">
                <label for="exampleInputEmail1" class="form-label my-label">ڕاو سەرنج</label>
                <textarea class="cv-input" placeholder="بڕوانامە" id="exampleInputEmail1"
                    aria-describedby="emailHelp"></textarea>
            </div>
            <div class="input-container">
                <button class="carer-button"> ناردن</button>
            </div>
        </div>
    </div>
@endsection