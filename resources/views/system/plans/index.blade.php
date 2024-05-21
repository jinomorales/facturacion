@extends('system.layouts.plantilla')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Planes</h5>
                <a href="" class="btn btn-primary"><i class="fa-light fa-plus-large"></i> Nuevo</a>
                {{-- <p class="mb-0">This is a sample page </p> --}}
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-bolder text-uppercase fs-2 d-block mb-7">Silver</span>
                                <div class="my-4">
                                    <img src="../assets/images/backgrounds/silver.png" alt="modernize-img" class="img-fluid"
                                        width="80" height="80">
                                </div>
                                <h2 class="fw-bolder fs-12 mb-3">Free</h2>
                                <ul class="list-unstyled mb-7">
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">3 Members</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">Single Devise</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-x text-muted fs-4"></i>
                                        <span class="text-muted">50GB Storage</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-x text-muted fs-4"></i>
                                        <span class="text-muted">Monthly Backups</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-x text-muted fs-4"></i>
                                        <span class="text-muted">Permissions &amp; workflows</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary fw-bolder py-6 w-100 text-capitalize">Choose Silver</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-body pt-6">
                                <div class="text-end">
                                    <span
                                        class="badge fw-bolder py-1 bg-warning-subtle text-warning text-uppercase fs-2 rounded-3">POPULAR</span>
                                </div>
                                <span class="fw-bolder text-uppercase fs-2 d-block mb-7">bronze</span>
                                <div class="my-4">
                                    <img src="../assets/images/backgrounds/bronze.png" alt="modernize-img" class="img-fluid"
                                        width="80" height="80">
                                </div>
                                <div class="d-flex mb-3">
                                    <h5 class="fw-bolder fs-6 mb-0">$</h5>
                                    <h2 class="fw-bolder fs-12 ms-2 mb-0">4.99</h2>
                                    <span class="ms-2 fs-4 d-flex align-items-center">/mo</span>
                                </div>
                                <ul class="list-unstyled mb-7">
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">5 Members</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">Single Devise</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">80GB Storage</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-x text-muted fs-4"></i>
                                        <span class="text-muted">Monthly Backups</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-x text-muted fs-4"></i>
                                        <span class="text-muted">Permissions &amp; workflows</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary fw-bolder py-6 w-100 text-capitalize">choose bronze</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-bolder text-uppercase fs-2 d-block mb-7">gold</span>
                                <div class="my-4">
                                    <img src="../assets/images/backgrounds/gold.png" alt="modernize-img" class="img-fluid"
                                        width="80" height="80">
                                </div>
                                <div class="d-flex mb-3">
                                    <h5 class="fw-bolder fs-6 mb-0">$</h5>
                                    <h2 class="fw-bolder fs-12 ms-2 mb-0">9.99</h2>
                                    <span class="ms-2 fs-4 d-flex align-items-center">/mo</span>
                                </div>
                                <ul class="list-unstyled mb-7">
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">5 Members</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">Single Devise</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">120GB Storage</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">Monthly Backups</span>
                                    </li>
                                    <li class="d-flex align-items-center gap-2 py-2">
                                        <i class="ti ti-check text-primary fs-4"></i>
                                        <span class="text-dark">Permissions &amp; workflows</span>
                                    </li>
                                </ul>
                                <button class="btn btn-primary fw-bolder py-6 w-100 text-capitalize">choose gold</button>
                            </div>
                        </div>
                    </div>
                </div>
                <system-plans-index></system-plans-index>
            </div>
        </div>
    </div>
@endsection
