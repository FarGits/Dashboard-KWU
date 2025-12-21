<x-app-layout>
    <!-- Wrapper ala Volt -->
    <div class="bg-gray-100 min-h-screen -m-6 p-6">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">
                Dashboard
            </h1>
            <p class="text-gray-500">
                Selamat datang di Dashboard KWU
            </p>
        </div>

        <!-- Statistik Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <div class="bg-white rounded-xl shadow-sm p-6">
                <p class="text-sm text-gray-500">Total UMKM</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">120</h2>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <p class="text-sm text-gray-500">Total Omzet</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">
                    Rp 15.000.000
                </h2>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <p class="text-sm text-gray-500">Pengguna</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">32</h2>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <p class="text-sm text-gray-500">Kategori UMKM</p>
                <h2 class="text-3xl font-bold text-gray-800 mt-2">8</h2>
            </div>

        </div>

        <!-- Section bawah -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Aktivitas -->
            <div class="bg-white rounded-xl shadow-sm p-6 lg:col-span-2">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Aktivitas Terbaru
                </h3>

                <ul class="space-y-3 text-sm text-gray-600">
                    <li>✔ UMKM “Maju Jaya” ditambahkan</li>
                    <li>✔ Data omzet diperbarui</li>
                    <li>✔ Pengguna baru mendaftar</li>
                </ul>
            </div>

            <!-- Info -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Info Sistem
                </h3>

                <p class="text-sm text-gray-600">
                    Dashboard KWU versi 1.0<br>
                    Laravel {{ app()->version() }}
                </p>
            </div>

        </div>

    </div>
</x-app-layout>
