<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="dark_block"></div>
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="cvc darkened">
            <img class="d-block img-responsive" src="{{asset('/images/slider7.jpg')}}" alt="First slide">
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
            <img class="d-block img-responsive" src="{{asset('/images/slider8.jpg')}}" alt="Second slide">
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
            <img class="d-block img-responsive" src="{{asset('/images/slider1.jpg')}}" alt="Third slide">
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
</div>
<script>
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

    $('#carousel').carousel ({
        interval: isMobile.any() ? false : 5000
    });
</script>
