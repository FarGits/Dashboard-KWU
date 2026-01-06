<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Business Performance Dashboard') }}
        </h2>
    </x-slot>

    {{-- Banner Produk --}}
<div class="pt-6 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white rounded-xl shadow p-6 mb-6">
            <div class="flex items-center gap-6">

                {{-- Gambar --}}
                <img 
                    src="{{ asset('images/produk.jpg') }}"
                    class="w-32 h-32 rounded-lg object-cover"
                    alt="Produk"
                >

                {{-- Deskripsi --}}
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Sandwich MBG(Mood Booster Goddies)
                    </h2>

                    <p class="text-gray-600 mt-2">
                        Produk berkualitas tinggi dengan harga terjangkau,
                        cocok untuk kebutuhan harian.
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>


    <div class="pt-6 pb-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-8">
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Revenue</p>
                    <p class="text-2xl font-bold text-blue-600">Rp 5.2M</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Units Sold</p>
                    <p class="text-2xl font-bold text-gray-800">1,240</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Profit</p>
                    <p class="text-2xl font-bold text-green-500">Rp 1.8M</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Customers</p>
                    <p class="text-2xl font-bold text-gray-800">850</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Conv. Rate</p>
                    <p class="text-2xl font-bold text-purple-500">12.5%</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-700 mb-4">Tren Penjualan (14 Hari Terakhir)</h3>
                    <canvas id="salesChart" height="200"></canvas>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-700 mb-4">Proporsi Penjualan Produk</h3>
                    <div class="flex justify-center">
                        <canvas id="productChart" style="max-height: 250px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-blue-900 text-white p-6 rounded-xl shadow-lg mb-8">
                <h3 class="text-lg font-bold mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    Interpretasi Hasil & Keputusan Bisnis
                </h3>
                <ul class="list-disc ml-5 space-y-2 text-blue-100 text-sm">
                    <li><strong>Analisis Tren:</strong> Penjualan mengalami kenaikan sebesar 15% pada minggu kedua setelah peluncuran promo "Bundle Hemat".</li>
                    <li><strong>Produk Terlaris:</strong> Kategori 'Makanan Ringan' menyumbang 55% dari total pendapatan, menandakan stok harus diperbanyak di kategori ini.</li>
                    <li><strong>Keputusan ke Depan:</strong> Mengingat Conversion Rate mencapai 12.5%, kami akan meningkatkan budget iklan di Media Sosial untuk menarik lebih banyak traffic.</li>
                </ul>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // 1. Bar Chart (Sales Trend)
        const ctxSales = document.getElementById('salesChart').getContext('2d');
        new Chart(ctxSales, {
            type: 'bar',
            data: {
                labels: ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7', 'H8', 'H9', 'H10', 'H11', 'H12', 'H13', 'H14'],
                datasets: [{
                    label: 'Unit Terjual',
                    data: [45, 52, 48, 70, 65, 80, 95, 60, 55, 75, 85, 90, 110, 105],
                    backgroundColor: '#3b82f6',
                    borderRadius: 5
                }]
            }
        });

        // 2. Pie Chart (Product Mix)
        const ctxProduct = document.getElementById('productChart').getContext('2d');
        new Chart(ctxProduct, {
            type: 'doughnut',
            data: {
                labels: ['Makanan', 'Minuman', 'Merchandise'],
                datasets: [{
                    data: [55, 30, 15],
                    backgroundColor: ['#3b82f6', '#10b981', '#f59e0b'],
                    borderWidth: 0
                }]
            }
        });
    </script>
</x-app-layout>