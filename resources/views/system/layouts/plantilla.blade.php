<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('theme/new/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('theme/new/css/styles.min.css') }}" />
    <!--<link
        href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css"
        rel="stylesheet">-->

    <link href="{{ asset('theme/new/all.min.css') }}" rel="stylesheet">
    <link type="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css">
    <link href="{{ asset('themes/new/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="{{ route('system.dashboard') }}" class="text-nowrap logo-img">
                        <img src="{{ asset('theme/new/images/logos/dark-logo.svg') }}" width="180" alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Inicio</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.dashboard') ? 'active' : '' }}"
                                href="{{ route('system.dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="fa-solid fa-chart-line fa-lg"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Usuarios</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.multi-users.index') ? 'active' : '' }}"
                                href="{{ route('system.multi-users.index') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-users-line fa-lg"></i>
                                </span>
                                <span class="hide-menu">Multi Usuarios</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Planes</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.plans.index') ? 'active' : '' }}"
                                href="{{ route('system.plans.index') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-clipboard-list fa-lg"></i>
                                </span>
                                <span class="hide-menu">Planes</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Reportes</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.accounting.index') ? 'active' : '' }}"
                                href="{{ route('system.accounting.index') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-calculator fa-lg"></i>
                                </span>
                                <span class="hide-menu">Contabilidad</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.list-reports') ? 'active' : '' }}"
                                href="{{ route('system.list-reports') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-file-invoice-dollar fa-lg"></i>
                                </span>
                                <span class="hide-menu">Reportes</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Configuración</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.information') ? 'active' : '' }}"
                                href="{{ route('system.information') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-circle-info fa-lg"></i>
                                </span>
                                <span class="hide-menu">Informacioón</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::is('system.configuration.index') ? 'active' : '' }}"
                                href="{{ route('system.configuration.index') }}" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-sliders fa-lg"></i>
                                </span>
                                <span class="hide-menu">Configuración</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ url('logs') }}" target="_BLANK" aria-expanded="false">
                                <span>
                                <i class="fa-solid fa-bug fa-lg"></i>
                                </span>
                                <span class="hide-menu">Logs</span>
                            </a>
                        </li>
                    </ul>
                    <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded d-none">
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('theme/new/images/profile/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="{{ route('system.users.create') }}"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">{{ \Auth::getUser()->name }}</p>
                                        </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('content')
            <!--  Header End -->
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by <a href="#" target="_blank"
                        class="pe-1 text-primary text-decoration-underline">Facturalo</a> Distributed by <a
                        href="#">FacturaloEcu</a></p>
            </div>
        </div>
    </div>





















    <script src="{{ asset('theme/new/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/new/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/new/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('theme/new/js/app.min.js') }}"></script>
    <script src="{{ asset('theme/new/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('theme/new/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('theme/new/js/dashboard.js') }}"></script>



    <!-- Vendor -->
    <script src="{{ asset('porto-light/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/jquery-cookie/jquery-cookie.js') }}"></script>
    {{-- <script src="{{asset('master/style-switcher/style.switcher.js')}}"></script> --}}
    <script src="{{ asset('porto-light/vendor/popper/umd/popper.min.js') }}"></script>
    <!-- <script src="{{ asset('porto-light/vendor/bootstrap/js/bootstrap.js') }}"></script> -->
    {{-- <script src="{{ asset('porto-light/vendor/common/common.js')}}"></script> --}}
    <script src="{{ asset('porto-light/vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/select2/js/select2.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>

    {{-- Specific Page Vendor --}}
    <script src="{{ asset('porto-light/vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/select2/js/select2.js') }}"></script>

    <script src="{{ asset('porto-light/vendor/jquery-loading/dist/jquery.loading.js') }}"></script>

    <!--<script src="assets/vendor/select2/js/select2.js"></script>-->
    <script src="{{ asset('porto-light/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>

    <!-- Moment -->
    <script src="{{ asset('porto-light/vendor/moment/moment.js') }}"></script>

    <!-- DatePicker -->
    <script src="{{ asset('porto-light/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Date range Plugin JavaScript -->
    <script src="{{ asset('porto-light/vendor/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('porto-light/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Theme Custom -->
    <script src="{{ asset('porto-light/js/custom.js') }}"></script>

    <!-- Theme Initialization Files -->
    {{-- <script src="{{asset('porto-light/js/theme.init.js')}}"></script> --}}

    {{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}

    @stack('scripts')

    <?php echo config('app.limite_reseller'); ?>
    <script>
        var btn_crear_cliente = document.querySelector('#client-list .card-body .row .col button');
        var tabla_clientes = document.querySelector('#client-list .table');
        var limite_reseller = "{{ config('app.limite_reseller') }}";

        btn_crear_cliente.disabled = true;

        var esperar_tabla = setInterval(function() {
            if (tabla_clientes && tabla_clientes.rows.length > 1) {
                console.log('existe tabla');

                if (tabla_clientes.rows.length >= limite_reseller) {
                    btn_crear_cliente.innerText =
                        'Clientes máximos creados. Actualice su plan llamando al 944999965';
                    btn_crear_cliente.disabled = true;
                } else {
                    btn_crear_cliente.disabled = false;
                }
                clearInterval(esperar_tabla);
            } else {
                console.log('Aún no existe tabla de clientes');
                btn_crear_cliente.disabled = false;
            }

        }, 1000);
    </script>



    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('porto-light/js/theme.js') }}"></script>




    {{--  --}}
    {{-- <script>
        var btn_crear_cliente = document.querySelector('#client-list .card-body .row .col button');
        var tabla_clientes = document.querySelector('#client-list .table');
        var limite_reseller = "{{ config('app.limite_reseller') }}";

        btn_crear_cliente.disabled = true;

        var esperar_tabla = setInterval(function() {
            if (tabla_clientes && tabla_clientes.rows.length > 1) {
                console.log('existe tabla');

                if (tabla_clientes.rows.length >= limite_reseller) {
                    btn_crear_cliente.innerText =
                        'Clientes máximos creados. Actualice su plan llamando al 944999965';
                    btn_crear_cliente.disabled = true;
                } else {
                    btn_crear_cliente.disabled = false;
                }
                clearInterval(esperar_tabla);
            } else {
                console.log('Aún no existe tabla de clientes');
                btn_crear_cliente.disabled = false;
            }

        }, 1000);
    </script> --}}
</body>

</html>
