<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <!-- <h2 class="footer-heading text-uppercase mb-4">About Event</h2> -->
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aliquid quibusdam fugit architecto.</p> -->
            </div>
            <div class="col-md-3 ml-auto">
                <h2 class="footer-heading text-uppercase mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li><a href="{{route('about')}}">О нас</a></li>
                    <!-- <li><a href="speakers.html">Speakers</a></li> -->
                    <li><a href="{{route('posts')}}">Посты</a></li>
                    <li><a href="{{route('contact')}}">Контакты</a></li>
                    <li><a href="{{route('buy_ticket')}}">Цены</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2 class="footer-heading text-uppercase mb-4">Свяжитесь с нами</h2>
                <p>
                    <a href="https://www.instagram.com/bouldertime.ru" class="p-2"><img src="{{asset('/images/instagram_icon.png')}}"></a>
                    <a href="https://t.me/joinchat/Uca55ohoo8wrIyPW" class="p-2"><img src="{{asset('/images/telegram_icon.png')}}"></a>
                    <a href="https://vk.com/bouldertime" class="p-2"><img src="{{asset('/images/vk_icon.png')}}"></a>
                    <a href="https://zen.yandex.ru/id/5fe3c6a19fa5af00d17e527e" class="p-2"><img src="{{asset('/images/yandex.dzen.png')}}"></a>
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="border-top pt-5">
                    <p>
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
