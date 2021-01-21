@extends('layout')
@section('content')
    @foreach(App\Slider::all() as $slider)
        @if($slider->status)
            @include('layouts.slider')
        @endif
    @endforeach
    <div class="site-section site-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                            <img src="{{asset('images/programm.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-6 ml-auto order-lg-1">
                            <h2 class="text-uppercase text-primary d-block mb-3" data-aos="fade-left"
                                data-aos-delay="300">Блог о скалолазании</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="site-section-heading">
                        <h2>Разделы</h2>
                    </div>
                </div>

            </div>
            <div class="row align-items-center speaker">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <img src="{{asset('images/freepicture2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6 ml-auto">
                    <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">Статьи</h2>
                    <div class="bio pl-lg-5">
                        <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Тут будет текст описание про этот
                            раздел</p>
                    </div>
                </div>
            </div>

            <div class="sp2 row align-items-center speaker2">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                    <img src="{{asset('images/advice.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6 ml-auto order-lg-1">
                    <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">Советы</h2>
                    <div class="bio pr-lg-5">
                        <p class="mb-4" data-aos="fade-left" data-aos-delay="400">Тут будет текст описание про этот
                            раздел</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center speaker">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <img src="{{asset('images/tops.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6 ml-auto">
                    <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">ТОПЫ</h2>
                    <div class="bio pl-lg-5">
                        <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Тут будет текст описание про этот
                            раздел</p>
                    </div>
                </div>
            </div>


            <div class="sp2 row align-items-center speaker2">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                    <img src="{{asset('images/programm.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-6 ml-auto order-lg-1">
                    <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">ПРОГРАММЫ</h2>
                    <div class="bio pr-lg-5">
                        <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-left"
                              data-aos-delay="300">Web Designer</span>
                        <p class="mb-4" data-aos="fade-left" data-aos-delay="400">Тут будет текст описание про этот
                            раздел</p>
                    </div>
                </div>
            </div>
        </div>
        <a id="upbutton" href="#" onclick="smoothJumpUp(); return false;">
            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="col-12 text-center">
                    <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="400"><span>НАВЕРХ</span></a>
                </div>
            </div>
        </a>
    </div>

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

