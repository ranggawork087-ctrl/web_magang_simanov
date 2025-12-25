<div class="banner select-none">
    Sedang dibuka Beasiswa Komdigi Batch 23 hingga 30 Oktober 2025! Klik untuk daftar &rarr;
</div>

<header class="flex items-center justify-between px-6 md:px-20 py-5 border-b border-gray-200 max-w-full">
    <div class="flex items-center space-x-3">
    
    <div class="flex items-center space-x-3">
        <img src="{{ asset('logo.png') }}" class="w-9 h-9 object-contain" alt="SIMANOV Logo" />
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
        <img src="{{ asset('icon1.png') }}" alt="" class="w-full h-full object-cover" />
    </div>

    <!-- Tombol Masuk -->
    <a href="{{ route('view.login') }}"
        class="px-6 py-2 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition">
        Masuk
    </a>

</div>


</header>