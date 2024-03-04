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

    <div class="flex justify-center items-center mt-6">
        <div class="w-2/3">
            <div class="bg-white rounded-lg shadow-md">
                <img src="{{ asset($product->photo) }}" alt="Produk 1" class="w-full h-60 object-cover rounded-t-lg">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold">{{$product->product_name}}</h2>
                        <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600" id="favorit">
                            &#9733; <!-- Karakter Unicode untuk bintang (Favorit) -->
                        </button>
                    </div>
                    <p class="text-sm text-gray-600">Kategori: {{$product->categories->category_name}}</p>
                    <div class="mt-2 flex items-center">
                        <!-- Rating bintang -->
                        <button class="text-yellow-500">
                            &#9733;
                        </button>
                        <button class="text-yellow-500">
                            &#9733;
                        </button>
                        <button class="text-yellow-500">
                            &#9733;
                        </button>
                        <button class="text-yellow-500">
                            &#9733;
                        </button>
                        <button class="text-yellow-500">
                            &#9733;
                        </button>
                    </div>
                    <p class="text-sm font-semibold mt-2">Harga: Rp {{$product->product_rate}}</p>
                    <p class="text-sm text-gray-600">{{$product->product_desc}}</p>
                    <div class="mt-4 flex items-center">
                        <!-- Bagian Add to Cart dengan tombol "+" dan "-" -->
                        <button class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600" id="tambah">
                            +
                        </button>
                        <input type="number" class="w-16 h-8 border border-gray-300 rounded-md p-2 text-center" value="1" id="jumlah">
                        <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600" id="kurang">
                            -
                        </button>
                    </div>
                    <div class="mt-2">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" id="pesan">
                            Pesan
                        </button>
                        {{-- <button class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 ml-2" id="keranjang">
                            🛒 <!-- Karakter Unicode untuk keranjang belanja -->
                        </button> --}}
                    </div>
                    <div class="mt-4">
                        <label for="review" class="text-sm font-semibold">Tambahkan Review:</label>
                        <textarea id="review" class="w-full h-32 border border-gray-300 rounded-md p-2 mt-2"></textarea>
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 mt-2" id="tambah-review">
                            Tambah Review
                        </button>
                        <div id="reviews" class="mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const tambahButton = document.getElementById("tambah");
        const kurangButton = document.getElementById("kurang");
        const jumlahInput = document.getElementById("jumlah");
        const tambahReviewButton = document.getElementById("tambah-review");
        const reviewInput = document.getElementById("review");
        const reviewsDiv = document.getElementById("reviews");

        let jumlahProduk = 1;

        tambahButton.addEventListener("click", () => {
            jumlahProduk++;
            jumlahInput.value = jumlahProduk;
        });

        kurangButton.addEventListener("click", () => {
            if (jumlahProduk > 1) {
                jumlahProduk--;
                jumlahInput.value = jumlahProduk;
            }
        });

        tambahReviewButton.addEventListener("click", () => {
            const reviewText = reviewInput.value.trim();
            if (reviewText !== "") {
                const reviewElement = document.createElement("p");
                reviewElement.textContent = reviewText;
                reviewsDiv.appendChild(reviewElement);
                reviewInput.value = "";
            }
        });
    </script>
    </html>
</x-home-layout>
