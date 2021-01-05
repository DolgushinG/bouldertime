<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-3" role="banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-11 col-xl-2">
                    <h1 class="mb-0"><a href="{{route('home')}}" class="text-white h2 mb-0">Bouldertime<span class="text-primary">blog</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <script id="html-1" type="text/template">   // заметьте, что это НЕ javascript!
                                <div class="ds">Текст текст</div>
                                <div class="sdf12">Текст текст</div>
                            </script>

                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li><a href="{{route('about')}}">О нас</a></li>
                            <!-- <li><a href="speakers.html">Speakers</a></li> -->
                            <li><a href="{{route('posts')}}">Посты</a></li>
                            <li><a href="{{route('contact')}}">Контакты</a></li>
                            <li><a href="{{route('buy_ticket')}}">Абонементы</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
</div>
</header>
