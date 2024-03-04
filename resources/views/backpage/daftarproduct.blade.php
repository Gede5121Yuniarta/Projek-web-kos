<x-admin-layout>
    <div class="card mb-4">
        <div class="card-header pb-0">
            {{-- <h6>{{$title}}</h6> --}}
            <h6>Pariwisata Page</h6>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{route('product.create')}}" class="btn btn-secondary btn-sm">Tambah</a>
                    <!-- <button class="btn btn-secondary btn-sm">Publish</button>
                    <button class="btn btn-secondary btn-sm">Delete</button> -->
                </div>



                <!-- <div class="row"> -->

                <form action="{{route('product.index')}}" method="GET">
                    <div class="row gap-2">
                        <div class="col-md-4 p-0">
                            <select id="id_category" name="id_category" class="form-select">
                                <option value="">Category</option>
                                @foreach ($categories as $item)
                                <option value="{{$item->id_category}}"
                                    {{(isset($_GET['id_category'])&&$_GET['id_category']==$item->
                                    id_category)?'selected':''}}>{{$item->category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4 p-0">
                            <input type="text" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}"
                                class="form-control form-control-sm" placeholder="Cari">
                        </div>
                        <div class="col-md-2 p-0">
                            <button type="submit" class="btn btn-secondary btn-sm">Cari</button>
                        </div>
                    </div>
                </form>

                    <!-- </div> -->

                   {{-- <div class="row">
                <div class="">
                    <form action="{{route('product.index')}}" method="GET">
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div>
                                <select name="id_category" id="id_category" class="form-select">
                                    <option value="">Choose Category</option>
                                    @foreach ($categories as $item)
                                    <option value="{{$item->id_category}}" 
                                    {{(isset($_GET['id_category'])&&$_GET['id_category']==$item->id_category)?'selected':''}}>{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <div class="col-md-6 p-0">
                                <input type="text" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}" class="form-control form-control-sm">
                                </div>
                                <div class="col-md-2 p-0">
                                <button type="submit" class="btn btn-secondary btn-sm">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div> --}}

            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Category</th>
                            {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Desc</th> --}}
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Rate</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="{{$item->photo}}" class="avatar avatar-sm me-3" alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$item->product_name}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$item->categories->category_name}}</p>
                            </td>
                            {{-- <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$item->product_desc}}</span>
                            </td> --}}
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$item->product_rate}}</span>
                            </td>
                            
                            <td class="align-middle">
                                <a href="{{route('product.edit',$item->id_product)}}"
                                    class="btn btn-secondary btn-sm">Edit</a>

                                <form action="{{route('product.destroy',$item->id_product)}}" method="POST" id="deleteForm_{{$item->id_product}}"
                                    class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-secondary btn-sm" onclick="return confirmDelete({{$item->id_product}})"
                                        type="submit">Delete</button>
                                </form>
                                
                            </td>

                            {{-- <td class="align-middle">
                                <a href="{{ route('product.edit', $item->id_product) }}"
                                    class="btn btn-secondary btn-sm">Edit</a>
                                <form id="form-delete" action="{{ route('product.destroy', $item->id_product) }}" method="POST"
                                    class="d-inline" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-secondary btn-sm" type="submit">Delete</button>
                                </form>
                            </td> --}}


                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
        <?php if (Request::path() == 'product') { ?>
            <div class="m-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php if ($products->previousPageUrl()) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= $products->previousPageUrl() ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&laquo;</span>
                            </li>
                        <?php } ?>
        
                        <?php if ($products->nextPageUrl()) { ?>
                            <li class="page-item">
                                <a class="page-link" href="<?= $products->nextPageUrl() ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="page-item disabled">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        <?php } ?>

    </div>

    <script>
        function confirmDelete(id_product) {
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        // Submit the form after the SweetAlert is closed
                        document.getElementById('deleteForm_'+id_product).submit();


                    });
                }
            });
            // Return false to prevent the form from submitting automatically
            return false;
        }
        </script>

    {{-- <script>
        function confirmDelete() {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    // Uncomment the following line if you want to submit the form after confirmation
                    document.getElementById('form-delete').submit();
                }
            });

            // Return false to prevent the form from submitting automatically
            return false;
        }
    </script> --}}
</x-admin-layout>