@extends('layout')

@section('content')

<header class="masthead darkened">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center" data-aos="fade-up" data-aos-delay="100">
            <h1 class="mx-auto my-0 text-uppercase" style="background-color: white" data-aos="fade-left" data-aos-delay="400">Boulder<h1 class="mx-auto my-0 text-uppercase" style="background-color:  #ff5732;">time</h1></h1>
            <h2 style="color:white" class="text-white-50 mx-auto mt-2 mb-5" data-aos="fade-right" data-aos-delay="400">Мы блог который читают</h2>
        </div>
    </div>
    
</header>
<div class="site-section" style="padding-top:3rem; background: rgb(1,1,1);
background: linear-gradient(180deg, rgba(1,1,1,1) 0%, rgba(0,0,0,1) 51%, rgba(27,29,36,1) 100%);">
    <div class="container">
        <div class="row align-items-center speaker">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="grow">
                <img src="{{asset('storage/images/imageAbout/team.jpg')}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 ml-auto sectionhome">
                <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">Мы команда единомышленников</h2>
                <div class="bio pl-lg-5">
                    <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Мы команда единомышленников, имеющие огромный опыт в скалолазании.
                        Мы видим будущее и знаем как должны развиваться трассы, тренеры, клиенты и взаимоотношения между ними, 
                        а также скалолазание как спортивное направление в целом, чтобы в России были качественные  скалодромы. 
                        </p>
                </div>
            </div>
        </div>

        <div class="sp2 row align-items-center speaker">
            <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
                <div class="grow">
                <img src="{{asset('storage/images/imageAbout/dream.jpg')}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 ml-auto order-lg-1 sectionhome" >
                <h2 class="text-white mb-4 name" data-aos="fade-left" data-aos-delay="200">Мы хотим</h2>
                <div class="bio pr-lg-5" style="margin-left: 3rem;">
                    <p class="mb-4 " data-aos="fade-left" data-aos-delay="400">чтобы вы увидели разницу между плохим и хорошим, 
                        безопасным и опасным, профессиональным и непрофессиональным подходом в скалолазании. 
                        Мы хотим системно изменить требование скалолазов к скалодромам, для получения ими наивысшего 
                        удовольствия, повышения результативности и увеличения безопасности. 
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-center speaker" style="margin-bottom: 0rem;
        padding-bottom: 2rem;">
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                <div class="grow">
                <img src="{{asset('storage/images/imageAbout/mission.jpg')}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 ml-auto sectionhome">
                <h2 class="text-white mb-4 name" data-aos="fade-right" data-aos-delay="200">Наша миссия - </h2>
                <div class="bio pl-lg-5">
                    <p class="mb-4" data-aos="fade-right" data-aos-delay="400">донести до вас, что скалолазание помогает развивать физические, интеллектуальные и эмоциональные центры человека.
                        Наша мечта  — объединить всех единомышленников, которые любят скалолазание, хотят лазать по качественным трассам и которые разделяют нашу точку зрения.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center speaker" style="margin-bottom: 0rem;
        padding-bottom: 2rem; margin-top: 8rem;">
            <div class="col-lg-16 ml-auto sectionhome">
                <div class="bio pl-lg-5">
                    <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Если у вас есть идеи о развитии скалолазания,  
                        интересные истории и опыт, которым вы хотели бы поделится, пишете <a href="{{route('contact')}}">сюда</a>, мы с радостью опубликуем ваш материал в блоге. </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
