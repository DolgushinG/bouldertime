@extends('layout')

@section('content')

    <div class="site-section site-hero inner">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Profile {{ Auth::user()->name }}</span>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 ">
                    @include('profile.sidebar')
                </div>
                <div class="col-lg-5 profile-mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <form class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="Email" class="form-label">Email</label>
                            <input type="Email" value="{{ Auth::user()->email }}" class="form-control" id="Email">
                        </div>

                        <hr>
                        <div class="col-md-6">
                            <span class="d-block mb-3 caption" data-aos="fade-up">Изменить пароль</span>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                   Согласен бла бла бла
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

@endsection
