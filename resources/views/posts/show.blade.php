@extends('layout')
@section('content')
    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Get To Know</span>
                    <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">{{$post->title}}</h1>
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
                    <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400"><span
                        class="text-primary">{{$post->created_at}}</span></div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                     <p>{!!$post->body!!}</p>

                     <div class="d-flex coordinator align-items-center">
                      <div class="mr-4">
                        <img src="https://eu.ui-avatars.com/api/?name=Boulder+Time" alt="Image" class="img-fluid">
                      </div>
                      <span>By <span class="text-white">Bouldertime</span> <br> blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading" data-aos="fade-up">
              <h2 class="text-center">Our Team</h2>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="author mb-0">Emely Peters</p>
                <p class="text-muted mb-4">Coordinator</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>

              </blockquote>
            </div>
          </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-4 ">
            <div class="site-section-heading" data-aos="fade-up">
              <h2>Sponsors</h2>
            </div>
          </div>
          <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus error deleniti dolores necessitatibus eligendi. Nesciunt repellendus ab voluptatibus.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <img src="images/logo_1.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> -->
@endsection
