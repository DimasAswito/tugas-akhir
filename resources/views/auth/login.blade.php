<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/auth/login.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        
        <form id="login-form" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Login</button>
        </form>

        <div class="my-4 flex items-center before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
            <p class="text-center font-semibold mx-4">atau</p>
        </div>

        <button id="google-login" class="w-full flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039L38.804 9.61C34.566 5.83 29.63 3.5 24 3.5C11.75 3.5 1.5 13.75 1.5 26S11.75 48.5 24 48.5c11.026 0 20.33-8.086 21.89-18.599A23.836 23.836 0 0 0 43.611 20.083z"/><path fill="#FF3D00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12.5 24 12.5c3.059 0 5.842 1.154 7.961 3.039l7.07-7.07C34.566 5.83 29.63 3.5 24 3.5C16.586 3.5 10.232 7.61 6.306 14.691z"/><path fill="#4CAF50" d="M24 48.5c5.586 0 10.518-2.477 14.183-6.526l-6.757-5.238C28.895 39.223 26.561 40.5 24 40.5c-5.22 0-9.596-3.404-11.181-7.986l-6.571 4.819C10.232 40.89 16.586 48.5 24 48.5z"/><path fill="#1976D2" d="M43.611 20.083H42V20H24v8h11.303c-.792 2.237-2.231 4.166-4.087 5.571l6.757 5.238C42.843 36.315 45.425 30.76 45.425 24c0-2.316-.328-4.545-.889-6.667l-2.828-2.828C43.336 15.98 43.611 17.51 43.611 20.083z"/></svg>
            Lanjutkan dengan Google
        </button>

        <p id="error-message" class="mt-4 text-center text-sm text-red-600"></p>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Belum punya akun? <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500">Daftar gratis</a>
            </p>
        </div>
    </div>

</body>
</html>