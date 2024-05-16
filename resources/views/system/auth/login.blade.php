@extends('system.layouts.login')

@section('content')
    {{-- <section class="body-sign">
        <div class="center-sign">
            <div class="">
                <div class="card card-header card-primary bg-info">
                    <p class="card-title text-center">Acceso al Sistema</p>
                    <h1 class="display-3 position-absolute text-left font-weight-bold"
                        style="left: 90%; margin-top: -35px; color: rgba(255,255,255,.1);">6</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Correo electrónico</label>
                            <div class="input-group">
                                <input id="email" type="email" name="email" class="form-control form-control-lg"
                                    value="{{ old('email') }}">
                                <span class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </span>
                            </div>
                            @if ($errors->has('email'))
                                <label class="error">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </label>
                            @endif
                        </div>
                        <div class="form-group mb-3 {{ $errors->has('password') ? ' error' : '' }}">
                            <label>Contraseña</label>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control form-control-lg">
                                <span class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </span>
                            </div>
                            @if ($errors->has('password'))
                                <label class="error">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </label>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input name="remember" id="RememberMe" type="checkbox"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label for="RememberMe">Recordarme</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="submit" class="btn btn-primary mt-2">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="text-center text-muted mt-3 mb-3">{{ config('app.name') }} &copy; Copyright {{ date('Y') }}. Todos
                los derechos reservados</p>
        </div>
    </section> --}}
    <div class="card-body">
        <a href="{{ route('login') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="{{ asset('theme/new/images/logos/dark-logo.svg') }}" width="180" alt="">
        </a>
        <p class="text-center">PANEL DE ADMINISTRACIÓN</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <label class="error">
                        <strong>{{ $errors->first('email') }}</strong>
                    </label>
                @endif
            </div>
            <div class="mb-4 {{ $errors->has('password') ? ' error' : '' }}">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
                @if ($errors->has('password'))
                    <label class="error">
                        <strong>{{ $errors->first('password') }}</strong>
                    </label>
                @endif
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                    <div class="checkbox-custom checkbox-default">
                        <input class="form-check-input primary" name="remember" id="RememberMe" type="checkbox">
                        <label class="form-check-label text-dark" for="flexCheckChecked">
                            Recordarme
                        </label>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Ingresar</button>
        </form>
    </div>
@endsection
