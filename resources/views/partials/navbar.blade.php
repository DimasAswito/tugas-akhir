<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('assets/images/Logo.png') }}" alt="Logo" class="h-10 w-10">
                    <span class="ml-3 text-xl font-semibold text-blue-600">OPTIMASI PENJADWALAN</span>
                </div>
                <div class="hidden md:ml-6 md:flex md:space-x-8">
                    <a href="#hero" class="border-blue-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                    <a href="#features" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Fitur</a>
                    <a href="#tentang" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Tentang</a>
                    <a href="#kontak" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Kontak</a>
                </div>
            </div>
            <div class="hidden md:flex items-center">
                <a href="{{ route('login') }}" class="ml-8 inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Masuk</a>
            </div>
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button" class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
</nav>