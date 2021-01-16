@extends('layout')
@section('content')
    <div class="site-section" style="padding: 10em 0;">
        <div class="container">
            <div class="container d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class="h2">Регистрация</h1>
                                <p class="lead">
                                    Для регистрации заполните все поля
                                </p>
                            </div>

                            <div class="card bg-dark">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label class="" for="firstname">{{ __('Firstname') }}</label>
                                                <input id="firstname" type="text"
                                                       class="form-control @error('firstname') is-invalid @enderror"
                                                       name="firstname"
                                                       value="{{ old('firstname') }}" required autocomplete="firstname"
                                                       autofocus placeholder="Enter your firstname">

                                                @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="lastname">{{ __('Lastname') }}</label>
                                                <input id="lastname" type="text"
                                                       class="form-control @error('lastname') is-invalid @enderror"
                                                       name="lastname"
                                                       value="{{ old('lastname') }}" required autocomplete="lastname"
                                                       autofocus placeholder="Enter your lastname">

                                                @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="email">{{ __('E-Mail Address') }}</label>
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email"
                                                       value="{{ old('email') }}" required autocomplete="email"
                                                       placeholder="Enter your email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class="" for="password">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password"
                                                       required autocomplete="new-password"
                                                       placeholder="Enter your password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label class=""
                                                       for="password-confirm">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required
                                                       autocomplete="new-password"
                                                       placeholder="Enter your password_confirmation">
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-lg btn-primary">зарегистрировать
                                                </button>
                                            </div>
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
    </div>

@endsection
