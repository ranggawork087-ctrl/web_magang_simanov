<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SIMANOV</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'kuning': '#FFD05A',
                        'biru-cerah': '#0166FF',
                        'hitam-abu': '#0E0E0F',
                        'hitam': '#000000',
                        'putih': '#FFFFFF',
                        'abu-muda': '#D9D9D9'
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
    </style>
</head>

<body class="bg-gray-50 font-manrope">

<div class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-6xl flex items-center justify-between gap-12">

        <!-- Logo dan judul -->
        <div class="flex-1 flex flex-col items-center justify-center text-center">
            <div class="flex flex-col items-center mb-8">
                <div class="w-12 h-16 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded mb-3 flex items-center justify-center">
                    <div class="w-5 h-10 bg-biru-cerah rounded"></div>
                </div>

                <h1 class="text-1xl font-bold leading-tight text-hitam">SIMANOV</h1>
                <p class="text-sm text-gray-600">Sistem Informasi Rumah Inovasi</p>
            </div>

            <h2 class="text-3xl font-bold text-hitam">DASHBOARD ADMIN</h2>
        </div>

        <!-- FORM LOGIN -->
        <div class="flex-1 max-w-md">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="relative w-[350px] h-[350px] bg-biru-cerah rounded-3xl shadow-xl p-8">

                    <h3 class="text-3xl font-bold text-hitam text-center mb-6">Masuk</h3>

                    <!-- Email -->
                    <input 
                        name="email"
                        id="username"
                        type="email"
                        placeholder="Email"
                        class="w-full px-6 py-4 rounded-2xl bg-white bg-opacity-20 backdrop-blur-sm
                        border-none text-hitam placeholder-black placeholder-opacity-40
                        focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-30 mb-4"
                    />

                    <!-- Password -->
                    <input 
                        name="password"
                        id="password"
                        type="password"
                        placeholder="Password"
                        class="w-full px-6 py-4 rounded-2xl bg-white bg-opacity-20 backdrop-blur-sm
                        border-none text-hitam placeholder-black placeholder-opacity-40
                        focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-30 mb-8"
                    />

                    <!-- Tombol Submit -->
                    <button 
                        type="submit"
                        class="absolute top-[80%] -translate-y-1/2 right-[-22px]
                        w-16 h-16 bg-kuning rounded-full flex items-center justify-center 
                        shadow-xl hover:scale-110 transition-transform">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" 
                             viewBox="0 0 24 24" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </button>

                </div>
            </form>
        </div>

    </div>
</div>

<script>
    // Animasi input
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.2s';
        });

        input.addEventListener('blur', function() {
            this.style.transform = 'scale(1)';
        });
    });
</script>

</body>
</html>
