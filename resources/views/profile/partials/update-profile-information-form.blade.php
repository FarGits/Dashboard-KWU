<section>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label class="block font-bold text-sm text-gray-900 uppercase">Nama Lengkap</label>
            <input name="name" type="text" class="block mt-1 w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-blue-500 focus:border-blue-500 shadow-sm" value="{{ old('name', $user->name) }}" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label class="block font-bold text-sm text-gray-900 uppercase">Email</label>
            <input name="email" type="email" class="block mt-1 w-full border-gray-300 rounded-xl bg-white text-gray-900 focus:ring-blue-500 focus:border-blue-500 shadow-sm" value="{{ old('email', $user->email) }}" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-6 py-2.5 bg-blue-600 text-white font-bold text-xs uppercase tracking-widest rounded-xl hover:bg-blue-700 transition shadow-lg shadow-blue-100">
                Simpan Perubahan
            </button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-green-600 font-medium italic">Tersimpan.</p>
            @endif
        </div>
    </form>
</section>