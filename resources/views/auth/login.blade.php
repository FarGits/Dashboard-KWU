<x-guest-layout>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Selamat Datang Kembali</h2>
        <p class="text-sm text-gray-600">Masuk untuk mengakses dashboard UMKM Anda.</p>
    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email" class="block font-bold text-sm text-gray-900 uppercase tracking-wide">Alamat Email</label>
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <label for="password" class="block font-bold text-sm text-gray-900 uppercase tracking-wide">Password</label>
            <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-sm" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                <span class="ms-2 text-sm font-medium text-gray-700">Ingat saya</span>
            </label>
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-3 bg-blue-600 border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest hover:bg-blue-700 shadow-lg shadow-blue-200 transition">
                Masuk Ke Dashboard
            </button>
        </div>

        <div class="mt-6 flex flex-col gap-2 text-center">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-blue-600" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
            
            <a class="text-sm text-gray-600 hover:text-blue-600 font-medium underline decoration-2 underline-offset-4" href="{{ route('register') }}">
                Belum punya akun? Daftar di sini
            </a>
        </div>
    </form>
</x-guest-layout>