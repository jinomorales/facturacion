@extends('system.layouts.login')

@section('content')
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
