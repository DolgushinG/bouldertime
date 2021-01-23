<!-- Sidebar-->
<div class="col-lg-4 mb-4 mb-lg-0">
    <div class="bg-dark rounded-lg box-shadow-lg">
        <div class="px-4 py-4 mb-1 text-center">
            @if(Auth::user()->avatar === 'users/default.png')
                <img src="https://eu.ui-avatars.com/api/?name={{ Auth::user()->name }}&background=a73737&color=050202&font-size=0.33&size=150" class="avatar img-fluid rounded-circle mr-1" alt="{{ Auth::user()->name }}">
            @else
                <img src="{{asset(Auth::user()->avatar) }}" class="avatar img-fluid rounded-circle mr-1" width="150" alt="avatar">
            @endif
            <form method="POST" action="{{route('save_avatar')}}" enctype="multipart/form-data">
                @csrf
                    <div class="media-body px-4 pb-4 text-center">
                        <a class="btn btn-edit-comments btn-lg btn-primary" style="margin-top:3rem; margin-left: 4rem;display:block;width:120px; height:30px;" onclick="document.getElementById('avatar').click()">Загрузить</a>
                        <input type='file' id="avatar" name="avatar" style="display:none">
                        <i class="fe-refresh-cw mr-2">
                            <div class="p mb-0 font-size-small text-muted">
                                *jpg,png
                            </div>
                        </i>
                    </div>
                <button class="btn btn-primary mt-3 mt-sm-0" type="submit"><i
                        class="fe-save font-size-lg mr-2"></i>Сохранить аватар
                </button>
            </form>
        </div>
        <div class="d-lg-none px-4 pb-4 text-center"><a class="btn btn-primary px-5 mb-2"
                                                        href="#account-menu" data-toggle="collapse">
                <i class="fe-menu mr-2"></i>Меню профиля</a>
        </div>
        <div class="d-lg-block collapse pb-2" id="account-menu">
            <h3 class="d-block bg-dark font-size-sm font-weight-semibold mb-0 px-4 py-3">
                Личные данные
            </h3>
            <a class="d-flex align-items-center nav-link-style px-4 py-3"
               href="{{route('profile')}}">
                <i class="fe-shopping-bag font-size-lg opacity-60 mr-2"></i>Мои данные
                <span class="nav-indicator"></span></a>
            @foreach(App\Status::all() as $status)
                @if($status->status)
                    <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                       href="{{route('season_ticket')}}"><i
                            class="fe-dollar-sign font-size-lg opacity-60 mr-2"></i>Абонемент<span
                            class="text-muted font-size-sm font-weight-normal ml-auto">10</span></a>
                    <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                       href="{{route('order_story')}}"><i
                            class="fe-users font-size-lg opacity-60 mr-2"></i>История заказов<span
                            class="text-muted font-size-sm font-weight-normal ml-auto">34</span></a>
                @endif
            @endforeach
            <a class="d-flex align-items-center nav-link-style px-4 py-3 border-top"
                href="{{route('my_comments')}}"><i
                    class="fe-message-square font-size-lg opacity-60 mr-2"></i>Мои комментарии<span
                    class="nav-indicator"></span><span
                    class="text-muted font-size-sm font-weight-normal ml-auto">{{count($comments)}}</span></a>

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
