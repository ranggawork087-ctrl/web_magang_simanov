<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Wawancara - SIMANOV</title>
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

                    <!-- DASHBOARD (NON ACTIVE) -->
                    <a href="{{ route('dashboard.admin') }}" class="flex items-center px-6 py-3.5 hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                        <span class="font-semibold text-base">Dashboard</span>
                    </a>

                    <!-- KELOLA PENDAFTAR (NON ACTIVE) -->
                    <a href="{{ route('admin.kelolapendaftaran') }}" class="flex items-center px-6 py-3.5 hover:bg-white hover:bg-opacity-10 transition border-l-4 border-transparent">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                        <span class="font-semibold text-base">Kelola Pendaftar</span>
                    </a>

                    <!-- DATA WAWANCARA (ACTIVE) -->
                    <a href="{{ route('admin.datawawancara') }}" class="flex items-center px-6 py-3.5 bg-[#9DA5BB] border-l-4 text-white">
                        <svg class="w-6 h-6 mr-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-2.06 11L15 15.28 12.06 17l.78-3.33-2.59-2.24 3.41-.29L15 8l1.34 3.14 3.41.29-2.59 2.24.78 3.33z"/>
                        </svg>
                        <span class="font-semibold text-base text-white">Data Wawancara</span>
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
                <div id="jadwalModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                    <div class="bg-white w-full max-w-md rounded-xl p-6">
                        <h3 class="text-lg font-bold mb-4">Tambah Jadwal Wawancara</h3>

                        <div class="space-y-4">
                            <select id="namaPendaftar" class="w-full border rounded p-2">
                                <option value="" disabled selected>-- Pilih Pendaftar --</option>
                                @foreach($pendaftar as $p)
                                    <option value="{{ $p->id }}">
                                        {{ $p->nama_depan }} {{ $p->nama_belakang }}
                                    </option>
                                @endforeach
                            </select>

                            <input type="datetime-local" id="tanggalWaktu" class="w-full border rounded p-2">

                            <input type="text" id="linkTempat" class="w-full border rounded p-2"
                                placeholder="Zoom / Ruang 101">
                        </div>

                        <div class="flex justify-end gap-2 mt-6">
                            <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded">
                                Batal
                            </button>
                            <button onclick="simpanJadwal()" class="px-4 py-2 bg-blue-600 text-white rounded">
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <div class="flex justify-between mb-4">
                        <h2 class="text-2xl font-bold">Data Wawancara</h2>
                        <button onclick="openModal()"
                                class="bg-blue-600 text-white px-4 py-2 rounded">
                            + Tambah Jadwal Wawancara
                        </button>
                    </div>

                    <table class="w-full bg-white rounded shadow">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th></th>
                                <th class="p-3 text-left">Nama</th>
                                <th class="p-3 text-left">Tanggal</th>
                                <th class="p-3 text-left">Tempat</th>
                                <th class="p-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($wawancara as $w)
                            <tr class="border-b">
                                <td class="p-3 text-center">
                                    <input
                                        type="checkbox"
                                        class="row-checkbox cursor-pointer"
                                        onchange="konfirmasiSelesai(this, {{ $w->id }})"
                                    >
                                </td>
                                <td class="p-3">
                                    {{ $w->nama_depan }} {{ $w->nama_belakang }}
                                </td>
                                <td class="p-3">
                                    {{ \Carbon\Carbon::parse($w->tanggal_wawancara)->format('Y/m/d H:i') }}
                                </td>
                                <td class="p-3 text-blue-600">
                                    {{ $w->tempatwawancara }}
                                </td>
                                <td class="p-3 text-center"> 
                                    <button onclick="hapusWawancara({{ $w->id }})" class="px-3 py-1 bg-merah-soft text-white rounded hover:bg-merah-tua">
                                     Hapus 
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

        // Fungsi untuk membuka modal
        function openModal() {
            const modal = document.getElementById('jadwalModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('jadwalModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

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

        // Fungsi untuk menyimpan jadwal
        function simpanJadwal() {
        const idPendaftar = document.getElementById('namaPendaftar').value;
        const tanggalWawancara = document.getElementById('tanggalWaktu').value;
        const tempatWawancara = document.getElementById('linkTempat').value;

        if (!idPendaftar || !tanggalWawancara || !tempatWawancara) {
            Swal.fire({
                title: 'Peringatan',
                text: 'Semua field wajib diisi',
                icon: 'warning'
            });
            return;
        }

        Swal.fire({
            title: 'Simpan Jadwal?',
            text: 'Pastikan data wawancara sudah benar.',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Simpan',
            cancelButtonText: 'Batal',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33'
        })
        .then((result) => {
            if (!result.isConfirmed) {
                return;
            }

            fetch("{{ route('admin.wawancara.simpan') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .content
                },
                body: JSON.stringify({
                    id_pendaftar: idPendaftar,
                    tanggal_wawancara: tanggalWawancara,
                    tempat_wawancara: tempatWawancara
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Jadwal wawancara berhasil disimpan',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    Swal.fire({
                        title: 'Gagal',
                        text: data.message || 'Gagal menyimpan jadwal wawancara',
                        icon: 'error'
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    title: 'Error',
                    text: 'Request gagal, silakan coba lagi',
                    icon: 'error'
                });
            });
        });
    }

    function konfirmasiSelesai(checkbox, id) {
    if (!checkbox.checked) return;

    Swal.fire({
        title: 'Konfirmasi',
        text: 'Apakah wawancara sudah selesai?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, selesai',
        cancelButtonText: 'Batal'
    }).then((result) => {

        if (!result.isConfirmed) {
            checkbox.checked = false;
            return;
        }

        fetch(`/admin/wawancara/selesai/${id}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document
                    .querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Wawancara telah diselesaikan',
                    timer: 1500,
                    showConfirmButton: false
                });

                setTimeout(() => {
                    checkbox.closest('tr').remove();
                }, 1500);

            } else {
                checkbox.checked = false;
                Swal.fire('Gagal', data.message || 'Gagal update status', 'error');
            }
        })
        .catch(() => {
            checkbox.checked = false;
            Swal.fire('Error', 'Terjadi kesalahan sistem', 'error');
        });
    });
    }

    function hapusWawancara(id) {
        Swal.fire({
            title: 'Hapus Jadwal?',
            text: 'Jadwal wawancara yang dihapus tidak dapat dikembalikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus',
            cancelButtonText: 'Batal'
        })
        .then((result) => {
            if (!result.isConfirmed) {
                return;
            }

            fetch(`/admin/wawancara/hapus/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document
                        .querySelector('meta[name="csrf-token"]')
                        .content,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Jadwal wawancara berhasil dihapus',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    Swal.fire({
                        title: 'Gagal',
                        text: data.message || 'Gagal menghapus jadwal wawancara',
                        icon: 'error'
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    title: 'Error',
                    text: 'Terjadi kesalahan sistem',
                    icon: 'error'
                });
            });
        });
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