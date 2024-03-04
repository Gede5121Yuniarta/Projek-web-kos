<x-admin-layout>
    <div class="card mb-4">
        <div class="card-header pb-0">
            {{-- <h6>{{$title}}</h6> --}}
            <h6>Tambah Page</h6>
            <form enctype="multipart/form-data" action="{{(isset($product))?route('product.update',$product->id_product):route('product.store') }}" method="POST" onsubmit="return confirmSave()">
                @csrf
                @if(isset($product))@method('PUT')@endif
                {{-- <div class="row"> --}}
                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="id_product" class="form-label">Code</label>
                        <input type="text" id="id_product" name="id_product" value="{{(isset($product))?$product->id_product:old('id_product')}}" placeholder="Code" required
                            class="form-control">
                        @error('id_product')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <tr>
                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="photo" class="form-label">Foto</label>
                        <input type="file" name="photo" id="photo" required class="form-control">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <tr>
                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="product_name" class="form-label">Name</label>
                        <input type="text" name="product_name" id="product_name" value="{{(isset($product))?$product->product_name:old('product_name')}}" placeholder="Name" required
                            class="form-control" />
                        @error('product_name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <tr>
                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="categories" class="form-label">Category</label>
                        <select id="categories" name="id_category" class="form-select">
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach ($categories as $item)
                                <option 
                                {{((isset($product)&&$product->id_category==$item->id_category)||old('id_category')==$item->id_category)?'selected':''}}
                                value="{{ $item->id_category }}"> {{ $item->category_name }}</option>
                            @endforeach
                        </select>
                        @error('id_category')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <tr>
                    {{-- <div class="col-md-6 col-lg-4 mb-3">
                        <label for="product_desc" class="form-label">Product Desc</label>
                        <input type="text" name="product_desc" id="product_desc" value="{{(isset($product))?$product->product_desc:old('product_desc')}}" placeholder="Desc" required
                            class="form-control" />
                        @error('product_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="product_desc" class="form-label">Product Desc</label>
                        <textarea name="product_desc" id="product_desc" placeholder="Desc" required class="form-control">{{ (isset($product)) ? $product->product_desc : old('product_desc') }}</textarea>
                        @error('product_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <tr>

                    <div class="col-md-6 col-lg-12 mb-3">
                        <label for="product_rate" class="form-label">Product Rate</label>
                        <input type="text" name="product_rate" id="product_rate" value="{{(isset($product))?$product->product_rate:old('product_rate')}}" placeholder="Rate" required
                            class="form-control" />
                        @error('product_rate')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                {{-- </div> --}}
                <hr>
                {{-- <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div> --}}

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
                
                <hr>
            </form>
        </div>
    </div>

    {{-- <script>
        function confirmSave() {
            // Tambahkan SweetAlert untuk konfirmasi
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            });
            // Kembalikan nilai true untuk melanjutkan proses submit form
            return true;
        }
    </script> --}}

    <script>
        function confirmSave() {
            // Validasi form sebelum menampilkan SweetAlert
            if (validateForm()) {
                // Tampilkan dialog konfirmasi SweetAlert
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Anda tidak akan dapat mengembalikannya!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, simpan!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Tampilkan pesan sukses dengan ikon setelah formulir dikirimkan
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Your work has been saved",
                            showConfirmButton: false,
                            timer: 1500
                        });
    
                        // Lanjutkan dengan proses pengiriman formulir setelah pengguna mengonfirmasi
                        document.forms[0].submit();
                    }
                });
    
                // Kembalikan nilai false untuk mencegah pengiriman formulir secara langsung
                return false;
            } else {
                // Validasi form gagal, tidak tampilkan SweetAlert
                return false;
            }
        }
    
        function validateForm() {
        // Validasi Id Product
        var idProductInput = document.getElementById('id_product').value;

        if (isNaN(idProductInput)) {
            // Tampilkan pesan error jika Id Product tidak diisi
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Id Product harus berupa angka!",
            });

            // Validasi gagal
            return false;
        }

        // Validasi Category
        var categoryInput = document.getElementById('categories').value;

        if (!categoryInput) {
            // Tampilkan pesan error jika Category tidak dipilih
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Pilih Kategori!",
            });

            // Validasi gagal
            return false;
        }

        // Validasi Product Rate
        var productRateInput = document.getElementById('product_rate').value;

        if (isNaN(productRateInput)) {
            // Tampilkan pesan error jika Product Rate bukan angka
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Product Rate harus berupa angka!",
            });

            // Validasi gagal
            return false;
        }

        // Validasi berhasil
        return true;
    }
    </script>
    
    
    

</x-admin-layout>
