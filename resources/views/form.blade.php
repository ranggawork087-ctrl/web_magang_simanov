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

  <style>
    body {
      font-family: 'Manrope', sans-serif;
    }
    .bg-sidebar {
      background-color: #FFD05A;
    }
    .btn-blue {
      background-color: #0166FF;
    }
    .btn-blue:hover {
      background-color: #0049c1;
    }
    .bg-footer {
      background-color: #EFF6FF;
    }
    .bg-form {
      background-color: #E2E8F0;
    }
    /* Scrollbar none for file input label spacing */
    ::-webkit-file-upload-button {
      cursor: pointer;
    }
  </style>
</head>
<body class="bg-white">
    @include('components.navbar')
  
    <main class="max-w-3xl mx-auto px-6 md:px-0 py-16">

        <!-- Tombol Kembali -->
        <button onclick="history.back()" aria-label="Back" 
        class="flex items-center space-x-2 text-[#0166FF] mb-8 font-semibold text-base hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="#0166FF" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6" /></svg>
        <span>Kembali</span>
        </button>

        <div class="text-center">
        <h1 class="text-3xl font-extrabold text-black mb-3 leading-tight tracking-tight">
            Bangun Karier Nyata, Mulai dari Pengalaman Magang!
        </h1>
        <p class="text-gray-500 text-sm mb-10 leading-relaxed">
            Kembangkan potensi dan raih pengalaman nyata bersama BPSDMP Kominfo Surabaya<br/>
            Terbuka bagi siapa pun yang ingin belajar, berkontribusi, dan tumbuh di dunia digital
        </p>
        </div>

        <!-- Form -->
        <form id="formMagang" method="POST" action="{{ route('view.submitForm') }}" enctype="multipart/form-data"class="bg-white rounded-xl shadow p-8 space-y-6" novalidate>
        @csrf

        <fieldset class="mb-1 text-center">
            <legend class="font-semibold text-lg">Isi Formulir Pendaftaran Magang</legend>
            <p class="text-xs font-light mt-1 text-gray-600">Daftarkan dirimu dan mulai perjalanan magang bersama BPSDMP Kominfo Surabaya</p>
        </fieldset>

        <!-- Nama Lengkap -->
        <div class="flex gap-5">
            <div class="flex-1">
            <label for="nama_depan" class="block text-sm font-semibold mb-1 text-gray-700">Nama Lengkap</label>
            <input
                type="text"
                id="nama_depan"
                name="nama_depan"
                placeholder="Masukkan nama depan"
                class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
                required
            />
            <p id="error-nama_depan" class="text-xs text-red-600 mt-1 hidden">Nama depan wajib diisi</p>
            </div>
            <div class="flex-1">
            <label for="nama_belakang" class="block text-sm font-semibold mb-1 text-gray-700">&nbsp;</label>
            <input
                type="text"
                id="nama_belakang"
                name="nama_belakang"
                placeholder="Masukkan nama belakang"
                class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
                required
            />
            <p id="error-nama_belakang" class="text-xs text-red-600 mt-1 hidden">Nama belakang wajib diisi</p>
            </div>
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-semibold mb-1 text-gray-700">Email</label>
            <input
            type="email"
            id="email"
            name="email"
            placeholder="Masukkan email aktif"
            class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
            required
            />
            <p id="error-email" class="text-xs text-red-600 mt-1 hidden">Email harus diisi dengan format yang benar (contoh: email@domain.com)</p>
        </div>

        <!-- Nomor WhatsApp -->
        <div>
            <label for="whatsapp" class="block text-sm font-semibold mb-1 text-gray-700">Nomor WhatsApp</label>
            <input
            type="tel"
            id="whatsapp"
            name="whatsapp"
            placeholder="Masukkan nomor WhatsApp aktif"
            class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
            pattern="^\+?62\d{8,15}$"
            required
            />
            <p id="error-whatsapp" class="text-xs text-red-600 mt-1 hidden">Nomor WhatsApp harus dimulai dengan kode negara (+62) dan diikuti 8-15 digit angka</p>
        </div>

        <!-- Asal Sekolah / Universitas -->
        <div>
            <label for="asal_sekolah" class="block text-sm font-semibold mb-1 text-gray-700">Asal Sekolah / Universitas</label>
            <input
            type="text"
            id="asal_sekolah"
            name="asal_sekolah"
            placeholder="Contoh : Universitas Negeri Surabaya (Unesa)"
            class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
            required
            />
            <p id="error-asal_sekolah" class="text-xs text-red-600 mt-1 hidden">Asal sekolah/universitas wajib diisi</p>
        </div>

        <!-- Program Studi / Jurusan -->
        <div>
            <label for="program_studi" class="block text-sm font-semibold mb-1 text-gray-700">Program Studi / Jurusan</label>
            <input
            type="text"
            id="program_studi"
            name="program_studi"
            placeholder="Contoh : Teknik Informatika"
            class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
            required
            />
            <p id="error-program_studi" class="text-xs text-red-600 mt-1 hidden">Program studi/jurusan wajib diisi</p>
        </div>

        <!-- Tanggal Mulai dan Berakhir -->
        <div class="flex gap-5">
            <div class="flex-1">
            <label for="tanggal_mulai" class="block text-sm font-semibold mb-1 text-gray-700">Tanggal Mulai Magang</label>
            <input
                type="date"
                id="tanggal_mulai"
                name="tanggal_mulai"
                class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
                required
            />
            <p id="error-tanggal_mulai" class="text-xs text-red-600 mt-1 hidden">Tanggal mulai wajib dipilih</p>
            </div>
            <div class="flex-1">
            <label for="tanggal_berakhir" class="block text-sm font-semibold mb-1 text-gray-700">Tanggal Berakhir Magang</label>
            <input
                type="date"
                id="tanggal_berakhir"
                name="tanggal_berakhir"
                class="w-full rounded-lg bg-[#E2E8F0] py-3 px-4 text-sm placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-[#0166FF]"
                required
            />
            <p id="error-tanggal_berakhir" class="text-xs text-red-600 mt-1 hidden">Tanggal berakhir wajib dipilih</p>
            </div>
        </div>

        <!-- Upload Dokumen -->
        <div class="space-y-6">

            <!-- Surat Permohonan -->
            <div>
            <label for="surat_permohonan" class="text-sm font-semibold mb-1 block text-gray-700">Surat Permohonan (PDF)</label>
            <div class="flex items-center gap-3">
                <label for="surat_permohonan" class="btn-blue text-white rounded-lg inline-flex items-center space-x-2 cursor-pointer select-none py-2 px-4 text-sm">
                <img src="{{ asset('icon_upload.png') }}" class="w-5 h-5" />
                <span>Upload Berkas</span>
                </label>
                <span id="file-name-surat" class="bg-[#E2E8F0] rounded-lg px-4 py-3 flex-1 text-gray-600 text-sm select-text truncate">Tidak ada dokumen yang dipilih.</span>
            </div>
            <input type="file" id="surat_permohonan" name="surat_permohonan" accept="application/pdf" class="hidden" required />
            <p id="error-surat_permohonan" class="text-xs text-red-600 mt-1 hidden">File Surat Permohonan harus di-upload dan berformat PDF</p>
            </div>

            <!-- Curriculum Vitae -->
            <div>
            <label for="cv" class="text-sm font-semibold mb-1 block text-gray-700">Curriculum Vitae (PDF)</label>
            <div class="flex items-center gap-3">
                <label for="cv" class="btn-blue text-white rounded-lg inline-flex items-center space-x-2 cursor-pointer select-none py-2 px-4 text-sm">
                <img src="{{ asset('icon_upload.png') }}" class="w-5 h-5" />
                <span>Upload Berkas</span>
                </label>
                <span id="file-name-cv" class="bg-[#E2E8F0] rounded-lg px-4 py-3 flex-1 text-gray-600 text-sm select-text truncate">Tidak ada dokumen yang dipilih.</span>
            </div>
            <input type="file" id="cv" name="cv" accept="application/pdf" class="hidden" required />
            <p id="error-cv" class="text-xs text-red-600 mt-1 hidden">File CV harus di-upload dan berformat PDF</p>
            </div>

            <!-- Portofolio -->
            <div>
            <label for="portofolio" class="text-sm font-semibold mb-1 block text-gray-700">
                Portofolio (PDF) <span class="font-normal text-gray-400 text-xs">*ukuran file maksimal 50mb</span>
            </label>
            <div class="flex items-center gap-3">
                <label for="portofolio" class="btn-blue text-white rounded-lg inline-flex items-center space-x-2 cursor-pointer select-none py-2 px-4 text-sm">
                <img src="{{ asset('icon_upload.png') }}" class="w-5 h-5" />
                <span>Upload Berkas</span>
                </label>
                <span id="file-name-portofolio" class="bg-[#E2E8F0] rounded-lg px-4 py-3 flex-1 text-gray-600 text-sm select-text truncate">Tidak ada dokumen yang dipilih.</span>
            </div>
            <input type="file" id="portofolio" name="portofolio" accept="application/pdf" class="hidden" />
            <p id="error-portofolio" class="text-xs text-red-600 mt-1 hidden">File Portofolio maksimal ukuran 50MB dan harus berformat PDF</p>
        </div>

        <!-- Submit Button -->
        <div class="pt-5">
            <button
            type="submit"
            class="btn-blue w-full py-4 rounded-lg font-semibold text-lg text-white flex justify-center items-center gap-3 hover:bg-[#0049c1] transition"
            >
            <span>Kirim Formulir</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
            </button>
        </div>
        </form>

    </main>

    @include('components.footer')

    <!-- POPUP KONFIRMASI -->
    <div id="popup-confirm" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-50 flex items-center justify-center">
    <div class="relative bg-white w-[90%] max-w-[900px] p-10 rounded-[36px] text-center shadow-xl">

        <button onclick="closePopupConfirm()" class="absolute right-6 top-6 text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
        </svg>
        </button>

        <p class="text-[20px] font-medium leading-relaxed mt-6 mx-auto max-w-[700px]">
        Apakah Anda yakin ingin melanjutkan proses pendaftaran? <br>
        Mohon pastikan seluruh data dan dokumen yang diunggah sudah benar <br>
        karena setelah dikirim tidak dapat diubah atau diperbarui
        </p>

        <div class="flex justify-center mt-10 gap-8">
        <button onclick="closePopupConfirm()" class="w-56 py-3 text-white bg-[#2368FF] rounded-full text-lg font-semibold hover:bg-blue-700 transition">
            Batal
        </button>

        <button onclick="submitFinal()" class="w-56 py-3 text-white bg-[#2368FF] rounded-full text-lg font-semibold hover:bg-blue-700 transition">
            Submit Pendaftaran
        </button>
        </div>
    </div>
    </div>


    <!-- POPUP BERHASIL -->
    <div id="popup-success2" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-50 flex items-center justify-center">
    <div class="relative bg-white w-[90%] max-w-[900px] p-10 rounded-[36px] text-center shadow-xl">

        <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png"
            class="w-28 mx-auto mt-3">

        <p class="text-[20px] font-medium mt-8 leading-relaxed mx-auto max-w-[700px]">
        Seluruh dokumen Anda telah berhasil diunggah dan diterima oleh sistem. <br>
        Mohon menunggu konfirmasi selanjutnya melalui dashboard pengguna <br>
        pada status pendaftaran
        </p>

        <button onclick="goToDashboard()" 
                class="mt-10 w-72 py-3 bg-[#2368FF] text-white rounded-full text-lg font-semibold hover:bg-blue-700 transition">
        Cek Status Pendaftaran
        </button>

    </div>
    </div>




  <!-- Script Validasi & File Name Display -->
  <script>
    const form = document.getElementById('formMagang');

    // File input handlers to update filename display and validate
    function setupFileListener(inputId, spanId, maxMB = null) {
      const input = document.getElementById(inputId);
      const fileNameSpan = document.getElementById(spanId);

      input.addEventListener('change', () => {
        if(input.files.length > 0){
          const file = input.files[0];
          if(file.type !== "application/pdf") {
            fileNameSpan.textContent = "File harus berformat PDF.";
            input.value = "";
          } else if(maxMB && file.size > maxMB * 1024 * 1024){
            fileNameSpan.textContent = "Ukuran file terlalu besar (max " + maxMB + "MB)";
            input.value = "";
          } else {
            fileNameSpan.textContent = file.name;
          }
        } else {
          fileNameSpan.textContent = "Tidak ada dokumen yang dipilih.";
        }
      });
    }

    setupFileListener('surat_permohonan', 'file-name-surat');
    setupFileListener('cv', 'file-name-cv');
    setupFileListener('portofolio', 'file-name-portofolio', 50);

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      let valid = true;

      // Sembunyikan semua pesan error terlebih dahulu
      document.querySelectorAll('p[id^="error-"]').forEach(el => el.classList.add('hidden'));
      
      // Validasi input wajib
      ['nama_depan','nama_belakang','email','whatsapp','asal_sekolah','program_studi'].forEach(id => {
        const val = form[id].value.trim();
        if(!val) {
          document.getElementById('error-' + id).classList.remove('hidden');
          valid = false;
        }
      });

      // Email validasi pattern
      const email = form.email.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if(email && !emailPattern.test(email)){
        document.getElementById('error-email').classList.remove('hidden');
        valid = false;
      }

      // WhatsApp validasi pattern (harus mulai +62)
      const wa = form.whatsapp.value.trim();
      const waPattern = /^\+?62\d{8,15}$/;
      if(wa && !waPattern.test(wa)){
        document.getElementById('error-whatsapp').classList.remove('hidden');
        valid = false;
      }

      // Validasi tanggal mulai dan berakhir
      const mulai = form.tanggal_mulai.value;
      const berakhir = form.tanggal_berakhir.value;

      if(!mulai){
        document.getElementById('error-tanggal_mulai').classList.remove('hidden');
        valid = false;
      }
      if(!berakhir){
        document.getElementById('error-tanggal_berakhir').textContent = "Tanggal berakhir wajib dipilih";
        document.getElementById('error-tanggal_berakhir').classList.remove('hidden');
        valid = false;
      }

      if(mulai && berakhir){
        if(new Date(mulai) > new Date(berakhir)){
          document.getElementById('error-tanggal_berakhir').textContent = "Tanggal berakhir harus sama atau setelah tanggal mulai";
          document.getElementById('error-tanggal_berakhir').classList.remove('hidden');
          valid = false;
        }
      }

      // Validasi file upload wajib (surat_permohonan, cv)
      const surat = form.surat_permohonan;
      const cv = form.cv;

      if(surat.files.length === 0) {
        document.getElementById('error-surat_permohonan').textContent = "File Surat Permohonan harus di-upload dan berformat PDF";
        document.getElementById('error-surat_permohonan').classList.remove('hidden');
        valid = false;
      } else if(surat.files[0].type !== "application/pdf"){
        document.getElementById('error-surat_permohonan').textContent = "File Surat Permohonan harus berformat PDF";
        document.getElementById('error-surat_permohonan').classList.remove('hidden');
        valid = false;
      }

      if(cv.files.length === 0) {
        document.getElementById('error-cv').textContent = "File CV harus di-upload dan berformat PDF";
        document.getElementById('error-cv').classList.remove('hidden');
        valid = false;
      } else if(cv.files[0].type !== "application/pdf") {
        document.getElementById('error-cv').textContent = "File CV harus berformat PDF";
        document.getElementById('error-cv').classList.remove('hidden');
        valid = false;
      }

      // File Portofolio wajib, validasi PDF + max 50MB
        const port = form.portofolio;

        // CEK WAJIB
        if(port.files.length === 0){
        document.getElementById('error-portofolio').textContent = "File Portofolio harus di-upload dan berformat PDF";
        document.getElementById('error-portofolio').classList.remove('hidden');
        valid = false;
        } else {
        // CEK FORMAT PDF
        if(port.files[0].type !== "application/pdf"){
            document.getElementById('error-portofolio').textContent = "File Portofolio harus berformat PDF";
            document.getElementById('error-portofolio').classList.remove('hidden');
            valid = false;
        }

        // CEK MAX SIZE 50MB
        if(port.files[0].size > 50 * 1024 * 1024){
            document.getElementById('error-portofolio').textContent = "Ukuran file Portofolio maksimal 50MB";
            document.getElementById('error-portofolio').classList.remove('hidden');
            valid = false;
        }
        }
        
      if(valid){
        showConfirmPopup();
        // Reset nama file upload text
        ['file-name-surat', 'file-name-cv', 'file-name-portofolio'].forEach(id => {
          document.getElementById(id).textContent = "Tidak ada dokumen yang dipilih.";
        });
      } else{
        // Scroll to top supaya user lihat error dengan mudah
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    });

    function showConfirmPopup() {
      document.getElementById("popup-confirm").classList.remove("hidden");
    }

    // Close popup konfirmasi
    function closePopupConfirm() {
      document.getElementById("popup-confirm").classList.add("hidden");
    }

    // Setelah user klik "Submit Pendaftaran" pada popup 1
    function submitFinal() {
      document.getElementById("popup-confirm").classList.add("hidden");
      document.getElementById("popup-success2").classList.remove("hidden");
    }

    // Tombol "Cek Status Pendaftaran"
    function goToDashboard() {
        form.submit();
    }
  </script>

</body>
</html>
