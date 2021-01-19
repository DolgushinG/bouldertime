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
                    <h1 class="mb-0"><a href="{{route('home')}}" class="text-white h2 mb-0">BOULDER<span class="text-primary">TIME</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation navbar position-relative text-right" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Скалодром
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">
                                        Первый раз на скалодроме?
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            Скалолазание для взрослых
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            График работы
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            Подготовщики трасс
                                        </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Акции
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Система лояльности
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Скидки
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Утренние посещения
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('buy_ticket')}}" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                     Цены
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Цены на скалодром
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       >
                                        Абонементы
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       >
                                        Подарочные сертификаты
                                    </a>
                                </div>
                            </li>
                            <li><a href="{{route('posts')}}">Посты</a></li>
                            <li><a href="{{route('contact')}}">Контакты</a></li>
                            <li><a href="{{route('about')}}">О нас</a></li>

                            @guest
                                @if (Route::has('login'))
                                    <li><a href="{{route('login')}}">Логин</a></li>
                                @endif

                                @if (Route::has('register'))
                                        <li><a href="{{route('register')}}">Регистрация</a></li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="{{route('profile')}}" >
                                        @if(Auth::user()->avatar === 'users/default.png')
                                        <span class="text-white">{{ Auth::user()->email }}</span> <img src="https://eu.ui-avatars.com/api/?name={{ Auth::user()->name }}&background=a73737&color=050202&font-size=0.33&size=30" class="avatar img-fluid rounded-circle mr-1" alt="{{ Auth::user()->name }}">
                                        @else
                                            <span class="text-white">{{ Auth::user()->email }}</span>  <img src="{{asset(Auth::user()->avatar) }}" class="avatar img-fluid rounded-circle mr-1" width="30" alt="avatar">
                                            @endif
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            {{ __('profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <!-- Authentication Links -->

                    </nav>
                </div>
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>
    </header>
</div>


