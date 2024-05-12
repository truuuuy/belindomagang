@extends('app.dashboard')

@section('category_add')
    <div class="row p-5">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Form</h4>
                    <p class="text-muted font-14">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on
                        their form submission before sending it to your server.
                    </p>

                    <form action="{{route('category.insert')}}" class="parsley-examples" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_kategori" class="form-label">Nama Kategori<span class="text-danger">*</span></label>
                            <input type="text" name="nama_kategori" parsley-trigger="change" required
                                placeholder="Enter user name" class="form-control" id="nama_kategori" />
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
@endsection
