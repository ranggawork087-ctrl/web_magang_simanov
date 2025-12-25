<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SIMANOV - Program Magang</title>

  <!-- Google Fonts Manrope -->
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Base layout & font */
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Manrope', sans-serif;
    }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .bg-yellow-custom { background-color: #FFD05A; }
    .bg-blue-dark { background-color: #0166FF; }
    .bg-blue-light { background-color: #EFF6FF; }
    .bg-gray-custom { background-color: #E2E8F0; }
    .text-green-custom { color: #47BB8E; }
    .sidebar-active {
      background-color: #E2E8F0;
      border-left: 4px solid #0166FF;
    }
    /* Progress bar styling */
    .progress-container {
      display: flex;
      align-items: center;
      justify-content: center;
      max-width: 650px;
      margin: 2rem auto 3rem;
      gap: 0;
    }
    .progress-step {
      width: 40px;
      height: 40px;
      background-color: #0166FF;
      border-radius: 9999px;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10;
      box-shadow: 0 2px 8px rgba(1, 102, 255, 0.3);
      flex-shrink: 0;
    }
    .progress-step svg {
      width: 22px;
      height: 22px;
      stroke: white;
      stroke-width: 3;
      stroke-linecap: round;
      stroke-linejoin: round;
      fill: none;
    }
    .progress-bar {
      flex-grow: 1;
      height: 4px;
      background-color: #0166FF;
      margin-left: -4px; /* adjust so line touches circle edge */
      margin-right: -4px;
      z-index: 1;
    }
    /* Sidebar width */
    aside {
      min-width: 280px;
    }

    /* Font family Manrope (already set above) */
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

  <!-- Top Banner -->
  <div class="banner select-none">
    Sedang dibuka Beasiswa Komdigi Batch 23 hingga 30 Oktober 2025! Klik untuk daftar &rarr;
  </div>

    <!-- Navbar -->
    <header class="flex items-center justify-between px-6 md:px-20 py-5 border-b border-gray-200 max-w-full">
        <div class="flex items-center space-x-3">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="logo.png" class="w-9 h-9 object-contain" alt="SIMANOV Logo" />
            <div>
            <p class="font-black text-xl tracking-tight">SIMANOV</p>
            <p class="text-xs font-light text-gray-600">Sistem Informasi Rumah Inovatif</p>
            </div>
        </div>
        </div>
        <nav class="hidden md:flex space-x-8 text-gray-600 text-sm font-normal">
        <a href="#" class="hover:text-black transition">Beranda</a>
        <a href="#" class="hover:text-black transition">Pelatihan</a>
        <a href="#" class="hover:text-black transition">Jadwal</a>
        <a href="#" class="hover:text-black transition">Pengajuan Pelatihan</a>
        <a href="#" class="hover:text-black transition">Instruktur</a>
        <a href="#" class="hover:text-black transition">Kontak</a>
        <a href="#" class="hover:text-black transition">Program Magang</a>
        </nav>
        <div class="hidden md:flex items-center space-x-6 cursor-pointer">
            <!-- Kotak 4 (bisa isi gambar) -->
            <div class="menu-box overflow-hidden">
                <img src="your-image.png" alt="" class="w-full h-full object-cover" />
            </div>

            <!-- Avatar + panah -->
            <div class="flex items-center space-x-2">
                <div class="w-9 h-9 rounded-full bg-blue-600"></div>
                <span class="arrow-dropdown"></span>
            </div>
        </div>

    </header>


  <!-- Main container -->
 <div class="flex w-full px-4 md:px-10 py-14 gap-12 flex-grow">


   <!-- Sidebar -->
<aside class="bg-white rounded-xl border border-gray-200 w-64 select-none">

  <!-- Profil (Default Profile) -->
    <!-- Profil (dengan padding) -->
    <div class="p-6">
      <div class="flex flex-col items-center space-y-4">

        <!-- Foto Profil -->
        <div class="w-28 h-28 rounded-full ring-8 ring-white overflow-hidden bg-gray-200">
          <img 
            id="profile-photo"
            src="default-profile.png"
            class="w-full h-full object-cover"
            onerror="this.src='default-profile.png'"
          />
        </div>

        <div class="text-center w-full">
          <p id="profile-name" class="font-semibold text-lg truncate">
              {{ auth()->user()->nama_depan }} {{ auth()->user()->nama_belakang }}
          </p>
          <p id="profile-email" class="text-sm text-gray-400 truncate">
              {{ auth()->user()->email }}
          </p>
      </div>

      </div>
    </div>



  <!-- MENU TANPA PADDING AGAR BLOCK FULL -->
  <nav class="flex flex-col text-gray-700 text-sm font-normal space-y-1">

    <a href="#" class="flex items-center gap-3 py-2 px-4 hover:bg-gray-100">
      <img src="ICON-DASHBOARD.png" class="w-5 h-5" />
      Dashboard
    </a>

    <a href="#" class="flex items-center gap-3 py-2 px-4 hover:bg-gray-100">
      <img src="ICON-BOOK.png" class="w-5 h-5" />
      Pelatihan Saya
    </a>

    <a href="#" class="flex items-center justify-between py-2 px-4 hover:bg-gray-100">
      <span class="flex items-center gap-3">
        <img src="ICON-BELL.png" class="w-5 h-5" />
        Notifikasi
      </span>
      <span class="bg-gray-300 rounded-full px-2 py-0.5 text-xs">12</span>
    </a>

    <a href="#" class="flex items-center justify-between py-2 px-4 hover:bg-gray-100">
      <span class="flex items-center gap-3">
        <img src="ICON-CHAT.png" class="w-5 h-5" />
        Chat Support
      </span>
      <span class="bg-gray-300 rounded-full px-2 py-0.5 text-xs">2</span>
    </a>

    <!-- ACTIVE -->
    <a href="#" class="relative block bg-[#E2E8F0] text-gray-700 font">

    <!-- Garis kiri -->
    <span class="absolute left-0 top-0 bottom-0 w-[3px] bg-[#1E293B] rounded-r-md"></span>

    <div class="flex items-center gap-3 py-2 pl-4 pr-4">
        <img src="ICON-INTERN.png" class="w-5 h-5" />
        <span>Program Magang</span>
    </div>

    </a>

    <a href="#" class="flex items-center gap-3 py-2 px-4 hover:bg-gray-100">
      <img src="ICON-SETTINGS.png" class="w-5 h-5" />
      Settings
    </a>

    <a href="{{ route('logout') }}" class="flex items-center gap-3 py-2 px-4 hover:underline text-red-600 font-semibold">
      <img src="ICON-LOGOUT.png" class="w-5 h-5" />
      Log out
    </a>

  </nav>
</aside>

    <!-- Content -->
     <!-- Content -->
<main class="flex-1 flex justify-center">

    <div class="bg-white p-12 rounded-2xl shadow-sm border border-[#E5E7EB] 
                w-[780px] min-h-[360px] my-auto">

        <!-- JUDUL -->
        <h1 class="text-xl font-bold mb-10 leading-snug text-left">
            Peserta dengan ID 
            <span class="text-[#0166FF] font-extrabold">PM001</span> 
            pada periode magang <br>
            18 November 2025 – 18 Maret 2026 akan melaksanakan wawancara pada:
        </h1>

        <!-- KOTAK JADWAL -->
        <main class="flex-1 flex justify-center">
    <div class="bg-white p-12 rounded-2xl shadow-sm border border-[#E5E7EB] w-[780px] min-h-[360px] my-auto">
        <h1 class="text-xl font-bold mb-10 leading-snug text-left">
        Peserta dengan ID 
        <span class="text-[#0166FF] font-extrabold">{{ $pendaftaran->peserta_id }}</span> 
        pada periode magang <br>
        {{ $pendaftaran->tanggal_mulai->format('d F Y') }} – {{ $pendaftaran->tanggal_berakhir->format('d F Y') }} akan melaksanakan wawancara pada:
        </h1>

        <div class="bg-white p-10 rounded-3xl shadow-lg border border-[#E2E8F0] max-w-2xl mx-auto">
        <div class="flex gap-6 items-center">
            <img src="/img/interview.png" class="w-40" />

            <div class="flex flex-col gap-2">
            <p class="font-semibold text-gray-800 text-lg">Jadwal Wawancara</p>
            <p class="text-gray-700 text-sm flex items-center gap-2">
                <span class="font-semibold">{{ $pendaftaran->pewawancara }}</span>
            </p>
            <p class="text-gray-700 text-sm flex items-center gap-2">
                📅 {{ $pendaftaran->tanggal_wawancara->format('l, d F Y') }}
            </p>
            <p class="text-gray-700 text-sm flex items-center gap-2">
                🕘 {{ $pendaftaran->tanggal_wawancara->format('H:i') }} – Selesai
            </p>
            <p class="text-gray-700 text-sm flex items-center gap-2">
                📍 {{ $pendaftaran->tempat_wawancara }}
            </p>
            </div>
        </div>

        <p class="text-xs text-gray-500 mt-6 text-center">
            Harap hadir 20 menit sebelum jadwal dimulai dan membawa berkas pendukung.
        </p>
        </div>
    </div>
    </main>

      </div>



  <!-- Footer -->
  <footer class="bg-[#EEF6FF] py-20 px-8 md:px-20 text-gray-600">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-16">

    <!-- Brand + Description -->
    <div>
      <div class="flex items-center space-x-3 mb-5">
        <!-- Ganti icon/logo di sini -->
        <img src="your-logo.png" class="w-8 h-8" alt="logo" />
        <div>
          <div class="font-semibold text-gray-900 text-lg leading-tight">SIMANOV</div>
          <div class="text-xs font-light leading-tight">Sistem Informasi Human Resource</div>
        </div>
      </div>

      <p class="text-sm font-light leading-relaxed max-w-xs">
        Faucibus quis fringilla scelerisque dui. Amet parturient dui venenatis amet sagittis viverra vel tincidunt. Orci tincidunt.
      </p>

     <button class="mt-8 bg-[#0166FF] hover:bg-[#0049c1] transition text-white py-3 px-6 rounded-lg inline-flex items-center space-x-2 text-sm font-medium shadow-md">
        <img src="chat-icon.png" alt="" class="w-5 h-5 object-contain" />
        <span>Start Live Chat</span>
    </button>

    </div>

    <!-- Company -->
    <div>
      <h3 class="font-semibold mb-4 text-gray-900">Company</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-black">Home</a></li>
        <li><a href="#" class="hover:text-black">About us</a></li>
        <li><a href="#" class="hover:text-black">Courses</a></li>
        <li><a href="#" class="hover:text-black">Instructors</a></li>
        <li><a href="#" class="hover:text-black">Contact Us</a></li>
      </ul>
    </div>

    <!-- Resources -->
    <div>
      <h3 class="font-semibold mb-4 text-gray-900">Resources</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-black">Community</a></li>
        <li><a href="#" class="hover:text-black">Video Guides</a></li>
        <li><a href="#" class="hover:text-black">Documentation</a></li>
        <li><a href="#" class="hover:text-black">Certification</a></li>
        <li><a href="#" class="hover:text-black">Scholarships</a></li>
      </ul>
    </div>

    <!-- Help -->
    <div>
      <h3 class="font-semibold mb-4 text-gray-900">Help</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-black">Customer Support</a></li>
        <li><a href="#" class="hover:text-black">Terms & Conditions</a></li>
        <li><a href="#" class="hover:text-black">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</footer>

</body>
</html>
