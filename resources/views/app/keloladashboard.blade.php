@extends('app.dashboard')

@section('dashboardAdmin')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard 2</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard 2</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-blue rounded">
                            <i class="fe-aperture avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark my-1">$<span data-plugin="counterup">12,145</span>
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Income status</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="text-uppercase">Target <span class="float-end">60%</span></h6>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="visually-hidden">60% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-success rounded">
                            <i class="fe-shopping-cart avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">1576</span>
                            </h3>
                            <p class="text-muted mb-1 text-truncate">January's Sales</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="text-uppercase">Target <span class="float-end">49%</span></h6>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="49"
                            aria-valuemin="0" aria-valuemax="100" style="width: 49%">
                            <span class="visually-hidden">49% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-sm bg-warning rounded">
                            <i class="fe-bar-chart-2 avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark my-1">$<span data-plugin="counterup">8947</span>
                            </h3>
                            <p class="text-muted mb-1 text-truncate">Payouts</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <h6 class="text-uppercase">Target <span class="float-end">18%</span></h6>
                    <div class="progress progress-sm m-0">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="18"
                            aria-valuemin="0" aria-valuemax="100" style="width: 18%">
                            <span class="visually-hidden">18% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
