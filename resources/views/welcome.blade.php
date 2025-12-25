<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Monitoring UMKM - KWU</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900 font-sans">
    <div class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden">
        
        <nav class="absolute top-0 w-full p-6 flex justify-between items-center max-w-7xl mx-auto z-50">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center shadow-lg">
                    <span class="text-white font-bold text-xl">K</span>
                </div>
                <span class="font-bold text-xl tracking-tight text-gray-900">KWU Portal</span>
            </div>

            @if (Route::has('login'))
                <div class="flex gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2 bg-blue-600 text-white rounded-full font-medium hover:bg-blue-700 transition shadow-md">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-5 py-2 text-gray-600 font-medium hover:text-blue-600 transition">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2 bg-white text-blue-600 border border-blue-600 rounded-full font-medium hover:bg-blue-50 transition shadow-sm">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        <main class="z-50 text-center px-6 mt-16 relative">
            <span class="px-4 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-bold uppercase tracking-wider">Mata Kuliah Kewirausahaan</span>
            <h1 class="mt-6 text-5xl md:text-7xl font-extrabold text-gray-900 leading-tight">
                Kelola Bisnis <span class="text-blue-600 italic">UMKM</span> <br> Jadi Lebih Mudah.
            </h1>
            <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
                Platform monitoring performa bisnis untuk mahasiswa kewirausahaan. Pantau transaksi, analisis grafik, dan ambil keputusan bisnis tepat sasaran.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-8 py-4 bg-blue-600 text-white rounded-xl font-bold text-lg shadow-xl hover:bg-blue-700 hover:-translate-y-1 transition-all">Mulai Monitoring Sekarang</a>
                @else
                    <a href="{{ route('login') }}" class="px-8 py-4 bg-blue-600 text-white rounded-xl font-bold text-lg shadow-xl hover:bg-blue-700 hover:-translate-y-1 transition-all">Masuk ke Akun</a>
                    <a href="#features" class="px-8 py-4 bg-white text-gray-700 border border-gray-200 rounded-xl font-bold text-lg shadow-sm hover:bg-gray-50 transition-all">Pelajari Fitur</a>
                @endauth
            </div>
        </main>

        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse z-0"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse z-0"></div>
    </div>

    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="p-8 border border-gray-100 rounded-2xl bg-gray-50 shadow-sm text-center">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24 font-bold"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Real-time Analytics</h3>
                <p class="text-gray-600">Pantau data penjualan dan grafik performa secara instan.</p>
            </div>
            <div class="p-8 border border-gray-100 rounded-2xl bg-gray-50 shadow-sm text-center">
                <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Manajemen Profit</h3>
                <p class="text-gray-600">Hitung keuntungan bersih UMKM kamu dengan akurat.</p>
            </div>
            <div class="p-8 border border-gray-100 rounded-2xl bg-gray-50 shadow-sm text-center">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="font-bold text-xl mb-2">Strategi Cepat</h3>
                <p class="text-gray-600">Dapatkan interpretasi hasil untuk menentukan langkah bisnis.</p>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} Project Kewirausahaan Mahasiswa. Built with Laravel.
    </footer>
</body>
</html>