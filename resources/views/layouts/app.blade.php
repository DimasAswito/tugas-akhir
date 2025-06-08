<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Penjadwalan')</title>
    {{-- Memuat Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Anda bisa menambahkan konfigurasi custom di sini jika perlu */
        /* Contoh: Menyesuaikan warna biru agar konsisten */
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'biru-aksen': '#2563eb', // Contoh: Biru-600
                    }
                }
            }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

    <main class="container mx-auto p-4 sm:p-6 lg:p-8">
        @yield('content')
    </main>

</body>
</html>