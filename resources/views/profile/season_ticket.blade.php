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
                <div class="col-lg-5 bg-dark p-5 rounded mt-3 profile-mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Дата покупки</label>
                            <h3>10.21.21</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Абонемент</label>
                            <h3>10 посещений </h3>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
