@extends('layout')
@section('content')
    <div class="site-section site-hero inner">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-10">
                    @include('message.message')
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
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <h2>Комментарии({{count($outComments)}})</h2>
                </div>
            </div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    <div class="mt-2 pt-2 border-top">
                        <button id="showHideContent" type="button" class="btn btn-primary btn-sm" data-aos="fade-up" data-aos-delay="400">Посмотреть</button>
                    </div>
                </div>
            </div>
            <div id="content" style="display:none;">
            @foreach($outComments as $comment)
                <div id="content" class="row align-items-stretch program">
                    <div class="col-12 border-top border-bottom py-5" data-aos="fade"
                         data-aos-delay="200">
                        <div class="row align-items-stretch">

                            <div class="col-md-3 text-white mb-3 mb-md-0"><span
                                    class="h4">{{$comment->name_user}}</span>
                                <hr>
                                <p>{{$comment->email_user}}</p>
                            </div>
                            <div class="col-md-9">
                                <p id="comment-message" class="text-white">{{$comment->message}}</p><br>
                                <span>{{$comment->created_at}}</span>
                            </div>
                            @auth
                                @if ($comment->email_user === Auth::user()->email)
                                    <a class="btn btn-edit-comments btn-lg btn-primary"
                                       href="{{route('edit_comments',[$post->id,$comment->id])}}" role="button">Редактировать</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach


        @guest

            @if (Route::has('login'))

                <div class="site-section">
                    <div class="container">
                        <div class="bg-dark p-5 rounded mt-3">
                            <p class="lead">Только зарегистрированные пользователи могут комментировать</p>
                            <a class="btn btn-lg btn-primary" href="{{route('login')}}" role="button">Войти</a>
                        </div>
                    </div>
                </div>

            @endif
        @else
            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up">
                            <form method="POST" action="{{route('send_comments', $post->id)}}">
                                @csrf
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="" for="message">Добавить комментарий</label>
                                        <textarea name="message" id="message" cols="30" rows="7"
                                                  class="form-control">{{old('message')}}</textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Опубликовать"
                                               class="btn btn-primary py-2 px-4 text-white">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
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
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
