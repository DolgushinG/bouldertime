@extends('layout')
@section('content')
    @foreach(App\Slider::all() as $slider)
        @if($slider->status)
            @include('layouts.slider')
        @endif
    @endforeach
    <div class="site-section" style="margin-top: 2rem">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="site-section-heading">
                        <h2>Все посты</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('posts.outpost')
    <a id="upbutton" href="#" onclick="smoothJumpUp(); return false;">
        <div class="row" data-aos="fade-up" data-aos-delay="500">
            <div class="col-12 text-center">
                <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>НАВЕРХ</span></a>
            </div>
        </div>
    </a>
    <script>//скролл наверх
        window.onscroll = function () {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            if (scrolled > 100) {
                document.getElementById('upbutton').style.display = 'block';
            } else {
                document.getElementById('upbutton').style.display = 'none';
            }
        }

    </script>
@endsection

