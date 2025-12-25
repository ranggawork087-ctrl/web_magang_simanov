<!DOCTYPE html>
<html lang="id" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Program Magang SIMANOV</title>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Font family Manrope */
        body, html {
            font-family: 'Manrope', sans-serif;
        }
        /* Custom colors */
        :root {
            --yellow: #FFD05A;
            --blue-dark: #0166FF;
            --blue-light: #EFF6FF;
            --gray-bg: #F9FAFB; /* for footer background */
            --green: #47BB8E;
        }
        /* Scroll bar fix */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        /* Top banner text */
        .banner {
            background-color: var(--yellow);
            color: black;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 0;
            user-select: none;
            text-align: center;
        }
        /* Navbar */
        nav a {
            transition: color 0.3s;
        }
        nav a:hover {
            color: var(--blue-dark);
        }
        nav a.active {
            font-weight: 700;
            color: black;
            cursor: default;
        }
        /* Hero small green text */
        .hero-subtitle {
            font-size: 12px;
            font-weight: 600;
            color: var(--green);
            letter-spacing: 0.02em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }
        /* Hero heading */
        .hero-heading {
            font-weight: 900;
            font-size: 3rem; /* 48px */
            line-height: 1.1;
            margin-bottom: 12px;
            color: black;
        }
        /* Hero paragraph */
        .hero-p {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.6;
            color: #64748B; /* Tailwind slate-500 */
            max-width: 420px;
        }
        /* Buttons styling in hero */
        .btn-yellow {
            background-color: var(--yellow);
            color: black;
            font-weight: 700;
            font-size: 14px;
            padding: 10px 24px;
            border-radius: 100px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
        }
        .btn-yellow:hover {
            background-color: #ffdf7f;
        }
        .btn-text-link {
            font-size: 14px;
            font-weight: 400;
            text-decoration: underline;
            margin-left: 16px;
            cursor: pointer;
            color: black;
        }
        /* Timeline container */
        .timeline-blue-area {
        background-color: #F0F7FF;
        padding: 5px 0;
        }

        .timeline-blue-area h2 {
        margin: 0;
        padding: 0;
        font-size: 28px; /* opsional agar proporsional */
        }


        /* Section utama tetap putih */
        .timeline-section {
        background-color: white;
        }

        .timeline {
        margin-top: 20px !important;
        }

        .timeline-title {
            font-size: 1.75rem; /* 28px */
            font-weight: 700;
            color: var(--blue-dark);
            text-align: center;
            margin-bottom: 56px;
        }
        /* Timeline flex container */
        .timeline {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        /* The horizontal connecting line */
        .timeline-line {
        position: absolute;
        top: 24px;
        left: 48px;   /* dari 24px → 48px */
        right: 48px;  /* dari 24px → 48px */
        height: 3px;
        background-color: var(--blue-dark);
        z-index: 1;
        }

        /* Each timeline step */
        .timeline-step {
            position: relative;
            z-index: 10;
            width: 140px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        /* Circle */
        .circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            color: white;
            font-weight: 700;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 10;
            user-select: none;
        }
        .circle-blue {
            background-color: var(--blue-dark);
        }
        .circle-yellow {
            background-color: var(--yellow);
            color: black;
        }
        /* Step Titles */
        .step-title {
            font-weight: 600;
            font-size: 13px;
            margin-top: 10px;
            color: #475569; /* Tailwind slate-600 */
        }
        /* Step description */
        .step-desc {
            font-weight: 400;
            font-size: 11px;
            color: #64748B; /* Tailwind slate-500 */
            margin-top: 8px;
            line-height: 1.3;
            max-width: 140px;
        }
        .step-desc small {
            font-style: italic;
            display: block;
            margin-top: 4px;
            color: #94A3B8;
        }
        /* Documents container */
        .docs {
            max-width: 900px;
            margin: 0 auto;
            margin-top: 64px;
            display: flex;
            justify-content: space-between;
            gap: 30px;
            padding-left: 12px;
            padding-right: 12px;
        }
        .doc-card {
        background-color: #F0F7FF;  /* sebelumnya: white */
        padding: 32px 24px;
        border-radius: 12px;
        text-align: center;
        width: 284px;
        box-sizing: border-box;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05); /* lebih soft */
        border: 1px solid #DBEAFE;

        }

        .doc-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 20px;
            user-select: none;
        }
        .doc-text {
            font-weight: 400;
            font-size: 14px;
            color: #64748B;
            line-height: 1.5;
        }
        /* Footer */
        footer {
            background-color: var(--gray-bg);
            padding-top: 56px;
            padding-bottom: 56px;
            font-size: 14px;
            line-height: 1.6;
            user-select: none;
        }
        .footer-container {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
            flex-wrap: wrap;
        }
        .footer-left {
            max-width: 280px;
            flex-shrink: 0;
        }
        .footer-left .logo {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 14px;
        }
        .footer-left .logo .square {
            width: 24px;
            height: 24px;
            background-color: var(--blue-dark);
            clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 100%, 16px 100%);
        }
        .footer-left .logo-text {
            font-weight: 700;
            font-size: 16px;
            color: black;
            user-select: none;
        }
        .footer-left p {
            color: #64748B;
            font-size: 13px;
            margin-bottom: 14px;
            line-height: 1.5;
        }
        .btn-chat {
            background-color: var(--blue-dark);
            color: white;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            border-radius: 100px;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.3s ease;
        }
        .btn-chat:hover {
            background-color: #0046d1;
        }
        ul.footer-links,
        ul.footer-links li a {
            list-style: none;
            padding: 0;
            margin: 0;
            user-select: none;
            color: #64748B;
            font-weight: 400;
            font-size: 14px;
            line-height: 1.8;
            text-decoration: none;
            cursor: pointer;
            display: block;
            transition: color 0.3s ease;
        }
        ul.footer-links li a:hover {
            color: var(--blue-dark);
        }
        .footer-section {
            min-width: 140px;
        }
        .footer-section h5 {
            font-weight: 700;
            margin-bottom: 18px;
            color: black;
            font-size: 15px;
            user-select: none;
        }

        /* Kotak 4 bg #EFF6FF (untuk tempat foto) */
        .menu-box {
        width: 40px;
        height: 40px;
        background-color: #EFF6FF;
        border-radius: 8px;
        }

        /* Panah samping lingkaran */
        .arrow-dropdown {
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 7px solid #4B5563;
        display: inline-block;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .docs {
            flex-wrap: wrap;
            justify-content: center;
            gap: 32px;
            }
            .doc-card {
            width: 270px;
            }
            .footer-container {
            flex-direction: column;
            gap: 40px;
            }
            .footer-left {
            max-width: 100%;
            }
        }
        @media (max-width: 640px) {
            .hero-heading {
            font-size: 2.4rem;
            }
            .timeline {
            flex-wrap: wrap;
            justify-content: center;
            }
            .timeline-step {
            width: 130px;
            margin-bottom: 48px;
            }
            .timeline-line {
            display: none;
            }
            .docs {
            flex-direction: column;
            gap: 40px;
            align-items: center;
            }
            .doc-card {
            width: 90%;
            }
        }
    </style>
