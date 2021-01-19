@extends('layout')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/css/suggestions.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@20.3.0/dist/js/jquery.suggestions.min.js"></script>
    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Get In Touch</span>
                    <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up">
                    @include('message.message')
                    <form method="POST" action="{{route('contact_send')}}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="" for="fname">First Name</label>
                                <input id="text" type="text"
                                       class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                       value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="" for="lname">Last Name</label>
                                <input id="text" type="text"
                                       class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                       value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="" for="email">Email</label>
                                <input id="email" type="text"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="" for="subject">Subject</label>
                                <input id="text" type="text"
                                       class="form-control @error('subject') is-invalid @enderror" name="subject"
                                       value="{{ old('subject') }}" required autocomplete="email" autofocus>
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{old('message')}}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 mb-3">
                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Address</p>
                        <p class="mb-4">Saint-Petersburg</p>

                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Phone</p>
                        <p class="mb-4"><a href="#">+7 (999) 240 23 42</a></p>

                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Email Address</p>
                        <p class="mb-0"><a href="#">blog@bouldertime.ru</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading">
              <h2 class="text-center">Testimonials</h2>
            </div>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">

          <div class="row justify-content-center">

            <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Emely Peters</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Emely Peters</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Alex Anchors</p>
              </blockquote>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="testimony text-center col-md-5">
              <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&rdquo;</p>
                <p class="author">&mdash; Aaron Thomas</p>
              </blockquote>
            </div>
          </div>

        </div>





      </div>
    </div> -->
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    @endsection
