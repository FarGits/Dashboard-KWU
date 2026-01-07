<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Pemesanan Produk
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">

            <form onsubmit="showSuccess(event)">

                <div class="space-y-6">

                    {{-- Gambar Produk --}}
                    <div class="flex justify-center">
                        <img src="{{ asset('images/produk/sandwich.jpg') }}"
                             alt="Sandwich MBG"
                             class="w-45 h-45 rounded-lg object-cover">
                    </div>

                    {{-- Menu + Jumlah --}}
                    <div class="flex items-end gap-4">

                        {{-- Pilih Menu --}}
                        <div class="flex-1">
                            <label class="block font-medium mb-1">Pilih Menu</label>
                            <select class="w-full border rounded p-2">
                                <option>Mix</option>
                                <option>Mangga</option>
                                <option>Anggur</option>
                                <option>Stroberry</option>
                            </select>
                        </div>

                        {{-- Jumlah --}}
                        <div>
                            <label class="block font-medium mb-1">Jumlah</label>
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    onclick="qty.value=Math.max(1,qty.value-1)"
                                    class="px-3 py-2 bg-gray-200 rounded text-lg">−</button>

                                <input id="qty" type="number" value="1"
                                       class="w-14 text-center border rounded">

                                <button type="button"
                                    onclick="qty.value++"
                                    class="px-3 py-2 bg-gray-200 rounded text-lg">+</button>
                            </div>
                        </div>

                    </div>

                    {{-- Tombol --}}
                    <div class="flex gap-4 pt-2">
                        <button type="button"
                            class="flex-1 px-4 py-2 bg-gray-500 text-white rounded">
                            Pesan Nanti
                        </button>

                        <button type="submit"
                            class="flex-1 px-4 py-2 bg-blue-600 text-white rounded">
                            Pesan Sekarang
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>

    {{-- Script HARUS di bawah --}}
    <script>
        function showSuccess(e) {
            e.preventDefault();
            alert("✅ Pesanan berhasil dibuat!\nTerima kasih sudah memesan 😊");
        }
    </script>

</x-app-layout>
