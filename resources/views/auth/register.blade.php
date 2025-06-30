<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    @vite(['resources/css/app.css', 'resources/js/auth/register.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Buat Akun Baru</h2>
        
        <form id="register-form" class="space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Daftar</button>
        </form>

        <p id="error-message" class="mt-4 text-center text-sm text-red-600"></p>
        <p id="success-message" class="mt-4 text-center text-sm text-green-600"></p>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Sudah punya akun? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">Masuk di sini</a>
            </p>
        </div>
    </div>
</body>
</html>