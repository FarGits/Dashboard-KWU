<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            {{ __('Pengaturan Profil') }}
        </h2>
        <p class="text-sm text-gray-700 font-medium">Kelola informasi akun dan keamanan data Anda di sini.</p>
    </x-slot>

    <div class="py-12 bg-gray-50 relative overflow-hidden">
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40 z-0"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40 z-0"></div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8 relative z-10">
            
            <div class="p-8 bg-white/95 backdrop-blur-sm shadow-xl shadow-blue-100/50 sm:rounded-2xl border border-white ring-1 ring-gray-200">
                <div class="max-w-xl">
                    <section>
                        <header class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Informasi Profil</h2>
                            <p class="mt-1 text-sm text-gray-700">Perbarui nama dan alamat email akun Anda.</p>
                        </header>
                        @include('profile.partials.update-profile-information-form')
                    </section>
                </div>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm shadow-xl shadow-blue-100/50 sm:rounded-2xl border border-white ring-1 ring-gray-200">
                <div class="max-w-xl">
                    <section>
                        <header class="mb-6">
                            <h2 class="text-lg font-bold text-gray-900">Update Password</h2>
                            <p class="mt-1 text-sm text-gray-700">Pastikan akun Anda menggunakan password yang panjang dan acak agar tetap aman.</p>
                        </header>
                        @include('profile.partials.update-password-form')
                    </section>
                </div>
            </div>

            <div class="p-8 bg-white/95 backdrop-blur-sm shadow-xl shadow-red-100/50 sm:rounded-2xl border border-red-50 ring-1 ring-red-100">
                <div class="max-w-xl">
                    <section>
                        <header class="mb-6">
                            <h2 class="text-lg font-bold text-red-600">Hapus Akun</h2>
                            <p class="mt-1 text-sm text-gray-700">Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.</p>
                        </header>
                        @include('profile.partials.delete-user-form')
                    </section>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>