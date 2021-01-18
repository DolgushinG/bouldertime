<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="300">
                <div class="card bg-dark border-dark shadow-soft flex-lg-row p-4"><a
                        href="./blog-post.html" class="col-12 col-lg-6"><img src="../assets/img/blog/image-1.jpg" alt=""
                                                                             class="card-img-top"></a>
                    <div class="card-body py-4 p-lg-5"><a href="./blog-post.html" class="mb-3 d-block"><h2>Designing a
                                dashboard that increases business value</h2></a>
                        <p class="mb-3">Today we are overwhelmed by content, and inspiration can strike anywhere. The
                            point is to collect it and share it in a structured way to inspire your team, client, and
                            users. In this article, I will show you how to design a dashboard.</p>
                        <div class="d-flex align-items-center"><img class="avatar avatar-sm rounded-circle"
                                                                    src="../assets/img/team/profile-picture-1.jpg"
                                                                    alt=""><h6 class="text-muted small ml-2 mb-0">
                                Richard Thomas</h6>
                            <h6 class="text-muted small font-weight-normal mb-0 ml-auto">
                                <time datetime="2019-04-25">21 February, 2019</time>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($posts as $post)

                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 blog-entry" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('show', $post->id)}}" class="d-block mb-4">
                        <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid">
                    </a>
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
        <p>{{$posts->onEachSide(5)->links()}}</p>

    </div>
</div>
