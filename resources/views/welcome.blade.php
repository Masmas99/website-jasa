<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F4F5F9] min-h-screen flex items-center justify-center font-sans antialiased p-4">
    <div class="text-center p-8 sm:p-12 bg-white rounded-3xl shadow-sm border border-slate-100 max-w-md w-full">
        <div class="w-14 h-14 rounded-2xl bg-lime-100/80 text-lime-800 flex items-center justify-center mx-auto mb-4 font-extrabold text-xl">
            👋
        </div>
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Hello World
        </h1>
        <p class="text-xs sm:text-sm text-slate-400 font-medium mt-2">
            Halaman home siap Anda desain dan kembangkan.
        </p>

    </div>
</body>
</html>
