<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Selamat Datang -->
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 mb-6">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                    Selamat Datang, {{ Auth::user()->name }}!
                </h3>
                <p class="text-gray-600 dark:text-gray-300 mt-2">
                    Anda telah berhasil masuk ke sistem. Berikut ringkasan aktivitas Anda.
                </p>
            </div>

            <!-- Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-indigo-600 text-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184"></path>
                        </svg>
                        <h4 class="text-lg font-semibold">Total Pesanan</h4>
                    </div>
                    <p class="text-3xl font-bold mt-2">125</p>
                </div>

                <div class="bg-green-600 text-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                        </svg>
                        <h4 class="text-lg font-semibold">Jumlah Pengguna</h4>
                    </div>
                    <p class="text-3xl font-bold mt-2">320</p>
                </div>

                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center space-x-2">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                        </svg>
                        <h4 class="text-lg font-semibold">Pendapatan Bulan Ini</h4>
                    </div>
                    <p class="text-3xl font-bold mt-2">Rp 15.000.000</p>
                </div>
            </div>


            <!-- Menu Navigasi Cepat -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <a href="#" class="bg-indigo-600 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                    <span>Kelola Pesanan</span>
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <a href="#" class="bg-green-600 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                    <span>Kelola Pengguna</span>
                    <i class="fas fa-users"></i>
                </a>
                <a href="#" class="bg-yellow-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                    <span>Lihat Laporan</span>
                    <i class="fas fa-chart-bar"></i>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
