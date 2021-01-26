@extends('layout')
@section('content')
    <div class="site-section site-hero inner">

        <div class="container">
            <div class="row align-items-center titleArticle">
                <div class="container float-right">
                    <a href="{{route('posts')}}">
                        <button class="btn btn-sm btn-outline-primary d-inline font-weight-bold float-right">НАЗАД
                        </button>
                    </a>
                </div>

                <div class="col-md-10 ">
                    @include('message.message')
                    <h1 class="d-block mb-3" data-aos="fade-up" data-aos-delay="100">{{$post->title}}</h1>
                    <small class="float-right">
                    <span class="caption" data-aos="fade-up" data-aos-delay="100">

                        @if($countTimeRead === 1)
                            {{$countTimeRead}}  минута чтения
                        @elseif($countTimeRead < 5 && $countTimeRead > 1 )
                            {{$countTimeRead}} минуты чтения
                        @elseif($countTimeRead < 1)
                            меньше минуты чтения
                        @else
                            {{$countTimeRead}}  минут чтения
                        @endif
                    </span>
                    </small>
                </div>

            </div>
        </div>
    </div>
    <div class="site-section">

        <div class="container  posts-style">
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
            <small class="float-right">
                <span title="Likes" id="saveLikeDislike" data-type="like" data-post="{{$post->id}}"
                      class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                    Like
                    <span class="like-count">{{$post->likes()}}</span>
                </span>
                <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike"
                      data-post="{{$post->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                    Dislike
                    <span class="dislike-count">{{ $post->dislikes()}}</span>
                </span>
            </small>
            <div class="row mb-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <h3>Комментарии <span
                            class="badge badge-md badge-primary text-uppercase mr-2">{{count($comments)}}</span>
                    </h3>

                    <img src="{{asset('images/icon-view.png')}}"><span> {{$post_view}}</span>

                </div>
            </div>

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-body">
                    <div class="mt-2 pt-2 border-top">
                        <button id="showHideContent" type="button" data-secondname="Скрыть комментарии"
                                class="btn btn-primary btn-sm comment button" data-aos="fade-up"
                                data-aos-delay="400" style="width:auto" value="{{ $post->id }}">Посмотреть комментарии
                        </button>
                    </div>
                </div>
            </div>
            <div id="content" style="padding-top: 2rem;">
                <div id="commentField_{{ $post->id }}" class="panel panel-default"
                     style="padding:10px; margin-top:-20px; display:none;">
                    <div id="comment_{{ $post->id }}">
                    </div>
                </div>
                @guest
                    @if (Route::has('login'))
                        @if(empty($comments))
                            <div class="site-section">
                                <div class="container">
                                    <div class="bg-dark p-5 rounded mt-3">
                                        <p class="lead">Комментариев пока нет</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="site-section">
                            <div class="container">
                                <div class="bg-dark p-5 rounded mt-3">
                                    <p class="lead">Только зарегистрированные пользователи могут комментировать</p>
                                    <a class="btn btn-lg btn-primary" href="{{route('login')}}" role="button">Войти</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endguest
                @auth
                    <div class="container" style="margin-top: 3rem;">
                        <div class="row">
                            <div id="commentField_{{$post->id}}" class="panel panel-default"
                                 style="padding:10px; margin-top:-20px;">
                            </div>
                            <form id="commentForm_{{$post->id}}">
                                <input type="hidden" value="{{$post->id}}" name="postid">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="" for="message">Добавить комментарий</label>
                                        <textarea type="text" name="commenttext" data-id="{{$post->id}}"
                                                  id="commenttext" cols="30" rows="7"
                                                  class="form-control commenttext"
                                                  placeholder="Что вы думаете об этом?">{{old('message')}}</textarea>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <button type="button" style="margin-top: 20px;
                                            margin-left: 15px;" value="{{$post->id}}"
                                                    class="btn btn-primary py-2 px-4 text-white submitComment">
                                                <i class="fa fa-comment"></i>
                                                Опубликовать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </div>


    </div>
    <a id="upbutton" href="#" onclick="smoothJumpUp(); return false;">
        <div class="row" data-aos="fade-up" data-aos-delay="500">
            <div class="col-12 text-center">
                <a href="#" class="btn-custom" style="margin-top: 2rem;" data-aos="fade-up"
                   data-aos-delay="400"><span>НАВЕРХ</span></a>
            </div>
        </div>
    </a>
    </div>
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
    <script type="text/javascript">//скролл наверх
        window.onscroll = function () {
            var scrolled = window.pageYOffset || document.documentElement.scrollTop;
            if (scrolled > 100) {
                document.getElementById('upbutton').style.display = 'block';
            } else {
                document.getElementById('upbutton').style.display = 'none';
            }
        }

    </script>

    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/like.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/comment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/replies.js') }}"></script>


@endsection
