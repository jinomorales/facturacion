<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('theme/new/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{asset('theme/new/css/styles.min.css')}}" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                @yield('content')

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('theme/new/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('theme/new/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  </body>

  </html>