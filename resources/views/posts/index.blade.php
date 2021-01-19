@extends('layout')

@section('content')

    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Updates</span>
                    <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">POSTS</h1>
                </div>
            </div>
        </div>
    </div>

@include('posts.outpost')
    <section class="section section-lg pb-5 bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <form action="#">
                    <label class for="email">Подпишись на новые посты</label>
                    <div class="form-group bg-dark shadow-soft rounded-pill mb-4 px-3 py-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="input-group input-group-merge shadow-none">
                                    <input type="email" id="email"
                                           class="form-control border-0 form-control-flush shadow-none pb-2"
                                           placeholder="example@email.com..." required=""></div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-block btn-primary rounded-pill">Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
