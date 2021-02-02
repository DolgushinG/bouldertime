{{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="dark_block"></div>
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="cvc darkened">
            <img class="d-block img-responsive" src="{{asset('storage/images/slider7.jpg')}}" alt="First slide">
            </div>
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Регистрируйся для оформления подписки</h1>
                    <p> Подписка дает много преимуществ</p>
                    <p><a class="btn btn-lg btn-primary" href="{{route('register')}}" role="button">Регистрация</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="cvc darkened">
            <img class="d-block img-responsive" src="{{asset('storage/images/slider8.jpg')}}" alt="Second slide">
            </div>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Читай посты</h1>
                    <p>Много разной информации, статьи, советов и топов</p>
                    <p><a class="btn btn-lg btn-primary" href="{{route(('posts'))}}" role="button">Подробнее</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="cvc darkened">
            <img class="d-block img-responsive" src="{{asset('storage/images/slider1.jpg')}}" alt="Third slide">
            </div>
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>Наш скалодром</h1>
                <p>Фотографии с мероприятий и скалодрома</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Посмотреть галерею</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}
{{-- <script>
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    $('#myCarousel').carousel ({
        interval: isMobile.any() ? false : 5000
    });
    
</script> --}}
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
                <a href="{{route('register')}}">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
                     <picture>

                      <source srcset="{{asset('storage/images/slider/2000x500/slider1.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider1.jpg')}}" media="(min-width: 769px)">
                       <source srcset="{{asset('storage/images/slider/800x500/slider1.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider1.jpg')}}" alt="responsive image" class="d-block img-fluid">

                    </picture>

                    <div class="carousel-caption">
                        <div>
                           <a href="{{route('register')}}"><span class="btn btn-sm btn-primary">Регистрация</span></a>
                           <p class="text-white">Для возможности комментировать посты</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                         
                      <source srcset="{{asset('storage/images/slider/2000x500/slider1.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider1.jpg')}}" media="(min-width: 769px)">
                       <source srcset="{{asset('storage/images/slider/800x500/slider1.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider1.jpg')}}" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                      <source srcset="{{asset('storage/images/slider/2000x500/slider1.jpg')}}" media="(min-width: 1400px)">
                      <source srcset="{{asset('storage/images/slider/1400x500/slider1.jpg')}}" media="(min-width: 769px)">
                       <source srcset="{{asset('storage/images/slider/800x500/slider1.jpg')}}" media="(min-width: 577px)">
                      <img srcset="{{asset('storage/images/slider/600x500/slider1.jpg')}}" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
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
