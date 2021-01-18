@extends('layout')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <div class="site-section" style="padding: 10em 0;" data-aos="fade-up" data-aos-delay="300">
        <div class="row">
            <div class="container pb-4 mb-md-3">
                @include('message.message')
                <div class="row">
                    <!-- Sidebar-->
                @include('profile.sidebar')
                <!-- Content-->
                    <div class="col-lg-8">
                        <div class="d-flex flex-column h-100 bg-dark rounded-lg box-shadow-lg p-4">
                            <div class="py-2 p-md-3">
                                <!-- Title + Delete link-->
                                <div
                                    class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-left">
                                    <h1 class="h3 mb-2 text-nowrap">Информация о профиле</h1>
                                </div>
                                <!-- Content-->
                                <form method="POST" action="{{route('save')}}">
                                    @csrf
                                    <div class="bg-dark rounded-lg p-4 mb-4">
                                        <div class="media d-block d-sm-flex align-items-center"><img
                                                class="d-block rounded-circle mx-auto mb-3 mb-sm-0" width="110"
                                                src="{{asset('images/person_1.jpg')}}" alt="Amanda Wilson">
                                            <div class="media-body pl-sm-3 text-center text-sm-left">
                                                <button class="btn btn-light box-shadow btn-sm mb-2" type="button"><i
                                                        class="fe-refresh-cw mr-2"></i>Изменить аватар
                                                </button>
                                                <div class="p mb-0 font-size-ms text-muted">загрузка JPG, GIF or PNG
                                                    image.
                                                    300 x 300 обязательно.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Имя</label>
                                                <input class="form-control" type="text" id="name" name="name"
                                                       value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="text"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email"
                                                       value="{{ Auth::user()->email }}" required autocomplete="email"
                                                       autofocus>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="city">Ваш город</label>
                                                <select class="form-control" type="text" name="city" id="city">
                                                    <option>{{Auth::user()->city}}</option>
                                                    @if(!empty($cities))
                                                        @foreach($cities as $city)
                                                            @if(Auth::user()->city != $city->name)
                                                            <option value="{{$city->name}}">{{ $city->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="telephone">Телефон</label>
                                                <input id="telephone" type="text"
                                                       class="form-control @error('telephone') is-invalid @enderror"
                                                       name="telephone"
                                                       value="{{ Auth::user()->telephone }}" required
                                                       autocomplete="telephone" autofocus>
                                                @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                @enderror
                                            </div>


                                            <div class="col-12">
                                                <hr class="mt-2 mb-4">
                                                <div
                                                    class="d-flex flex-wrap justify-content-between align-items-center">
                                                    {{--                                                    <div class="custom-control custom-checkbox d-block">--}}
                                                    {{--                                                        <input class="custom-control-input" type="checkbox"--}}
                                                    {{--                                                               id="show-email"--}}
                                                    {{--                                                               checked="">--}}
                                                    {{--                                                        <label class="custom-control-label" for="show-email">Show my--}}
                                                    {{--                                                            email to--}}
                                                    {{--                                                            registered users</label>--}}
                                                    {{--                                                    </div>--}}
                                                    <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i
                                                            class="fe-save font-size-lg mr-2"></i>Сохранить
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>

@endsection
