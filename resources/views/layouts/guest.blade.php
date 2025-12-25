<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-50 relative overflow-hidden">
            
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 z-0"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-50 z-0"></div>

            <div class="z-10 text-center mb-8">
                <a href="/" class="flex flex-col items-center gap-2">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg mb-2">
                        <span class="text-white font-bold text-2xl">K</span>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-gray-900">KWU Portal</span>
                </a>
            </div>

            <div class="z-10 w-full sm:max-w-md mt-2 px-8 py-10 bg-white shadow-2xl shadow-blue-100 overflow-hidden sm:rounded-2xl border border-gray-100">
                {{ $slot }}
            </div>

            <div class="z-10 mt-8 text-sm text-gray-500">
                &copy; {{ date('Y') }} Monitoring UMKM Mahasiswa
            </div>
        </div>
    </body>
</html>