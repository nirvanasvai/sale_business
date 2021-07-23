<header class="header">
    <div class="container">
        <nav class="nav row align-items-center justify-content-xl-between">
            <div class="col-8 col-xl-4 pr-0 pr-xl-5">
                <a href="{{route('home', session('city'))}}">
                    <div class="logo">
                        <img src="/images/logo.svg" alt="logo">
                        <p>
                            Продать, купить
                            готовый бизнес
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-xl-8 d-none d-xl-block">
                <div class="d-flex align-items-center">
                    <ul class="nav-list d-flex align-items-center">
                        <li class="nav-item">
                            <a href="{{route('catalog', session('city'))}}" class="nav-link">Каталог бизнесов</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">О проекте</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Контакты</a>
                        </li>
                    </ul>
                    <div class="user">
                        @guest
                            <a href="{{route('login', session('city'))}}" class="cabinet">
                                <img src="/images/icons/lk.svg" alt="вход в личный кабинет">
                                Личный кабинет
                            </a>

                            @else
                        <a href="{{route('cabinet', session('city'))}}" class="cabinet">
                            <img src="/images/icons/lk.svg" alt="вход в личный кабинет">
                            Личный кабинет
                        </a>
                        @endguest
{{--                        @guest()--}}
{{--                            <a type="button" class="nav-cta" data-toggle="modal" data-target="#exampleModal">--}}
{{--                                Продать бизнес--}}
{{--                            </a>--}}
{{--                                @livewire('login')--}}
{{--                        @else--}}
                        <a href="{{route('publish', session('city'))}}" class="nav-cta">Продать бизнес</a>
{{--                        @endguest--}}
                    </div>
                </div>
            </div>
            <div class="d-xl-none mobile-menu">
                <div class="mobile-menu__head">
                    <div class="logo">
                        <img src="/images/logo.svg" alt="logo">
                        <p>
                            Продать, купить
                            готовый бизнес
                        </p>
                    </div>
                    <div class="close-menu" id="closeMenu">
                        <img src="/images/icons/close-menu.svg" alt="">
                    </div>
                </div>
                <div class="nav-geo">
                    <img src="/images/icons/geo.svg" alt="">
                    Нур-Султан
                </div>
                <ul class="nav-list d-flex align-items-center">
                    <li class="nav-item">
                        <a href="catalog.html" class="nav-link">Каталог бизнесов</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">О проекте</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <a href="cabinet.html" class="cabinet">
                    <img src="/images/icons/lk.svg" alt="вход в личный кабинет">
                    Личный кабинет
                </a>
                <a href="publish.html" class="button-o nav-cta">Продать бизнес</a>
                <div class="nav-social d-flex d-xl-none align-items-center">
                    <a href="#" class="item">
                        <img src="/images/icons/insta.svg" alt="">
                    </a>
                    <a href="#" class="item">
                        <img src="/images/icons/fb.svg" alt="">
                    </a>
                    <a href="#" class="item">
                        <img src="/images/icons/youtube.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="d-block d-sm-block d-xl-none col-4">
                <div class="open-menu" id="openMenu">
                    <img src="/images/icons/menu-btn.svg" alt="">
                </div>
            </div>
        </nav>
    </div>
</header>

