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
                <div class="flex items-start gap-6">
                    {{-- Gambar di samping kiri --}}
                    <img
                        src="{{ asset('images/produk/sandwich.jpg') }}"
                        class="w-48 h-48 rounded-lg object-cover flex-shrink-0"
                        alt="Sandwich MBG"
                    />

                    {{-- Deskripsi --}}
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-gray-800">
                            Sandwich MBG (Mood Booster Goodies)
                        </h2>

                        <p class="text-gray-600 mt-2">
                            Sandwich MBG adalah solusi makan praktis dan sehat dengan harga terjangkau. 
                            Terbuat dari bahan segar dan bergizi, cocok untuk gaya hidup aktif dan kebutuhan harian. 
                            Rasakan kenikmatan dan kualitasnya sekarang juga!
                        </p>

                      
                    </div>
                </div>
            </div>

 {{-- Introducing Section --}}
<div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow p-6 mb-6">
    <div class="flex flex-col lg:flex-row items-center gap-8">
        
        {{-- Foto di sebelah kiri --}}
        <div class="lg:w-1/2">
            <img
                src="{{ asset('images/produk/swd.png') }}"
                class="w-full h-auto rounded-lg object-cover shadow-md"
                alt="Sandwich MBG Premium"
            />
        </div>

        {{-- Konten di sebelah kanan --}}
        <div class="lg:w-1/2">

            <h2 class="block text-center text-2xl font-extrabold text-gray-800 mb-4 leading-tight">
                Introducing <br>
                <span class="text-blue-700">Sandwich MBG</span>
            </h2>

           <p class="text-gray-600 mb-6 indent-8">
    Nikmati sensasi sandwich premium dengan isian berkualitas tinggi,
    dibuat dari <span class="font-semibold">bahan organik pilihan</span>
    dan <span class="font-semibold">roti whole grain</span>.
    Pilihan tepat untuk kamu yang peduli rasa, nutrisi, dan gaya hidup sehat.
</p>



            {{-- CTA --}}
            <div class="flex flex-wrap items-center gap-4 mb-6">
                <a href="#order" class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
                <span class="text-sm text-gray-500">
                    Fresh • Healthy • Premium
                </span>
            </div>

            {{-- Social Media Icons --}}
            <div class="flex items-center gap-5">
                
                {{-- WhatsApp --}}
                <a href="085882261026" class="text-green-500 hover:scale-110 transition" aria-label="WhatsApp">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A11.91 11.91 0 0 0 12.06 0C5.5 0 .18 5.33.18 11.88c0 2.1.55 4.15 1.6 5.97L0 24l6.3-1.65a11.82 11.82 0 0 0 5.76 1.47h.01c6.55 0 11.88-5.33 11.88-11.88a11.9 11.9 0 0 0-3.43-8.46ZM12.07 21.6a9.72 9.72 0 0 1-4.95-1.35l-.35-.21-3.74.98.99-3.65-.23-.37a9.71 9.71 0 1 1 8.28 4.6Zm5.62-7.7c-.31-.16-1.84-.91-2.12-1.02-.29-.1-.5-.16-.71.16-.21.31-.82 1.02-1.01 1.23-.18.21-.37.24-.68.08-.31-.16-1.32-.49-2.51-1.56-.93-.83-1.56-1.86-1.74-2.17-.18-.31-.02-.48.14-.64.14-.14.31-.37.47-.55.16-.18.21-.31.31-.52.1-.21.05-.39-.03-.55-.08-.16-.71-1.7-.97-2.33-.26-.63-.52-.55-.71-.56h-.61c-.21 0-.55.08-.84.39-.29.31-1.1 1.07-1.1 2.61s1.13 3.03 1.29 3.24c.16.21 2.23 3.4 5.41 4.76.76.33 1.36.52 1.83.67.77.25 1.47.21 2.02.13.62-.09 1.84-.75 2.1-1.47.26-.72.26-1.34.18-1.47-.08-.13-.29-.21-.6-.37Z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a href="https://www.instagram.com/sandwich.mbg?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="text-pink-500 hover:scale-110 transition" aria-label="Instagram">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.2c3.2 0 3.6 0 4.9.07 1.17.06 1.8.25 2.22.42.55.21.94.46 1.35.87.41.41.66.8.87 1.35.17.42.36 1.05.42 2.22.07 1.3.07 1.7.07 4.9s0 3.6-.07 4.9c-.06 1.17-.25 1.8-.42 2.22-.21.55-.46.94-.87 1.35-.41.41-.8.66-1.35.87-.42.17-1.05.36-2.22.42-1.3.07-1.7.07-4.9.07s-3.6 0-4.9-.07c-1.17-.06-1.8-.25-2.22-.42-.55-.21-.94-.46-1.35-.87-.41-.41-.66-.8-.87-1.35-.17-.42-.36-1.05-.42-2.22C2.2 15.6 2.2 15.2 2.2 12s0-3.6.07-4.9c.06-1.17.25-1.8.42-2.22.21-.55.46-.94.87-1.35.41-.41.8-.66 1.35-.87.42-.17 1.05-.36 2.22-.42C8.4 2.2 8.8 2.2 12 2.2Zm0 3.2a6.6 6.6 0 1 0 0 13.2 6.6 6.6 0 0 0 0-13.2Zm0 10.9a4.3 4.3 0 1 1 0-8.6 4.3 4.3 0 0 1 0 8.6Zm6.85-11.6a1.54 1.54 0 1 1-3.08 0 1.54 1.54 0 0 1 3.08 0Z"/>
                    </svg>
                </a>

                {{-- TikTok --}}
                <a href="https://www.tiktok.com/@sandwichmbg?is_from_webapp=1&sender_device=pc" class="text-gray-800 hover:scale-110 transition" aria-label="TikTok">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.32 5.38a5.35 5.35 0 0 1-3.13-1.25 5.29 5.29 0 0 1-1.23-3.12h-3.6v14.2a2.88 2.88 0 1 1-2.88-2.88c.28 0 .55.04.8.11V8.8a6.48 6.48 0 1 0 6.48 6.48V8.1a8.92 8.92 0 0 0 4.56 1.25V5.38Z"/>
                    </svg>
                </a>

            </div>
        </div>
    </div>
</div>


        </div>
    </div>

    {{-- Dashboard Metrics --}}
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
                <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-xs font-bold text-gray-400 uppercase">price</p>
                    <p class="text-2xl font-bold text-gray-800">Rp 10.000 pcs</p>
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