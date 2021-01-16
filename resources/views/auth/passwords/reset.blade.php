@extends('layout')

@section('content')
    <div class="site-section" style="padding: 10em 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-11">
                    <h1 class="h2 pb-3">{{ __('Reset Password') }}</h1>
                    <p class="font-size-sm">Change your password in three easy steps. This helps to keep your new
                        password secure.</p>
                    <ul class="list-unstyled font-size-sm pb-1 mb-4">
                        <li><span class="text-primary font-weight-semibold mr-1">1.</span>Fill in your email address
                            below.
                        </li>
                        <li><span class="text-primary font-weight-semibold mr-1">2.</span>We'll email you a temporary
                            code.
                        </li>
                        <li><span class="text-primary font-weight-semibold mr-1">3.</span>Use the code to change your
                            password on our secure website.
                        </li>
                    </ul>
                    <div class="bg-dark rounded-lg px-3 py-4 p-sm-4">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label class="form-label" for="recovery-email">Enter your email address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                       autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                            </div>
                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
