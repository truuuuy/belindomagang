@extends('app.dashboard')

@section('order')
    <div class="row p-5">
        <div class="col-sm-12">
            <a href="" class="btn btn-primary my-2">Tambah Data</a>
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
                                <th data-field="name">Nama User</th>
                                <th data-field="tgl_pemesanan">Tanggal Pemesanan</th>
                                <th data-field="status">Status Pemesanan</th>
                                <th data-field="user-status">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><span class="badge bg-success">Active</span></td>
                                    <td>
                                        <a class="btn btn-info" type="button" href="">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="" class="btn btn-danger" data-confirm-delete="true">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
    @include('sweetalert::alert')
@endsection
