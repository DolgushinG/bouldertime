@extends('layout')

@section('content')

    <div class="site-section site-hero inner">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Profile {{ Auth::user()->name }}</span>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 ">
                    @include('profile.sidebar')
                </div>
                <div class="col-lg-5 bg-dark p-5 rounded mt-3 profile-mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
                    @foreach($outComments as $comment)
                        <div class="row align-items-stretch program">
                            <div class="col-12 border-top border-bottom py-5" data-aos="fade"
                                 data-aos-delay="200">
                                <div class="row align-items-stretch">

                                    <div class="col-md-3 text-white mb-3 mb-md-0"><span class="h4">{{$comment->name_user}}</span><hr>
                                        <p>{{$comment->email_user}}</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p id="comment-message" class="text-white">{{$comment->message}}</h3><br>
                                            <span>{{$comment->created_at}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