</head>
<body class="bg-white">
    @include('components.navbar')
    <!-- Hero Section -->
    <section class="max-w-[1000px] mx-auto px-4 pt-12 pb-20 flex flex-col md:flex-row items-center gap-12">
        <article class="max-w-[480px] flex flex-col">
        <span class="hero-subtitle">BINA KOMPETENSI MELALUI PENGALAMAN MAGANG</span>
        <h1 class="hero-heading select-text">
            Wujudkan Pengalaman Nyata di Dunia Profesional
        </h1>
        <p class="hero-p select-text">
            Bangun karier sejak dini dengan mengikuti program magang yang dirancang untuk memberikan pengalaman kerja nyata di bidang komunikasi dan digital
        </p>
        <div class="mt-7 flex items-center">
            <a href="{{ route('view.form') }}" class="btn-yellow">Daftar Sekarang</a>
            <a href="#" class="btn-text-link select-text">Jelajahi program</a>
        </div>
        </article>

        <figure class="max-w-[380px] min-w-[280px] rounded-lg overflow-hidden border border-gray-300 select-none" aria-label="Foto peserta">
        <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=380&q=80" alt="Peserta magang" class="w-full h-full object-cover" />
        </figure>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section mb-20">
        <section class="timeline-blue-area">    
            <h2 class="timeline-title select-text">Alur & Syarat Pendaftaran</h2>
        </section>


        <div class="timeline" aria-label="Timeline alur pendaftaran">
        <div class="timeline-line"></div>

        <div class="timeline-step" role="group" aria-labelledby="step1-title">
            <div class="circle circle-blue" aria-label="Step 1">01</div>
            <div class="step-title" id="step1-title">Registrasi Online</div>
            <div class="step-desc">
            Isi formulir dengan melengkapi data diri serta mengunggah berkas yang diperlukan
            <small>(estimasi : 1 - 2 hari kerja)</small>
            </div>
        </div>

        <div class="timeline-step" role="group" aria-labelledby="step2-title">
            <div class="circle circle-yellow" aria-label="Step 2">02</div>
            <div class="step-title" id="step2-title">Validasi Data</div>
            <div class="step-desc">
            Data peserta akan divalidasi untuk memastikan kelengkapan dan keasliannya
            <small>(estimasi : 2 - 5 hari kerja)</small>
            </div>
        </div>

        <div class="timeline-step" role="group" aria-labelledby="step3-title">
            <div class="circle circle-blue" aria-label="Step 3">03</div>
            <div class="step-title" id="step3-title">Wawancara</div>
            <div class="step-desc">
            Wawancara akan dilaksanakan sesuai jadwal yang telah ditentukan
            <small>(estimasi : 1 hari sesuai jadwal)</small>
            </div>
        </div>

        <div class="timeline-step" role="group" aria-labelledby="step4-title">
            <div class="circle circle-yellow" aria-label="Step 4">04</div>
            <div class="step-title" id="step4-title">Hasil Seleksi</div>
            <div class="step-desc">
            Hasil seleksi dapat dilihat melalui dashboard user masing-masing
            <small>(estimasi : 1 - 2 hari setelah wawancara)</small>
            </div>
        </div>
        </div>

        <!-- Documents -->
        <div class="docs" role="list" aria-label="Dokumen yang diperlukan">
        <div class="doc-card" role="listitem">
            <!-- Replace img src with your icon -->
            <img src="https://img.icons8.com/ios/72/000000/document--v1.png" alt="" class="doc-icon" aria-hidden="true" />
            <p class="doc-text">
            Surat Permohonan Magang dari instansi atau perguruan tinggi asal
            </p>
        </div>
        <div class="doc-card" role="listitem">
            <img src="https://img.icons8.com/ios/72/000000/resume.png" alt="" class="doc-icon" aria-hidden="true" />
            <p class="doc-text">
            Curriculum Vitae (CV) berisi data diri, jurusan, serta pengalaman relevan
            </p>
        </div>
        <div class="doc-card" role="listitem">
            <img src="https://img.icons8.com/ios/72/000000/portfolio--v1.png" alt="" class="doc-icon" aria-hidden="true" />
            <p class="doc-text">
            Portofolio sesuai dengan jurusan atau bidang keahlian masing-masing peserta
            </p>
        </div>
        </div>
    </section>
    @include('components.footer')

</body>
</html>
