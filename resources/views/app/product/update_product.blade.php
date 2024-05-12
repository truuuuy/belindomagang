@extends('app.dashboard')

@section('product_add')
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Data Product</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Update Product</a></li>
                </ol>
            </div>
            <h4 class="page-title">Product</h4>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Form</h4>
                    <p class="text-muted font-14">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on
                        their form submission before sending it to your server.
                    </p>

                    <form action="/updateProduct/{{ $data->id }}" method="POST" class="parsley-examples"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="userName" class="form-label">Nama Produk<span class="text-danger">*</span></label>
                            <input type="text" name="nama_produk" value="{{ $data->nama_produk }}"
                                parsley-trigger="change" required placeholder="Masukan nama produk" class="form-control"
                                id="userName" />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi<span class="text-danger">*</span></label>
                            <input type="text" name="deskripsi" value="{{ $data->deskripsi }}" parsley-trigger="change"
                                required placeholder="Masukan nama produk" class="form-control" id="deskripsi" />
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Harga<span class="text-danger">*</span></label>
                            <input type="number" name="harga" value="{{ $data->harga }}" parsley-trigger="change"
                                required placeholder="Masukan Harga" class="form-control" id="emailAddress" />
                        </div>
                        <div class="mb-3">
                            <label for="pass1" class="form-label">Stok<span class="text-danger">*</span></label>
                            <input id="pass1" type="number" name="stok" value="{{ $data->stok }}"
                                placeholder="Masukan Stok" required class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Gambar</label>
                            <input type="file" name="gambar_produk" id="example-fileinput" class="form-control">
                            @if ($data->gambar_produk)
                                <div>
                                    <p>Nama File: <a href="#" onclick="openImagePopup('{{ asset('storage/produk/' . $data->gambar_produk) }}')">{{ $data->gambar_produk }}</a></p>
                                </div>
                            @else
                                <p>Tidak ada gambar yang dipilih.</p>
                            @endif
                        </div>
                        
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Kategori</label>
                            <select class="form-select" name="kategori_id">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">User</label>
                            <select class="form-select" name="user_id">
                                @foreach ($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <script>
        function openImagePopup(imageUrl) {
            window.open(imageUrl, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=100,width=800,height=600");
            return false;
        }
    </script>
@endsection
