<!-- <div> -->
    <!-- It is never too late to be what you might have been. - George Eliot -->
<!-- </div> -->

<!-- ngoding -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- meta description terkain SEO -->
        <!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- membuat komponen navigation untuk home --}}
        {{-- basenya bisa menggunakan layouts.navigation, hanya saja hilangkan bagian menu login --}}
        @include('layouts.navigationhome')
        <!-- Page Content -->
        <main>
        {{-- SLot untuk halaman konten yang berubah dinamis sesuai dengan view yang dipanggil oleh controller --}}
            {{ $slot }}
        </main>
    </div>
</body>

</html>