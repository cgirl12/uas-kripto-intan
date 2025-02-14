<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="shortcut icon" href="{{ asset('images/qr-code-orange.png') }}" type="image/x-icon">
    <style>
        .custom-font-size-h1 { font-size: 40px; transform: translateX(2.5rem); }
        .custom-font-size-p { font-size: 14px; transform: translateX(2.5rem); }
        .custom-font-size-h2 { font-size: 30px; text-align: center; }
        .custom-font-size-url { font-size: 14px; text-align: center; }
        .custom-shadow { box-shadow: 5px 5px 0px rgba(0, 0, 0, 1); }
        .result { display: flex; justify-content: center; margin-top: 1.5rem; }
        .gradient-text {
            background: linear-gradient(45deg, #7F00FF, #E100FF, #FF1493, #FF69B4);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientAnimation 5s infinite linear;
        }
        .btn-shadow {
            box-shadow: 6px 6px 0px black; /* Shadow solid tanpa blur */
            transition: all 0.2s ease-in-out;
        }

        /* Efek saat tombol ditekan */
        .btn-shadow:active {
            box-shadow: 3px 3px 0px black; /* Pindahkan shadow saat tombol ditekan */
            transform: translateY(3px) translateX(3px);
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
</head>
<body class="bg-yellow-500 font-roboto flex items-center justify-center min-h-screen p-4 relative">
    <header class="absolute top-4 left-4 flex items-center">
        <img src="{{ asset('image/logo-intan.png') }}" alt="Logo" class="w-12 h-12 rounded-full">
    </header>
    
    @if (Route::has('login'))
    <nav class="absolute top-4 right-4 flex space-x-4">
        @auth
            <a href="{{ url('/dashboard') }}" class="btn-shadow px-4 py-2 text-black bg-white rounded-md shadow-md hover:bg-gray-200 transition">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="btn-shadow px-4 py-2 text-black bg-white rounded-md shadow-md hover:bg-gray-200 transition">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-shadow px-4 py-2 text-black bg-white rounded-md shadow-md hover:bg-gray-200 transition">Register</a>
            @endif
        @endauth
    </nav>
    @endif
    
    <div class="text-center md:text-left md:flex md:items-center md:justify-between w-full max-w-5xl">
        <div class="mb-8 md:mb-0 md:transform md:translate-x-10">
            <h1 class="custom-font-size-h1 font-bold text-purple-700 leading-tight">Selamat Datang<br>QR Code Generator</h1>
            <p class="custom-font-size-p text-green-900 mt-2">Hasilkan Kode QR berkualitas tinggi secara instan untuk tautan dan teks Anda.</p>
        </div>
        <div class="relative md:transform md:-translate-x-[6.5rem] mt-8 md:mt-0">
            <div class="bg-white p-8 relative z-10 w-full md:w-[calc(100%+2rem)] rounded-lg custom-shadow">
                <h2 class="custom-font-size-h2 font-bold text-purple-700">QR Code</h2>
                <p class="custom-font-size-url text-green-900">(https://example.com)</p>
                <div class="result">
                    @if(isset($qrCode))
                        {!! $qrCode !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    <footer class="absolute bottom-4 w-full rounded-full text-center gradient-text flex items-center justify-center space-x-2">
        <img src="{{ asset('image/logo-intan.png') }}" alt="Logo" class="w-6 h-6 rounded-full"> 
        <span>&copy; <script>document.write(new Date().getFullYear());</script>. Dibuat oleh Intan Kaimudin</span>
    </footer>
</body>
</html>
