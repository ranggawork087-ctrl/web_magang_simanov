<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pendaftar - SIMANOV</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'hitam': '#000000',
                        'putih-muda': '#F8F9FA',
                        'putih': '#FFFFFF',
                        'abu-sedang': '#848D92',
                        'abu-terang': '#D9D9D9',
                        'biru-cerah': '#0166FF',
                        'biru-muda': '#01A0E3',
                        'biru-gelap': '#253C80',
                        'hijau': '#28A745',
                        'merah-soft': '#DC3545',
                        'merah-tua': '#D31510',
                        'kuning-terang': '#FFDF10'
                    },
                    fontFamily: {
                        'manrope': ['Manrope', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background-color: white;
            border-radius: 16px;
            max-width: 800px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>

</head>
<body class="bg-putih-muda font-manrope">
    <div class="flex min-h-screen flex-col">
        <!-- Header -->
        <div class="bg-biru-gelap text-white px-8 py-3 flex justify-between items-center shadow-md">
            <div class="flex items-start gap-3">
                <div class="flex flex-col">
                    <div class="flex items-center mb-1">
                        <div class="w-6 h-8 bg-linear-to-br from-yellow-400 to-yellow-600 rounded mr-2 flex items-center justify-center">
                            <div class="w-2 h-4 bg-biru-gelap rounded"></div>
                        </div>
                        <div>
                            <h1 class="text-sm font-bold leading-tight">SIMANOV</h1>
                            <p class="text-[10px] text-abu-terang opacity-80">Sistem Informasi Rumah Inovatif</p>
                        </div>
                    </div>
                    <h2 class="text-lg font-bold">DASHBOARD ADMIN</h2>
                </div>
            </div>
            <div class="flex items-center">
                <span class="mr-2 text-base">Halo,</span>
                <span class="text-biru-muda font-bold text-base">ADMIN</span>
                <button class="ml-6">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </button>
            </div>
        </div>

       <div class="flex flex-1 overflow-hidden">

    <!-- Sidebar -->
    <div class="bg-biru-gelap text-white flex flex-col min-w-[220px]" style="width: 220px;">
                <nav class="flex-1 pt-4">
                    <a href="{{ route('dashboard.admin') }}" class="flex items-center px-6 py-3.5 hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                        <span class="font-semibold text-base">Dashboard</span>
                    </a>
                    <a href="{{ route('admin.kelolapendaftaran') }}" class="flex items-center px-6 py-3.5 bg-[#9DA5BB] border-l-4 border-white">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                        <span class="font-semibold text-base">Kelola Pendaftar</span>
                    </a>
                    <a href="{{ route('admin.datawawancara') }}" class="flex items-center px-6 py-3.5 hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-2.06 11L15 15.28 12.06 17l.78-3.33-2.59-2.24 3.41-.29L15 8l1.34 3.14 3.41.29-2.59 2.24.78 3.33z"/>
                        </svg>
                        <span class="font-semibold text-base">Data Wawancara</span>
                    </a>
                    <div class="mx-6 my-6 border-t border-white opacity-20"></div>
                    <a href="#" onclick="openKeluarModal(); return false;" class="flex items-center px-6 py-3.5 text-merah-soft hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                    </svg>
                    <span class="font-semibold text-base">Keluar</span>
                </a>
                </nav>

                <div class="p-6 text-xs text-abu-terang border-t border-white border-opacity-20">
                    <p class="mb-1">Session: Admin</p>
                    <p>Terakhir login: <span id="lastLogin"></span></p>
                </div>
            </div>

            <!-- Main Content -->
        <div class="flex-1 flex justify-center overflow-x-hidden">
    <div class="p-9 w-full max-w-6xl">


                    <h2 class="text-3xl font-bold mb-2 text-biru-gelap">Kelola Pendaftar</h2>
                    <p class="text-abu-sedang mb-6 text-base">Cari, filter, dan lakukan tindakan pada pendaftar</p>

                    <!-- Search and Filter Section -->
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-abu-sedang" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                               <input 
                                    type="text" 
                                    id="searchInput"
                                    onkeyup="searchTable()"
                                    placeholder="Cari nama, email, Instansi..." 
                                    class="pl-12 pr-4 py-3 border border-abu-terang rounded-full w-80 focus:outline-none focus:ring-2 focus:ring-biru-muda focus:border-transparent"
                                >                       
                            </div>
                            <div class="relative">
                               <select id="statusFilter" onchange="filterTable()" class="appearance-none px-6 py-3 pr-10 border border-abu-terang rounded-full bg-white focus:outline-none focus:ring-2 focus:ring-biru-muda focus:border-transparent cursor-pointer">
                                    <option value="">Semua Status</option>
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="wawancara">Wawancara</option>
                                    <option value="menunggu">Menunggu</option>
                                </select>
                                <svg class="absolute right-4 top-1/2 transform -translate-y-1/2 w-4 h-4 text-hitam pointer-events-none" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <button
                            onclick="exportTableToCSV('pendaftar.csv')"
                            class="px-6 py-3 border-2 border-hitam text-hitam rounded-full font-semibold hover:bg-hitam hover:text-white transition">
                            Simpan .csv
                        </button>
                    </div>

                    <!-- Table Section -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        <div class="bg-putih-muda px-6 py-4 border-b border-abu-terang">
                            <p class="text-sm text-abu-sedang">Daftar pendaftar - gunakan pencarian/filter untuk menemukan data</p>
                        </div>
                        <div class="overflow-x-auto">
                            <table id="pendaftarTable" class="w-full">
                                <thead>
                                    <tr class="bg-biru-muda text-white">
                                        <th class="px-6 py-4 text-left font-bold text-sm">No</th>
                                        <th class="px-6 py-4 text-left font-bold text-sm">Nama Lengkap</th>
                                        <th class="px-6 py-4 text-left font-bold text-sm">Asal Instansi</th>
                                        <th class="px-6 py-4 text-left font-bold text-sm">Kontak</th>
                                        <th class="px-6 py-4 text-left font-bold text-sm">Tanggal Daftar</th>
                                        <th class="px-6 py-4 text-center font-bold text-sm">Status</th>
                                        <th class="px-6 py-4 text-center font-bold text-sm">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($kelolapendaftaran as $item)
                                <tr class="border-b">
                                    <!-- No -->
                                    <td class="py-4 px-6">{{ $loop->iteration }}
                                    </td>

                                    <td>
                                        {{ $item->nama_depan }} {{ $item->nama_belakang }}
                                    </td>

                                    <!-- Asal Instansi -->
                                    <td class="py-4 px-6">
                                        {{ $item->asal_sekolah }}
                                    </td>

                                    <!-- Kontak -->
                                    <td class="py-4 px-6">
                                        <div>{{ $item->whatsapp }}</div>
                                    </td>

                                    <!-- Tanggal Daftar -->
                                    <td class="py-4 px-6 text-center">
                                        {{ $item->created_at->format('Y/m/d') }}
                                    </td>

                                    <!-- Status -->
                                    <td class="py-4 px-6 text-center">
                                        @if ($item->status == 'lolos')
                                            <span class="px-4 py-1 bg-green-500 text-white rounded-full text-sm">Diterima</span>
                                        @elseif ($item->status == 'tidak_lolos')
                                            <span class="px-4 py-1 bg-red-500 text-white rounded-full text-sm">Ditolak</span>
                                        @elseif ($item->status == 'jadwal_wawancara')
                                            <span class="px-4 py-1 bg-blue-500 text-white rounded-full text-sm">Wawancara</span>
                                        @elseif ($item->status == 'selesai_wawancara')
                                            <span class="px-4 py-1 bg-blue-500 text-white rounded-full text-sm">Wawancara</span>
                                        @else
                                            <span class="px-4 py-1 bg-yellow-400 text-black rounded-full text-sm">Menunggu</span>
                                        @endif
                                    </td>

                                    <!-- Aksi -->
                                    <td class="py-4 px-6 text-center flex gap-2">

                                        <button 
                                            onclick="openModal(this)"
                                            data-id="{{ $item->id }}"
                                            data-nama="{{ $item->nama_depan }} {{ $item->nama_belakang }}"
                                            data-nim="{{ $item->peserta_id }}"
                                            data-instansi="{{ $item->asal_sekolah }}"
                                            data-email="{{ $item->email }}"
                                            data-hp="{{ $item->whatsapp }}"
                                            data-prodi="{{ $item->program_studi }}"
                                            data-status="{{ ucfirst(str_replace('_',' ', $item->status)) }}"
                                            data-status-raw="{{ $item->status }}"
                                            data-status-class="
                                                @if($item->status=='lolos') bg-hijau
                                                @elseif($item->status=='tidak_lolos') bg-merah-soft
                                                @elseif($item->status=='jadwal_wawancara') bg-biru-muda
                                                @else bg-kuning
                                                @endif
                                            "
                                            data-durasi="{{ $item->tanggal_mulai }} s/d {{ $item->tanggal_berakhir }}"
                                            data-foto="{{ asset('storage/foto/'.$item->foto) }}"

                                            data-cv="{{ route('magang.file', [$item->id, 'cv']) }}"
                                            data-surat="{{ route('magang.file', [$item->id, 'surat']) }}"
                                            data-porto="{{ route('magang.file', [$item->id, 'portofolio']) }}"

                                            class="px-4 py-1.5 border-2 border-biru-muda text-biru-muda rounded-lg text-xs font-semibold hover:bg-biru-muda hover:text-white transition">
                                            Lihat
                                        </button>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Modal Konfirmasi Terima -->
<div id="konfirmasiTerimaModal" class="modal">
    <div class="modal-content p-8 max-w-sm">
        <div class="flex flex-col items-center text-center">
            <!-- Icon centang hijau -->
            <div class="w-16 h-16 bg-hijau rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <!-- Teks pertanyaan -->
            <h3 class="text-lg font-bold mb-2 text-hitam">Apakah Anda yakin ingin menyetujui pendaftar ini?</h3>
            <p class="text-sm text-abu-sedang mb-6">Pendaftar akan menerima notifikasi bahwa mereka telah diterima.</p>
            <!-- Tombol Batal dan Ya, Lanjutkan -->
            <div class="flex gap-3 w-full justify-center">
                <button onclick="closeTerimaModal()" class="px-8 py-2 bg-abu-terang text-hitam rounded-lg font-semibold hover:bg-gray-400 transition">Batal</button>
                <button onclick="konfirmasiTerima()" class="px-6 py-2 bg-hijau text-white rounded-lg font-semibold hover:bg-green-600 transition">Ya, Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Tolak -->
<div id="konfirmasiTolakModal" class="modal">
    <div class="modal-content p-8 max-w-sm">
        <div class="flex flex-col items-center text-center">
            <!-- Icon X merah -->
            <div class="w-16 h-16 bg-merah-soft rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </div>
            <!-- Teks pertanyaan -->
            <h3 class="text-lg font-bold mb-2 text-hitam">Apakah Anda yakin ingin menolak pendaftar ini?</h3>
            <p class="text-sm text-abu-sedang mb-6">Pendaftar akan menerima notifikasi bahwa mereka telah ditolak.</p>
            <!-- Tombol Batal dan Ya, Lanjutkan -->
            <div class="flex gap-3 w-full justify-center">
                <button onclick="closeTolakModal()" class="px-8 py-2 bg-abu-terang text-hitam rounded-lg font-semibold hover:bg-gray-400 transition">Batal</button>
                <button onclick="konfirmasiTolak()" class="px-6 py-2 bg-merah-soft text-white rounded-lg font-semibold hover:bg-red-600 transition">Ya, Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Keluar -->
<div id="konfirmasiKeluarModal" class="modal">
    <div class="modal-content p-8 max-w-sm">
        <div class="flex flex-col items-center text-center">
            <!-- Icon logout merah -->
            <div class="w-16 h-16 bg-merah-soft rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                </svg>
            </div>
            <!-- Teks pertanyaan -->
            <h3 class="text-lg font-bold mb-2 text-hitam">Keluar dari Dashboard?</h3>
            <p class="text-sm text-abu-sedang mb-6">Apakah Anda yakin ingin keluar dari akun admin?</p>
            <!-- Tombol Batal dan Keluar -->
            
           <div class="flex gap-4 justify-end">
            <button onclick="closeKeluarModal()"
                class="px-8 py-2 bg-abu-terang text-hitam rounded-lg font-semibold hover:bg-gray-400 transition">
                Batal
            </button>

            <button onclick="window.location.href='{{ route('logout') }}'"
                class="px-6 py-2 bg-merah-soft text-white rounded-lg font-semibold hover:bg-red-600 transition">
                Keluar
            </button>
        </div>

        </div>
    </div>
</div>

    <!-- Modal Detail Pendaftar -->
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-40 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl w-full max-w-4xl p-8 relative">

        <!-- Close -->
        <button onclick="closeModal()" class="absolute top-6 right-6 text-gray-400 hover:text-gray-600">
            ✕
        </button>

        <h2 class="text-2xl font-bold mb-6">Detail Pendaftar</h2>

        <div class="grid grid-cols-3 gap-6">

            <!-- KIRI -->
            <div class="col-span-2">
                <h3 id="modalNama" class="text-xl font-bold mb-1"></h3>
                <p id="modalNIM" class="text-sm text-abu-sedang mb-4"></p>

                <div class="mb-6">
                    <span class="text-sm font-semibold mr-2">Status:</span>
                    <span id="modalStatus" class="px-4 py-1.5 rounded-full text-xs font-semibold text-white"></span>
                </div>

                <hr class="my-6 border-abu-terang">

                <div class="space-y-3 text-sm">
                    <div class="grid grid-cols-3">
                        <span class="font-semibold">Email</span>
                        <span id="modalEmail" class="col-span-2 text-abu-sedang"></span>
                    </div>
                    <div class="grid grid-cols-3">
                        <span class="font-semibold">No. HP</span>
                        <span id="modalHP" class="col-span-2 text-abu-sedang"></span>
                    </div>
                    <div class="grid grid-cols-3">
                        <span class="font-semibold">Instansi</span>
                        <span id="modalInstansi" class="col-span-2 text-abu-sedang"></span>
                    </div>
                    <div class="grid grid-cols-3">
                        <span class="font-semibold">Program Studi</span>
                        <span id="modalProdi" class="col-span-2 text-abu-sedang"></span>
                    </div>
                </div>

                <!-- FILE PENDAFTAR -->
                <hr class="my-6 border-abu-terang">

                <div>
                    <p class="text-sm font-semibold mb-2">File :</p>
                    <div class="flex flex-wrap gap-3">

                        <a id="fileCV" target="_blank"
                        class="px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold hover:bg-blue-200 transition">
                            CV.pdf
                        </a>

                        <a id="fileSurat" target="_blank"
                        class="px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold hover:bg-blue-200 transition">
                            Surat Permohonan.pdf
                        </a>

                        <a id="filePorto" target="_blank"
                        class="px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold hover:bg-blue-200 transition">
                            Portofolio.pdf
                        </a>

                    </div>
                </div>

            </div>

            <!-- KANAN -->
            <div class="col-span-1 text-center">
                <img id="modalFoto" class="w-full rounded-lg shadow-md mb-4 object-cover"
                     src="https://via.placeholder.com/200x250">

                <p class="font-semibold mb-1">Durasi Magang</p>
                <p id="modalDurasi" class="text-sm text-abu-sedang"></p>
            </div>
        </div>

        <!-- Action Buttons -->
            <div id="actionButtons" class="flex justify-end gap-3 mt-8">
                <button onclick="closeModal()"
                    class="px-6 py-2.5 bg-abu-sedang text-white rounded-lg font-semibold hover:bg-gray-600 transition">
                    Tutup
                </button>

                <!-- Tombol Final -->
                <button id="btnTerima"
                    class="px-6 py-2.5 bg-hijau text-white rounded-lg font-semibold hover:bg-green-600 transition">
                    Terima
                </button>

                <button id="btnTolak"
                    class="px-6 py-2.5 bg-merah-soft text-white rounded-lg font-semibold hover:bg-red-600 transition">
                    Tolak
                </button>
            </div>

            <!-- Tooltip Status Final -->
            <div id="finalTooltip"
                class="hidden mt-6 px-5 py-3 bg-gray-100 border border-gray-300 rounded-lg text-sm text-gray-700 flex items-center gap-2">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 2a7 7 0 100 14A7 7 0 009 2zM8 6h2v5H8V6zm0 6h2v2H8v-2z"/>
                </svg>
                <span>Status pendaftar sudah <b>final</b> dan tidak dapat diubah.</span>
            </div>

<script>
        // Data pendaftar
        let currentPendaftaranId = null;
        let currentStatus = null;

        function openModal(btn) {
            document.getElementById('fileCV').classList.add('hidden');
            document.getElementById('fileSurat').classList.add('hidden');
            document.getElementById('filePorto').classList.add('hidden');

            currentPendaftaranId = btn.dataset.id;
            currentStatus = btn.dataset.statusRaw; 

            document.getElementById('modalNama').innerText = btn.dataset.nama;
            document.getElementById('modalNIM').innerText = btn.dataset.nim + ' | ' + btn.dataset.instansi;
            document.getElementById('modalEmail').innerText = btn.dataset.email;
            document.getElementById('modalHP').innerText = btn.dataset.hp;
            document.getElementById('modalInstansi').innerText = btn.dataset.instansi;
            document.getElementById('modalProdi').innerText = btn.dataset.prodi;
            document.getElementById('modalDurasi').innerText = btn.dataset.durasi;
            document.getElementById('modalFoto').src = btn.dataset.foto;
            // FILE
            setFile('fileCV', btn.dataset.cv);
            setFile('fileSurat', btn.dataset.surat);
            setFile('filePorto', btn.dataset.porto);


            const status = document.getElementById('modalStatus');
            status.innerText = btn.dataset.status;
            status.className = 'px-4 py-1.5 rounded-full text-xs font-semibold text-white ' + btn.dataset.statusClass;


            const btnTerima = document.getElementById('btnTerima');
            const btnTolak  = document.getElementById('btnTolak');
            const tooltip = document.getElementById('finalTooltip');

            if (currentStatus === 'lolos' || currentStatus === 'tidak_lolos') {
            btnTerima.disabled = true;
            btnTolak.disabled = true;

            btnTerima.classList.add('opacity-50', 'cursor-not-allowed');
            btnTolak.classList.add('opacity-50', 'cursor-not-allowed');
        } else {
            btnTerima.disabled = false;
            btnTolak.disabled = false;

            btnTerima.classList.remove('opacity-50', 'cursor-not-allowed');
            btnTolak.classList.remove('opacity-50', 'cursor-not-allowed');
        }

            document.getElementById('detailModal').classList.remove('hidden');
            document.getElementById('detailModal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('detailModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });


        document.getElementById('btnTerima').addEventListener('click', function () {
            confirmUpdate('terima', 'Terima Pendaftar?', 'Pendaftar akan dinyatakan DITERIMA');
        });

        document.getElementById('btnTolak').addEventListener('click', function () {
            confirmUpdate('tolak', 'Tolak Pendaftar?', 'Pendaftar akan DITOLAK');
        });

        function setFile(id, url) {
            const el = document.getElementById(id);
            if (!url || url === '#' || url === '') {
                el.classList.add('hidden');
                el.removeAttribute('href');
            } else {
                el.href = url;
                el.classList.remove('hidden');
            }
        }

        function confirmUpdate(action, title, text) {
            Swal.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, lanjutkan',
                cancelButtonText: 'Batal',
                confirmButtonColor: action === 'terima' ? '#22c55e' : '#ef4444'
            }).then((result) => {
                if (result.isConfirmed) {
                    updateStatus(action);
                }
            });
        }

        function updateStatus(action) {
            fetch(`/admin/pendaftaran/${currentPendaftaranId}/${action}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: `Pendaftar berhasil ${data.status_text}`,
                        timer: 1500,
                        showConfirmButton: false
                    });

                    // Update tampilan status di modal
                    const statusEl = document.getElementById('modalStatus');
                    statusEl.innerText = data.status_text;
                    statusEl.className = 'px-4 py-1.5 rounded-full text-xs font-semibold text-white ' +
                        (data.status === 'lolos' ? 'bg-hijau' : 'bg-merah-soft');

                    // Disable tombol setelah update
                    document.getElementById('btnTerima').disabled = true;
                    document.getElementById('btnTolak').disabled = true;

                    document.getElementById('btnTerima').classList.add('opacity-50','cursor-not-allowed');
                    document.getElementById('btnTolak').classList.add('opacity-50','cursor-not-allowed');

                    // Optional refresh tabel
                    setTimeout(() => location.reload(), 1600);
                }
            });
        }


        function openKeluarModal() {
            document.getElementById('konfirmasiKeluarModal').classList.add('active');
        }

        function closeKeluarModal() {
            document.getElementById('konfirmasiKeluarModal').classList.remove('active');
        }

        function konfirmasiKeluar() {
            alert('Anda telah keluar dari sistem!');
            closeKeluarModal();
        }

        // Close modal when clicking outside
        document.getElementById('konfirmasiKeluarModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeKeluarModal();
            }
        });

        
        function searchTable() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let table = document.getElementById("pendaftarTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) { 
                let cells = rows[i].getElementsByTagName("td");
                let match = false;

                for (let j = 0; j < cells.length; j++) {
                    let text = cells[j].textContent.toLowerCase();
                    if (text.includes(input)) {
                        match = true;
                        break;
                    }
                }

                rows[i].style.display = match ? "" : "none";
            }
        }

        function filterTable() {
            let filter = document.getElementById("statusFilter").value.toLowerCase();
            let table = document.getElementById("pendaftarTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 1; i < rows.length; i++) {
                let statusCell = rows[i].getElementsByTagName("td")[5]; 
                if (!statusCell) continue;

                let statusText = statusCell.textContent.toLowerCase().trim();

                if (filter === "" || statusText.includes(filter)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

    document.getElementById("statusFilter").addEventListener("change", function () {
    let filter = this.value.toLowerCase();
let rows = document.querySelectorAll("#pendaftarTable tbody tr");

    rows.forEach(row => {
        let statusCell = row.querySelector(".status");
        if (!statusCell) return;

        let status = statusCell.innerText.toLowerCase();

        if (filter === "" || filter === "semua status") {
            row.style.display = "";
        } else if (status === filter) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }
    });
});

    //fungsi export csv
    function exportTableToCSV(filename) {
    const table = document.getElementById("pendaftarTable");
    let csv = [];

    const rows = table.querySelectorAll("tr");

    rows.forEach(row => {
        let cols = row.querySelectorAll("th:not(:last-child), td:not(:last-child)");
        let rowData = [];

        cols.forEach(col => {
            let text = col.innerText
                .replace(/\n/g, ' ')
                .replace(/;/g, ',')
                .trim();
            rowData.push(text);
        });

        csv.push(rowData.join(";")); // 🔥 delimiter Excel Indonesia
    });

    downloadCSV(csv.join("\n"), filename);
}

function downloadCSV(csv, filename) {
    // BOM UTF-8 supaya Excel tidak berantakan
    const BOM = "\uFEFF";
    const blob = new Blob([BOM + csv], {
        type: "text/csv;charset=utf-8;"
    });

    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = filename;

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>
<script>
    const now = new Date();

    const formatted = now.getFullYear() + '/' +
        String(now.getMonth() + 1).padStart(2, '0') + '/' +
        String(now.getDate()).padStart(2, '0') + ' ' +
        String(now.getHours()).padStart(2, '0') + ':' +
        String(now.getMinutes()).padStart(2, '0') + ':' +
        String(now.getSeconds()).padStart(2, '0');

    document.getElementById('lastLogin').textContent = formatted;
</script>
</body>
</html>