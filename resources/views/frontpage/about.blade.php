<x-home-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <meta name="author" content="David Grzyb" />
    <meta name="description" content="" />

    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

      .font-family-karla {
        font-family: karla;
      }
    </style>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-white font-family-karla">


    <div class="container mx-auto flex flex-wrap py-6">
      <!-- Post Section -->
      <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        <article class="flex flex-col shadow my-4">
          <!-- Article Image -->
          <a href="#" class="hover:opacity-75">
            <img
              src="https://source.unsplash.com/collection/1346951/1000x500?sig=1"
            />
          </a>
          <div class="bg-white flex flex-col justify-start p-6">
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"
              >About</a
            >
            <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"
              >Tentang Desa Ambengan</a
            >
            <p href="#" class="text-sm pb-8">
              By
              <a href="#" class="font-semibold hover:text-gray-800"
                >Bramanda</a
              >, Published on Desember 25th, 2023
            </p>
            <h1 class="text-2xl font-bold pb-3">Introduction</h1>
            <p class="pb-3">
             Desa Ambengan terletak di Kecamatan Sukasada, Kabupaten Buleleng, Provinsi Bali, Indonesia. Desa ini dikenal karena keindahan alamnya yang memukau, budaya yang kaya, serta kegiatan tradisional yang masih dilestarikan oleh penduduknya. Dikelilingi oleh pegunungan dan sawah yang hijau, Desa Ambengan memiliki panorama yang memukau bagi para pengunjungnya.

Penduduk Desa Ambengan mayoritas bermata pencaharian sebagai petani dan nelayan. Mereka mengandalkan pertanian sebagai sumber penghasilan utama dengan menanam padi, sayuran, buah-buahan, serta tanaman hias yang khas daerah tersebut. Selain itu, sebagian penduduknya juga terlibat dalam produksi kerajinan tangan tradisional, seperti ukiran kayu, anyaman, dan tenun songket yang merupakan warisan budaya Bali yang khas.

Keberadaan Desa Ambengan tidak hanya dikenal karena keindahan alamnya, tetapi juga kegiatan budaya yang kaya. Masyarakatnya menjaga tradisi dan upacara adat dengan sungguh-sungguh, seperti upacara Ngaben (kremasi) dan upacara keagamaan lainnya. Musik, tarian, dan seni lukis juga merupakan bagian integral dari kehidupan sehari-hari masyarakat Desa Ambengan, yang sering dipertontonkan dalam acara-acara festival budaya atau upacara adat.

Selain aspek budaya dan keindahan alamnya, Desa Ambengan mulai berkembang dalam sektor pariwisata. Banyak wisatawan lokal dan mancanegara tertarik untuk mengunjungi desa ini karena pesona alamnya yang menakjubkan, kehidupan sehari-hari yang autentik, serta keberadaan tempat-tempat bersejarah dan pura yang memiliki nilai spiritual bagi masyarakat setempat.

Pemerintah setempat dan komunitas Desa Ambengan secara aktif berupaya untuk meningkatkan fasilitas pariwisata, memperkenalkan produk-produk kerajinan lokal, dan melestarikan kearifan lokal agar dapat terus menjadi destinasi yang menarik bagi wisatawan serta memberikan penghidupan yang lebih baik bagi penduduknya.

Secara keseluruhan, Desa Ambengan adalah sebuah permata yang menyimpan kekayaan alam, budaya, dan warisan tradisional yang memikat. Keindahan alamnya yang menakjubkan, keramahan penduduknya, serta kehidupan budaya yang kaya menjadikan Desa Ambengan sebagai destinasi yang layak untuk dikunjungi dan dieksplorasi bagi siapa saja yang ingin merasakan keindahan Bali yang sesungguhnya.
            </p>
          
          </div>
        </article>

        

        <div
          class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6"
        >
          <div
            class="w-full md:w-1/5 flex justify-center md:justify-start pb-4"
          >
            <img
              src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
              class="rounded-full shadow h-32 w-32"
            />
          </div>
          <div class="flex-1 flex flex-col justify-center md:justify-start">
            <p class="font-semibold text-2xl">Komang Mandala</p>
            <p class="pt-2">
             Web Developer dan Pengembang dari Destinasi Wisata Air Terjun Jembong 
            </p>
            <div
              class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4"
            >
              <a class="" href="#">
                <i class="fab fa-facebook"></i>
              </a>
              <a class="pl-4" href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a class="pl-4" href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a class="pl-4" href="#">
                <i class="fab fa-linkedin"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Sidebar Section -->
      <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">Recomendasi Destinasi</p>
          <p class="pb-2">
             
<div class="grid grid-cols-3 gap-3">
    <div class="col-span-3 flex items-center justify-center">
        <iframe class="mx-auto" width="560" height="315" src="https://www.youtube.com/embed/DSFOX3l_ZJw?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
</div>


 <a href="#"
       class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-4 py-5 mt-9 mx-auto">
       Register Now
    </a>



        </div>
      

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
          <p class="text-xl font-semibold pb-5">Instagram</p>
          <div class="grid grid-cols-3 gap-3">
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=1"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=2"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=3"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=4"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=5"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=6"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=7"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=8"
            />
            <img
              class="hover:opacity-75"
              src="https://source.unsplash.com/collection/1346951/150x150?sig=9"
            />
          </div>
          <a
            href="#"
            class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6"
          >
            <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
          </a>
        </div>
      </aside>
    </div>

    <footer class="w-full border-t bg-white pb-12">
      <div
        class="relative w-full flex items-center invisible md:visible md:pb-12"
        x-data="getCarouselData()"
      >
        <button
          class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
          x-on:click="decrement()"
        >
          &#8592;
        </button>
        <template
          x-for="image in images.slice(currentIndex, currentIndex + 6)"
          :key="images.indexOf(image)"
        >
          <img class="w-1/6 hover:opacity-75" :src="image" />
        </template>
        <button
          class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
          x-on:click="increment()"
        >
          &#8594;
        </button>
      </div>
      <div class="w-full container mx-auto flex flex-col items-center">
        <div
          class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6"
        >
          <a href="#" class="uppercase px-3">About Us</a>
          <a href="#" class="uppercase px-3">Privacy Policy</a>
          <a href="#" class="uppercase px-3">Terms & Conditions</a>
          <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; undiksha</div>
      </div>
    </footer>

    <script>
      function getCarouselData() {
        return {
          currentIndex: 1,
          images: [
            "https://source.unsplash.com/collection/1346951/800x800?sig=1",
            "https://source.unsplash.com/collection/1346951/800x800?sig=2",
            "https://source.unsplash.com/collection/1346951/800x800?sig=3",
            "https://source.unsplash.com/collection/1346951/800x800?sig=4",
            "https://source.unsplash.com/collection/1346951/800x800?sig=5",
            "https://source.unsplash.com/collection/1346951/800x800?sig=6",
            "https://source.unsplash.com/collection/1346951/800x800?sig=7",
            "https://source.unsplash.com/collection/1346951/800x800?sig=8",
            "https://source.unsplash.com/collection/1346951/800x800?sig=9",
          ],
          increment() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex + 1;
          },
          decrement() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex - 1;
          },
        };
      }
    </script>
  </body>
</html>
</x-home-layout>
