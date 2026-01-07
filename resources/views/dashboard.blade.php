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
                        src="{{ asset('images/produk/sandwich.jpg') }}"
                        class="w-32 h-32 rounded-lg object-cover"
                        alt="Produk"
                    />


                    {{-- Deskripsi --}}
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">
                            Sandwich MBG(Mood Booster Goddies)
                        </h2>

                        <p class="text-gray-600 mt-2">
                            Sandwich MBG (Modo Booster Goddies) solusi makan praktis dan sehat dengan harga terjangkau.
                             Terbuat dari bahan segar dan bergizi, cocok untuk gaya hidup aktif dan kebutuhan harian.
                              Rasakan kenikmatan dan kualitasnya sekarang juga!


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
                    <p class="text-2xl font-bold text-blue-600">Rp 90.000</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Units Sold</p>
                    <p class="text-2xl font-bold text-gray-800">9 pcs</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Profit</p>
                    <p class="text-2xl font-bold text-green-500">Rp -50.000</p>
                </div>
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">Customers</p>
                    <p class="text-2xl font-bold text-gray-800">9</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-700 mb-4">Tren Penjualan (7 Hari Terakhir)</h3>
                    <canvas id="salesChart" height="200"></canvas>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-700 mb-1">Loyalitas Pelanggan</h3>
                    <p class="text-xs text-gray-500 mb-4">Persentase pelanggan yang melakukan pembelian ulang (Repeat Order).</p>
                    <div class="flex justify-center">
                        <canvas id="retentionChart" style="max-height: 250px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="bg-blue-900 text-white p-6 rounded-xl shadow-lg mb-8">
                <h3 class="text-lg font-bold mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    Interpretasi Hasil & Keputusan Bisnis
                </h3>
                <ul class="list-disc ml-5 space-y-2 text-blue-100 text-sm">
    <li><strong>Analisis Pelanggan:</strong> Dari total 9 pelanggan, terdapat 4 orang (±44%) yang telah melakukan pembelian ulang (Repeat Order).</li>
    <li><strong>Kepuasan Produk:</strong> Angka retensi mendekati 50% menunjukkan bahwa Sandwich MBG memiliki kecocokan rasa (Product-Market Fit) yang sangat kuat di mata konsumen.</li>
    <li><strong>Strategi Retensi:</strong> Kami akan memfokuskan strategi pada 5 pembeli baru lainnya melalui pengiriman pesan "Terima Kasih" agar mereka juga terdorong untuk membeli kembali.</li>
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
                labels: ['H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'H7',],
                datasets: [{
                    label: 'Unit Terjual',
                    data: [4, 0, 0, 0, 0, 0, 5,],
                    backgroundColor: '#3b82f6',
                    borderRadius: 4
                }]
            }
        });


        // 2. Doughnut Chart (Customer Retention)
        const ctxRetention = document.getElementById('retentionChart').getContext('2d');
        new Chart(ctxRetention, {
            type: 'doughnut',
            data: {
                labels: ['Pembeli Baru (5 Orang)', 'Pembeli Setia (4 Orang)'],
                datasets: [{
                    data: [5, 4], // 5 orang belum balik, 4 orang sudah balik (Total 9)
                    backgroundColor: ['#e2e8f0', '#3b82f6'],
                    hoverOffset: 4,
                    borderWidth: 0
                }]
            },
            options: {
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 12,
                                weight: 'bold'
                            }
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>