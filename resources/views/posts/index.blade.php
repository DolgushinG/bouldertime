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

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 blog-entry"  data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('show', $post->id)}}" class="d-block mb-4">
                        <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="mb-4"><a href="{{route('show', $post->id)}}">{{$post->title}}</a></h2>
                    <div class="mb-4 post-meta d-flex align-items-center">
                        <div class="mr-2"><img src="https://eu.ui-avatars.com/api/?name=Boulder+Time" alt="Image" class="img-fluid"></div>
                        <div><span>By <a href="#">bouldertimeblog</a></span> &mdash; <span>{{$post->created_at}}</span></div>
                    </div>
                    <p>{!!mb_strcut($post->body,0,200)!!}{{'...'}}</p>

                </div>
                @endforeach
            </div>


            <div class="row" data-aos="fade-up" data-aos-delay="500">
                <div class="col-md-12 text-center">
                    <div class="custom-pagination">
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <span>...</span>
                        <a href="#">10</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
