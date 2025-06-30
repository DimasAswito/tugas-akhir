<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPTIMASI PENJADWALAN MATA KULIAH - POLIJE SIDOARJO</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>

    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.features')
    @include('partials.tentang')
    @include('partials.kontak')
    @include('partials.footer')

    <script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>