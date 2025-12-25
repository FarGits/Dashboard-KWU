<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">
            {{ __('Hapus Akun') }}
        </h2>
        <p class="mt-1 text-sm text-gray-700">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen. Sebelum menghapus akun, harap unduh data atau informasi apa pun yang ingin Anda simpan.') }}
        </p>
    </header>

    <button 
        type="button"
        class="px-6 py-3 bg-red-600 text-white font-bold text-xs uppercase tracking-widest rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-100"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        {{ __('Hapus Akun Saya') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 bg-white">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-gray-900">
                {{ __('Apakah Anda yakin ingin menghapus akun?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-700">
                {{ __('Setelah akun Anda dihapus, semua data akan hilang permanen. Silakan masukkan password Anda untuk mengonfirmasi bahwa Anda ingin menghapus akun secara permanen.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="block font-bold text-sm text-gray-900 uppercase mb-1">Password Anda</label>
                <input 
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-red-500 focus:border-red-500 shadow-sm"
                    placeholder="{{ __('Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button 
                    type="button"
                    class="px-5 py-2.5 bg-gray-100 text-gray-700 font-bold text-xs uppercase tracking-widest rounded-xl hover:bg-gray-200 transition"
                    x-on:click="$dispatch('close')"
                >
                    {{ __('Batal') }}
                </button>

                <button 
                    type="submit"
                    class="px-5 py-2.5 bg-red-600 text-white font-bold text-xs uppercase tracking-widest rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-100"
                >
                    {{ __('Ya, Hapus Permanen') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>