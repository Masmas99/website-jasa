@props([
    'title' => 'Jasa - Solusi Digital & Software House',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Anti-dark mode: force clean light theme -->
    <script>
        try {
            localStorage.removeItem('theme');
            document.documentElement.classList.remove('dark');
        } catch (e) {}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-neutral-900 min-h-screen font-sans antialiased selection:bg-blue-600 selection:text-white relative overflow-x-hidden flex flex-col justify-between">
    
    <!-- TOP SUBTLE AMBIENT BLUE GLOW -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[850px] sm:w-[1100px] h-[520px] bg-gradient-to-b from-blue-100/70 via-cyan-50/40 to-transparent blur-3xl -z-10 pointer-events-none rounded-full"></div>

    <!-- STICKY AGENCY HEADER -->
    <x-header brand-name="Jasa" />

    <!-- MAIN PAGE CONTENT -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- AGENCY FOOTER -->
    <x-footer brand-text="jasa" />

</body>
</html>
