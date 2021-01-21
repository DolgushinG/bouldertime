@extends('layout')

@section('content')
    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Get To Know</span>
                    <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 ">
                    <div class="site-section-heading" data-aos="fade-up" data-aos-delay="100">
                        <h2>Welcome To Blog</h2>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <p>Blog about climbing</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('images/hero_1.jpg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400"><span
                        class="text-primary">The Article</span></div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <p>Cooming soon</p>
                </div>
            </div>
        </div>
    </div>
@endsection

