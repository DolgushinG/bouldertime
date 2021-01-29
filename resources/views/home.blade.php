@extends('layout')
@section('content')
    @foreach(App\Slider::all() as $slider)
        @if($slider->status)
            @include('layouts.slider')
        @endif
    @endforeach
    <div class="site-section site-hero" style="margin-top: 11rem!important;margin-bottom: 6rem!important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-6 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                            <div class="grow">
                            <img src="{{asset('storage/images/programm.jpg')}}" alt="Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto order-lg-1">
                            <h2 class="text-uppercase text-primary d-block mb-3" data-aos="fade-left"
                                data-aos-delay="300">Блог о скалолазании</h2>
                                <p>
                                    Мы создали обычный блок размером 380 на 250 пикселей. Это блок должен быть такого же размера как и изображение (в нашем случае 380 на 250). 
                                </p>
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
                    <div class="grow">
                    <img src="{{asset('storage/images/freepicture2.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ml-auto sectionhome">
                    <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">Статьи</h2>
                    <div class="bio pl-lg-5">
                        <p class="mb-4" data-aos="fade-right" data-aos-delay="400">И обязательно ставим правило overflow:hidden; 
                            Оно нужно для того, чтобы наше изображение не выходило за рамки блока при увеличении.</p>
                    </div>
                </div>
            </div>

            <div class="sp2 row align-items-center speaker">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                    <div class="grow">
                    <img src="{{asset('storage/images/advice.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ml-auto order-lg-1 sectionhome" >
                    <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">Советы</h2>
                    <div class="bio pr-lg-5" style="margin-left: 3rem;">
                        <p class="mb-4 " data-aos="fade-left" data-aos-delay="400">Анимация происходит с помощью параметра 
                            transition и transform в CSS3. На всю анимацию у нас уходит одна секунда. Если Вы хотите, 
                            чтобы картинка быстрее увеличивалась, уменьшите это значение.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center speaker">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <div class="grow">
                    <img src="{{asset('storage/images/tops.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 ml-auto sectionhome">
                    <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">ТОПЫ</h2>
                    <div class="bio pl-lg-5">
                        <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Этот приём с картинками я использую у себя на блоге. 
                            Когда пользователь наводит на миниатюру любой записи она плавно увеличивается. Согласитесь, довольно не плохо и красиво смотрится.
                            И делается это только с помощью CSS3, и довольно таки просто. Сейчас я Вам расскажу как это делать.</p>
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

