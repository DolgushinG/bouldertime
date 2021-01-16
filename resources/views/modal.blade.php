
<div class="site-section site-hero inner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="d-block mb-3 caption" data-aos="fade-up">Регистрация</span>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <li><a class="ml-grid-gutter d-none d-lg-inline-block" href="#modal-signin" data-toggle="modal"
                   data-view="#modal-signin-view">Логин</a></li>

            <div class="modal fade" id="modal-signin" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-0">
                        <div class="cs-view show bg-dark" id="modal-signin-view">
                            <div class="modal-header border-0 bg-dark px-4">
                                <h4 class="modal-title text-light">Войти</h4>
                                <button class="close text-light" type="button" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body px-4">
                                <p class="font-size-ms text-muted">Для входа используйте email и пароль.</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group-overlay form-group">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text">Email<i
                                                    class="fe-mail"></i></span></div>
                                        <input type="email" name="email" value="{{ old('email') }}" id="email"
                                               class="form-control @error('email') is-invalid @enderror" required
                                               autocomplete="email" placeholder="Email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group-overlay cs-password-toggle form-group">
                                        <div class="input-group-prepend-overlay"><span class="input-group-text">Пароль<i
                                                    class="fe-lock"></i></span></div>
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
                                            class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                                    </label>
                                    <div class="d-flex justify-content-between align-items-center form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="keep-signed">
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
                                            class="ml-grid-gutter d-none d-lg-inline-block" href="#modal-signup"
                                            data-dismiss="modal" aria-label="Close" data-toggle="modal"
                                            data-view="#modal-signup-view">Регистрация</a></p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label for="account-country">Город</label>
        <select class="custom-select" id="account-country">
            <option value="">Select country</option>
            <option value="Russia"selected="" >Russia</option>
            <option value="Belgium">Belgium</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Spain">Spain</option>
            <option value="UK">United Kingdom</option>
            <option value="USA" >USA</option>
        </select>
    </div>
</div>
