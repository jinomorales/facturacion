@extends('system.layouts.plantilla')

@section('content')

<div class="container-fluid">
<!--  Row 1 -->
<div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div
            class="d-sm-flex d-block align-items-center justify-content-between mb-9"
          >
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">
                Comprobantes Generados Por Mes
              </h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">March 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div id="chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Clientes</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">{{ $clients }}</h4>
                  <div class="d-flex align-items-center mb-3">
                    <span
                      class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center"
                    >
                      <i class="ti ti-arrow-up-left text-success"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">last year</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                      <span
                        class="round-8 bg-primary rounded-circle me-2 d-inline-block"
                      ></span>
                      <span class="fs-2">2023</span>
                    </div>
                    <div>
                      <span
                        class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"
                      ></span>
                      <span class="fs-2">2023</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <div id="breakup"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Comprobantes</h5>
                  <h4 class="fw-semibold mb-3">$6,820</h4>
                  <div class="d-flex align-items-center pb-1">
                    <span
                      class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center"
                    >
                      <i class="ti ti-arrow-down-right text-danger"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">last year</p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center"
                    >
                      <i class="ti ti-currency-dollar fs-6"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="earning"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-4">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Disco Duro</h5>
                  <h4 class="fw-semibold mb-3">{{ $disc_used }}</h4>
                  <a href="">
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center"
                      >
                        <i
                          class="fa-light fa-arrow-up-right-from-square fa-2xs"
                        ></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">Incrementar</p>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center"
                    >
                      <i class="fa-light fa-floppy-disks"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Inodos</h5>
                  <h4 class="fw-semibold mb-3">{{ $i_used }}</h4>
                  <a href="">
                    <div class="d-flex align-items-center pb-1">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center"
                      >
                        <i class="fa-light fa-broom fa-2xs"></i>
                      </span>
                      <p class="text-dark me-1 fs-3 mb-0">Limpiar</p>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-danger rounded-circle p-6 d-flex align-items-center justify-content-center"
                    >
                      <i class="fa-light fa-circle-nodes"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row alig n-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">
                    Archivos generados
                  </h5>
                  <h4 class="fw-semibold mb-3">{{ $storage_size }}</h4>
                  <div class="d-flex align-items-center pb-1">
                    <span
                      class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center"
                    >
                      <i class="ti ti-arrow-down-right text-danger"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0 d-none"></p>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-warning rounded-circle p-6 d-flex align-items-center justify-content-center"
                    >
                      <i class="fa-light fa-folder-tree"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <system-clients-index :delete-permission="{{ json_encode($delete_permission) }}" :disc-used="{{ json_encode($disc_used) }}" :i-used="{{ json_encode($i_used) }}" :storage-size="{{ json_encode($storage_size) }}" :version="{{ json_encode($version) }}"></system-clients-index>
</div>
    @endsection
