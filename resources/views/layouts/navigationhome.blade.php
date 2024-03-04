<nav class="bg-white border-gray-200 :bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="build/assets/singaraja.jpg" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('build/assets/rumahlogo2.png') }}" class="h-8" alt="Singa Ambaraja" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap :text-white">PAK KOMANG KOS</span>
        </a>
        <div class="flex items-center space-x-6 rtl:space-x-reverse">
            {{-- <a href="tel:5541251234" class="text-sm text-dark hover:underline">(555) 412-1234</a> --}}

            <a href="/product" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Masuk</a>
        </div>
    </div>
</nav>

<!-- Text Header -->
<header class="w-full container mx-auto"
    style="background-image: url('{{ asset('build/assets/dudung.jpg') }}'); background-size: cover; background-position: center;">
    <div class="flex flex-col items-center py-12">
        <style>
            /* Membuat animasi kedip */
            @keyframes blink {
                0% {
                    color: #000;
                }

                /* Warna awal */
                50% {
                    color: #fff;
                }

                /* Warna tengah (dalam hal ini putih) */
                100% {
                    color: #000;
                }

                /* Warna akhir (kembali ke warna awal) */
            }

            /* Mengaplikasikan animasi pada teks */
            .blink-text {
                animation: blink 1s infinite;
                /* Animasi selama 1 detik secara terus-menerus */
            }
        </style>

        <a class="font-bold uppercase text-5xl blink-text" href="#">
            {{-- Desa Ambengan --}}
        </a>

        <p class="text-lg text-white">
            {{-- Kecamatan Sukasada, Kabupaten Buleleng, Provinsi Bali --}}
        </p>
    </div>
</header>


<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#"
            class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open">
            Topics <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div
            class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="/about" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Cari apa?</a>
            <a href="/" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Faporit</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Notifikasi</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Chat</a>
            <a href="/alamat" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Lainnya</a>



        </div>
    </div>
</nav>
<nav>
    <style>
        /* Define a custom class for a width of 100px */
        .w-100 {
            width: 400px;
        }
    </style>

    <form class="flex justify-center">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
            Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown"
            class="flex-shrink-0 z-10 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
            type="button">
            Cari kos
            <svg class="w-2 h-2 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>
        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"></div>
        <div class="relative w-100"> <!-- Applying the custom width class -->
            <input type="search" id="search-dropdown"
                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                placeholder="Masukan nama lokasi/area/alamat" required>
            <button type="submit"
                class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </form>

</nav>

{{-- <nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center justify-center"> <!-- Added 'justify-center' -->
            <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline" aria-current="page">Tentang</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Sejarah</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline">Alamat</a>
                </li>
                <li>
                    <a href="#" class="text-gray-900 dark:text-white hover:underline"></a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
