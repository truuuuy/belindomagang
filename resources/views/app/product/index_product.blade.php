@extends('app.dashboard')

@section('product')
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Product</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Product</a></li>
                </ol>
            </div>
            <h4 class="page-title">Product</h4>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-sm-12">
            <a href="{{ route('product.create') }}" class="btn btn-primary my-2">Tambah Data</a>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Basic Columns</h4>
                    <p class="sub-header">
                        Example of basic columns.
                    </p>

                    <table data-toggle="table" data-show-columns="false" data-page-list="[5, 10, 20]" data-page-size="5"
                        data-buttons-class="xs btn-light" data-pagination="true"
                        class="table table-bordered table-hover table-borderless">
                        <thead class="table-light">
                            <tr>
                                <th data-field="id" data-switchable="false">No</th>
                                <th data-field="nama_produk">Nama Produk</th>
                                <th data-field="deskripsi">Deskripsi</th>
                                <th data-field="harga">Harga</th>
                                <th data-field="stok">Stok</th>
                                <th data-field="gambar_produk">Gambar Produk</th>
                                <th data-field="nama_kategori">Nama Kategori</th>
                                <th data-field="name">User</th>
                                <th data-field="user-status">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->gambar_produk}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td>{{$item->nama_user}}</td>
                                <td>
                                    <a class="btn btn-info" type="button" href="">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="" class="btn btn-danger" data-confirm-delete="true">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    @include('sweetalert::alert')
@endsection
