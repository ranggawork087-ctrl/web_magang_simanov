<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SIMANOV</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        'merah-tua': '#D31510'
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
        .modal-overlay.active {
            display: flex;
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
            <!-- KIRI - Logo dan Dashboard Admin -->
           <div class="flex items-start gap-3">
    <div class="flex flex-col">
        <div class="flex items-center mb-1">
            <!-- LOGO DIPERKECIL -->
            <div class="w-6 h-8 bg-linear-to-br from-yellow-400 to-yellow-600 rounded mr-2 flex items-center justify-center">
                <div class="w-2 h-4 bg-biru-gelap rounded"></div>
            </div>

            <!-- TEKS NAMA SISTEM -->
            <div>
                <h1 class="text-sm font-bold leading-tight">SIMANOV</h1>
                <p class="text-[10px] text-abu-terang opacity-80">Sistem Informasi Rumah Inovatif</p>
            </div>
        </div>

        <!-- TULISAN DASHBOARD ADMIN LEBIH BESAR -->
        <h2 class="text-lg font-bold">DASHBOARD ADMIN</h2>
    </div>
</div>


            <!-- KANAN - Halo Admin -->
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

        <div class="flex flex-1">
            <!-- Sidebar -->
<div class="w-70 bg-biru-gelap text-white flex flex-col" style="width: 235px;">
    <nav class="flex-1 pt-4">

        <!-- DASHBOARD (ACTIVE) -->
        <a href="{{ route('dashboard.admin') }}" class="flex items-center px-6 py-3.5 bg-[#9DA5BB] border-l-4 text-white">
            <svg class="w-6 h-6 mr-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
            </svg>
            <span class="font-semibold text-base text-white">Dashboard</span>
        </a>

        <!-- KELOLA PENDAFTAR (NON ACTIVE) -->
        <a href="{{ route('admin.kelolapendaftaran') }}" class="flex items-center px-6 py-3.5 hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
            </svg>
            <span class="font-semibold text-base">Kelola Pendaftar</span>
        </a>

        <!-- DATA WAWANCARA (NON ACTIVE) -->
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
            <div class="flex-1">
                <!-- Content -->
                <div class="p-8">
                    <h2 class="text-3xl font-bold mb-2 text-biru-gelap">
                        Selamat Datang, <span class="text-biru-muda">ADMIN</span>
                    </h2>
                    <p class="text-abu-sedang mb-8 text-base">Pantau status pendaftaran secara real-time.</p>

  <!-- Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 w-full">

    <!-- Total Pendaftar -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition relative min-h-[150px]">
        <div class="flex flex-col justify-between h-full">
            <h3 class="text-sm font-semibold text-hitam mb-2">Total Pendaftar</h3>
            <div class="text-5xl font-bold text-hitam">{{ $totalpendaftar }}</div>

            <div class="absolute bottom-4 right-4">
                <svg class="w-9 h-9 text-biru-cerah" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Pendaftar Diterima -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition relative min-h-[150px]">
        <div class="flex flex-col justify-between h-full">
            <h3 class="text-sm font-semibold text-hitam mb-2">Pendaftar Diterima</h3>
            <div class="text-5xl font-bold text-hijau">{{ $totalditerima }}</div>

            <div class="absolute bottom-4 right-4">
                <svg class="w-9 h-9 text-hijau" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                    <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="1.5"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Pendaftar Ditolak -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition relative min-h-[150px]">
        <div class="flex flex-col justify-between h-full">
            <h3 class="text-sm font-semibold text-hitam mb-2">Pendaftar Ditolak</h3>
            <div class="text-5xl font-bold text-merah-soft">{{ $totalditolak }}</div>

            <div class="absolute bottom-4 right-4">
                <svg class="w-9 h-9 text-merah-soft" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/>
                </svg>
            </div>
        </div>
    </div>

    <!-- Menunggu Wawancara -->
    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition relative min-h-[150px]">
        <div class="flex flex-col justify-between h-full">
            <h3 class="text-sm font-semibold text-hitam mb-2">Menunggu Wawancara</h3>
            <div class="text-5xl font-bold text-hitam">{{ $totalwawancara }}</div>

            <div class="absolute bottom-4 right-4">
                <svg class="w-9 h-9 text-hitam" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                </svg>
            </div>
        </div>
    </div>
</div>


                    <!-- Charts Section -->
                    <div class="grid grid-cols-3 gap-6">
                        <!-- Grafik Aktivitas Bulanan -->
                        <div class="col-span-2 bg-white rounded-xl shadow-md p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-lg font-bold text-hitam">Grafik Aktivitas Bulanan</h3>
                                <span class="text-sm text-abu-sedang">Jumlah pendaftar per bulan</span>
                            </div>
                            <div class="h-80">
                                <canvas id="chartAktivitas"></canvas>
                            </div>
                        </div>

                       <!-- Jadwal Wawancara Hari Ini -->
                        <div class="bg-white rounded-xl shadow-md p-4 overflow-h-auto y-auto">  
                            <h3 class="text-lg font-bold text-hitam mb-4">Jadwal Wawancara Hari Ini</h3>
                            <div class="space-y-3">

                                <!-- Interview Item -->
                                @foreach ($wawancarahariini as $wawancara)
                                <div class="border-l-4 border-biru-muda pl-4 py-2">
                                    <h4 class="font-bold text-base text-hitam mb-1">{{ $wawancara->nama_depan . $wawancara->nama_belakang }}</h4>
                                    <p class="text-sm text-abu-sedang mb-2">{{ $wawancara->tanggal_wawancara }}</p>
                                    <a href="{{ $wawancara->tempatwawancara }}" class="px-4 py-1.5 border-2 border-biru-muda text-biru-muda rounded-lg text-sm font-semibold hover:bg-biru-muda hover:text-white transition">
                                        Buka Link
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

    {{-- fungsi konfirmasi keluar --}}
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
    
    <script>
        //fungsi tombol keluar
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
    </script>

    <script>
        // Chart Aktivitas Bulanan
        const ctx = document.getElementById('chartAktivitas').getContext('2d');
        const chartAktivitas = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Jumlah Pendaftar',
                    data: [0, 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, 0],
                    backgroundColor: '#01A0E3',
                    borderRadius: 6,
                    barThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#253C80',
                        titleFont: {
                            family: 'Manrope',
                            size: 14
                        },
                        bodyFont: {
                            family: 'Manrope',
                            size: 13
                        },
                        padding: 12,
                        cornerRadius: 8
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 2,
                        ticks: {
                            stepSize: 0.2,
                            font: {
                                family: 'Manrope',
                                size: 12
                            },
                            color: '#848D92'
                        },
                        grid: {
                            color: '#F8F9FA',
                            lineWidth: 1
                        },
                        border: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Manrope',
                                size: 12
                            },
                            color: '#848D92'
                        },
                        border: {
                            display: false
                        }
                    }
                }
            }
        });
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