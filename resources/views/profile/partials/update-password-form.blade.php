<section>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label class="block font-bold text-sm text-gray-900 uppercase">Password Saat Ini</label>
            <input name="current_password" type="password" class="block mt-1 w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-blue-500 shadow-sm" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label class="block font-bold text-sm text-gray-900 uppercase">Password Baru</label>
            <input name="password" type="password" class="block mt-1 w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-blue-500 shadow-sm" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label class="block font-bold text-sm text-gray-900 uppercase">Konfirmasi Password Baru</label>
            <input name="password_confirmation" type="password" class="block mt-1 w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-blue-500 shadow-sm" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-bold text-xs uppercase tracking-widest rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-100">
                Ganti Password
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-600 font-medium italic">Berhasil diperbarui.</p>
            @endif
        </div>
    </form>
</section>