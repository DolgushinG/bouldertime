<!-- Sidebar-->
<div class="col-lg-4 mb-4 mb-lg-0">
    <div class="bg-dark rounded-lg box-shadow-lg">
        <div class="px-4 py-4 mb-1 text-center"><img class="d-block rounded-circle mx-auto my-2"
                                                     width="110"
                                                     src="{{asset('images/person_1.jpg')}}"
                                                     alt="Amanda Wilson">
            <h6 class="mb-0 pt-1">Amanda Wilson</h6><span
                class="text-muted font-size-sm">{{'@'.Auth::user()->name}}</span>
        </div>
        <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2"
                                                        href="#account-menu" data-toggle="collapse">
                <i class="fe-menu mr-2"></i>Account menu</a>
        </div>
        <div class="d-lg-block collapse pb-2" id="account-menu">
            <h3 class="d-block bg-dark font-size-sm font-weight-semibold mb-0 px-4 py-3">
                Личные данные
            </h3>
            <a class="d-flex align-items-center nav-link-style px-4 py-3"
               href="{{route('profile')}}">
                <i class="fe-shopping-bag font-size-lg opacity-60 mr-2"></i>Мои данные
                <span class="nav-indicator"></span></a><a
                class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                href="{{route('season_ticket')}}"><i
                    class="fe-dollar-sign font-size-lg opacity-60 mr-2"></i>Абонемент<span
                    class="text-muted font-size-sm font-weight-normal ml-auto">10</span></a><a
                class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                href="{{route('my_comments')}}"><i
                    class="fe-message-square font-size-lg opacity-60 mr-2"></i>Мои комментарии<span
                    class="nav-indicator"></span><span
                    class="text-muted font-size-sm font-weight-normal ml-auto">{{count($outComments)}}</span></a><a
                class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                href="{{route('order_story')}}"><i
                    class="fe-users font-size-lg opacity-60 mr-2"></i>История заказов<span
                    class="text-muted font-size-sm font-weight-normal ml-auto">34</span></a>
            <h3 class="d-block bg-dark font-size-sm font-weight-semibold mb-0 px-4 py-3">
                Настройки</h3>
            <div class="d-flex align-items-center border-top" style="margin-left: 9px"><a
                    class="d-block w-100 nav-link-style px-4 py-3"
                    href="account-notifications.html">Уведомления</a>
                <div class="ml-auto px-3">
                    <div class="custom-control custom-checkbox d-block">
                        <input class="custom-control-input" type="checkbox" id="show-email"
                               checked="">
                        <label class="custom-control-label" for="show-email"></label>
                    </div>
                </div>
            </div>
            @auth
                <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                   href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                        class="fe-log-out font-size-lg opacity-60 mr-2"></i>Выйти</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
</div>
