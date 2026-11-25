<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kampus App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    <nav class="bg-blue-700 shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-white text-xl font-bold tracking-wide">🎓 KampusApp</a>
            <div class="flex gap-6">
                <a href="/" class="text-blue-100 hover:text-white transition">Home</a>
                <a href="/mahasiswa" class="text-blue-100 hover:text-white transition">Mahasiswa</a>
                <a href="/informasi" class="text-blue-100 hover:text-white transition">Informasi</a>
                <a href="/kurikulum" class="text-blue-100 hover:text-white transition">Kurikulum</a>
                <a href="/tentang" class="text-blue-100 hover:text-white transition">Tentang</a>
                <a href="/kontak" class="text-blue-100 hover:text-white transition">Kontak</a>
            </div>
        </div>
    </nav>

    {{-- KONTEN UTAMA --}}
    <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-blue-700 text-blue-100 text-center py-4 text-sm">
        &copy; {{ date('Y') }} KampusApp &mdash; Dibuat dengan ❤️ menggunakan Laravel
    </footer>

</body>
</html>
