<x-home-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Blog Template</title>
        <meta name="author" content="David Grzyb">
        <meta name="description" content="">
        <!-- Tailwind -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

            .font-family-karla {
                font-family: karla;
            }
        </style>
        <!-- AlpineJS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    </head>

    <body class="bg-white font-family-karla">
        <!-- Top Bar Nav -->
        <div class="container mx-auto flex flex-wrap justify-start py-6">
            <!-- Top Bar Nav -->
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-2xl" href="#">
                Rekomendasi Kos
            </a>
        </div>
        

        <div class="container mx-auto flex flex-wrap justify-center py-6">
            <section>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-end">
                    @foreach ($products as $item)
                        <!-- Produk 1 -->
                        <div class="bg-white rounded-lg shadow-md">
                            <img src="{{ $item->photo }}" alt="Produk 1" class="w-full h-60 object-cover rounded-t-lg">
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">{{ $item->product_name }}</h2>
                                <p class="text-sm text-gray-600"> Kategori: {{ $item->categories->category_name }}</p>
                                <p class="text-sm text-gray-600"> {{ $item->product_desc }}</p>
                                <p class="text-sm font-semibold mt-2">{{ $item->product_rate }}</p>
                                <div class="mt-4 flex items-center">
                                    <a href='/detail/{{ $item->id_product }}' button
                                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Detail</button>
                                    </a>
                                    <button
                                        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 ml-2">Pesan</button>
                                    <button
                                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 ml-2">&#9733;</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
        <footer class="w-full border-t bg-white pb-12">
            <div class="w-full container mx-auto flex flex-col items-center">
                <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                    <a href="#" class="uppercase px-3">About Us</a>
                    <a href="#" class="uppercase px-3">Privacy Policy</a>
                    <a href="#" class="uppercase px-3">Terms & Conditions</a>
                    <a href="#" class="uppercase px-3">Contact Us</a>
                </div>
                <div class="uppercase pb-6">&copy; 2024</div>
            </div>
        </footer>
    </body>

    </html>
</x-home-layout>
