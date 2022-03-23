@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="mx-3 my-3">
            <h1 class=" h5 text-danger" style="font-family: poppins;">Welcome Back,
                {{ auth()->user()->name }}</h1>
            <hr>
        </div>
        <div class="col-lg">
            <div class="row mx-2 my-3">
                <!-- Card Users-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs fw-bold text-primary text-uppercase">
                                        Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $TotalUsers }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card My Posts-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs fw-bold text-danger text-uppercase">
                                        My Posts</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $UserPost }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-pencil-alt fa-2x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card All Posts-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs fw-bold text-success text-uppercase">
                                        Total Posts</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ $AllPost }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-file-alt fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
