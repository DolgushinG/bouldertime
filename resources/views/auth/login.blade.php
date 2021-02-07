@extends('layout')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>
    <div class="site-section" style="padding: 10em 0;">
        <div class="container">
            <div class="container d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class="h2">Авторизация</h1>
                                <p class="lead">
                                    Введите ваш логин и пароль
                                </p>
                            </div>

                            <div class="card bg-dark">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="input-group-overlay form-group">
                                                <label class="" for="name">{{ __('Email*') }}</label>
                                                <input type="email" name="email" value="{{ old('email') }}" id="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       required
                                                       autocomplete="email" placeholder="Email">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                            <div class="input-group-overlay cs-password-toggle form-group">
                                                <label class="" for="name">{{ __('Пароль*') }}</label>
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password"
                                                       required autocomplete="current-password" placeholder="Пароль">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                            <label class="cs-password-toggle-btn">
                                                <input class="custom-control-input" type="checkbox"><i
                                                    class="fe-eye cs-password-toggle-indicator"></i><span
                                                    class="sr-only">Show password</span>
                                            </label>
                                            <div class="d-flex justify-content-between align-items-center form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" type="checkbox"
                                                           id="keep-signed">
                                                    <label class="custom-control-label" for="keep-signed">Запомнить
                                                        меня</label>
                                                </div>
                                                @if (Route::has('password.request'))
                                                    <a class="nav-link-style font-size-ms"
                                                       href="{{ route('password.request') }}">
                                                        Забыли пароль?
                                                    </a>
                                                @endif
                                            </div>
                                            <button class="btn btn-primary btn-block" type="submit">Войти</button>
                                            <p class="font-size-sm pt-3 mb-0">У вас нет аккаунта? <a
                                                    class="ml-grid-gutter d-lg-inline-block" href="{{ route('register') }}"
                                                    >Регистрация</a></p>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
