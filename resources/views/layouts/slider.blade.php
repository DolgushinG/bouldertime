
  <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel" class="carousel slide carousel-fade" style="height: 100%" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="{{route('posts')}}">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
                     <picture class="darkened">
                      <source srcset="{{asset('storage/images/slider/2000x500/slider1.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider1.jpg')}}" media="(min-width: 769px)">
                       <source srcset="{{asset('storage/images/slider/800x500/slider1.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider1.jpg')}}" alt="responsive image" class="d-block img-fluid">
                    </picture>
                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h1 class="text-white">Блог о скалолазании</h1>
                        </div>
                    </div>
                    
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="{{route('register')}}">
                     <picture class="darkened">
                      <source srcset="{{asset('storage/images/slider/2000x500/slider2.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider2.jpg')}}" media="(min-width: 769px)">
                       <source srcset="{{asset('storage/images/slider/800x500/slider2.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider2.jpg')}}" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                           <a href="{{route('register')}}"><span class="btn btn-lg btn-primary">Регистрация</span></a>
                           <p class="text-white">Для возможности комментировать посты</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="{{route('contact')}}">
                     <picture class="darkened">
                      <source srcset="{{asset('storage/images/slider/2000x500/slider3.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider3.jpg')}}" media="(min-width: 769px)">
                      <source srcset="{{asset('storage/images/slider/800x500/slider3.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider3.jpg')}}" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <a href="{{route('contact')}}"><span class="btn btn-lg btn-primary">Свяжитесь с нами</span></a>
                            <p class="text-white">Для идей постов</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
