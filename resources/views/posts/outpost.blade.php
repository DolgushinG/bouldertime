<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 blog-entry"  data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('show', $post->id)}}" class="d-block mb-4">
                        <img src="{{asset('storage/'.$post->image)}}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="mb-4"><a href="{{route('show', $post->id)}}">{{$post->title}}</a></h2>
                    <p>{!!mb_strcut($post->body,0,200)!!}{{'...'}}</p>
                    <div class="mb-4 post-meta d-flex align-items-center">
                        <div class="mr-2"><img src="https://eu.ui-avatars.com/api/?name=Boulder+Time&background=a73737&color=050202&font-size=0.33&size=30"
                                               class="avatar img-fluid rounded-circle mr-1" alt="BoulderTime">
                            </div>
                        <div><span>By <a href="#">bouldertimeblog</a></span> &mdash; <span>{{$post->created_at}}</span></div>
                    </div>
                </div>
            @endforeach

        </div>
        <p>{{$posts->onEachSide(5)->links()}}</p>

    </div>
</div>
