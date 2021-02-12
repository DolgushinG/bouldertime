<div class="site-section posts-style">
    <div class="container">
        <div class="row mb-7">
            <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="card postcard bg-dark shadow-soft flex-lg-row p-4" style="background-color: #1a1c2585!important"><a
                        href="{{route('show', $newPost->id)}}" class="col-12 col-lg-6"><img src="{{asset('storage/'.$newPost->image)}}" alt="imageposts"
                                                                             class="card-img-top"></a>
                    <div class="card-body py-4 p-lg-5" style="padding-top: 5px!important;"><a href="{{route('show', $newPost->id)}}" class="mb-3 d-block">   
                        <h2>{{$newPost->title}}</h2></a>
                        <p class="mb-3">{!!mb_strcut($newPost->body,0,400)!!}{{'...'}}</p>
                        <div class="d-flex align-items-center"><img class="avatar img-fluid rounded-circle mr-1"
                                                                    src="https://eu.ui-avatars.com/api/?name=Boulder+Time&background=a73737&color=050202&font-size=0.33&size=30"
                                                                    alt=""><h6 class="text-muted small ml-2 mb-0">
                                by bouldertimeblog</h6>
                            <h6 class="text-muted small font-weight-normal mb-0 ml-auto">
                                <time datetime="2019-04-25">{{$newPost->created_at}}</time>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 blog-entry shadow-soft" data-aos="fade-up" data-aos-delay="200">
                   <div class="postcard"> <a href="{{route('show', $post->id)}}" class="d-block mb-4">
                        <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="card-img">
                    </a></div>
                    <h2 class="mb-4"><a href="{{route('show', $post->id)}}">{{$post->title}}</a></h2>
                    <p>{!!mb_strcut($post->body,0,200)!!}{{'...'}}</p>
                    <div class="mb-4 post-meta d-flex align-items-center">
                        <div class="mr-2"><img
                                src="https://eu.ui-avatars.com/api/?name=Boulder+Time&background=a73737&color=050202&font-size=0.33&size=30"
                                class="avatar img-fluid rounded-circle mr-1" alt="BoulderTime">
                        </div>
                        <div><span>By <a href="#">bouldertimeblog</a></span> &mdash; <span>{{$post->created_at}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
