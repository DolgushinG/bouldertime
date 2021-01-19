@extends('layout')

@section('content')
    <div class="site-section" style="padding-top: 10rem;padding-bottom: 10rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-dark" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-header h3">{{ __('Верификация вашей почты') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('На вашу почту отправлено новое письмо ссылкой для подтверждения') }}
                                </div>
                            @endif
                            <h5 class="card-title">{{ __('Для использование всего функционала сайта, нужно подтвердить Email') }}</h5>
                            <p class="card-text"> {{ __('Проверьте вашу почту, если вы не получили письмо, отправьте еще раз') }}</p>
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="card-body">
                                        <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i
                                                class="fe-save font-size-lg mr-2"></i>Отправить
                                        </button></div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
