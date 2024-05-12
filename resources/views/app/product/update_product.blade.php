@extends('app.dashboard')

@section('product')
    <div class="row p-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Form</h4>
                    <p class="text-muted font-14">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on
                        their form submission before sending it to your server.
                    </p>

                    <form action="#" class="parsley-examples">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Nama Produk<span class="text-danger">*</span></label>
                            <input type="text" name="nama_produk" parsley-trigger="change" required
                                placeholder="Masukan nama produk" class="form-control" id="userName" />
                        </div>
                        <div class="mb-3">
                            <label for="emailAddress" class="form-label">Harga<span
                                    class="text-danger">*</span></label>
                            <input type="number" name="harga" parsley-trigger="change" required placeholder="Masukan Harga"
                                class="form-control" id="emailAddress" />
                        </div>
                        <div class="mb-3">
                            <label for="pass1" class="form-label">Stok<span class="text-danger">*</span></label>
                            <input id="pass1" type="number" placeholder="Masukan Stok" required class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Gambar</label>
                            <input type="file" id="example-fileinput" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">Kategori</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="example-fileinput" class="form-label">User</label>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                            <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                        </div>
                    </form>
                </div>
            </div> <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
