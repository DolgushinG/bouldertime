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

            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="col-md-12 text-center">
                    <div class="custom-pagination">
{{--                        <span>1</span>--}}
{{--                        <a href="#">2</a>--}}
{{--                        <a href="#">3</a>--}}
{{--                        <a href="#">4</a>--}}
{{--                        <a href="#">5</a>--}}
{{--                        <span>...</span>--}}
{{--                        <a href="#">10</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
