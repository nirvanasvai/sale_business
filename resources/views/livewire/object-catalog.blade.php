<div>
    <div class="container">
        {{--        <div>--}}
        {{--            <p>{{$likeObject[0]->title}}</p>--}}
        {{--        </div>--}}
        <nav aria-label="breadcrumb" class="d-none d-xl-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('catalog')}}">Каталог бизнеса</a></li>
                <li class="breadcrumb-item active" aria-current="page">Магазины, бутики</li>
            </ol>
        </nav>
        <h1 class="page-title">
            {{$object->title}}

        </h1>
        <div class="object-top d-flex justify-content-between align-items-center d-xl-none">
            <div class="price">
                {{number_format($object->price)}} Т
            </div>
            <div class="verification d-flex">
                <div class="verification-item d-flex align-items-center">
                    <img src="/images/icons/check-1.svg" alt="">

                </div>
                <div class="verification-item d-flex align-items-center">
                    <img src="/images/icons/check-2.svg" alt="">

                </div>
                <div class="verification-item d-flex align-items-center">
                    <img src="/images/icons/check-3.svg" alt="">

                </div>
            </div>
        </div>
        <div class="object-sub d-flex d-xl-none">
                    <span class="date">
                        18.09.2020
                    </span>
            <div class="object-views">
                <img src="/images/icons/views.svg" alt="views">
                1025
            </div>
        </div>
        <div class="row justify-content-between align-items-center mb-xl-4 d-none d-xl-flex">
            <div class="col-xl-7">
                <div class="verification d-flex">
                    @if($object->status_1 == 1)
                        <div class="verification-item d-flex align-items-center">
                            <img src="/images/icons/check-1.svg" alt="">
                            Данные проверены
                        </div>
                    @endif
                    @if($object->status_2 == 1)
                        <div class="verification-item d-flex align-items-center">
                            <img src="/images/icons/check-2.svg" alt="">
                            Оборот подтвержден
                        </div>
                    @endif
                    @if($object->status_3 == 1)
                        <div class="verification-item d-flex align-items-center">
                            <img src="/images/icons/check-3.svg" alt="">
                            Горящее предложение
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-5">
                <div class="object-actions d-flex align-items-center justify-content-around">
                    @livewire('favorite-in-object',['object'=>$object])
                    <div class="object-actions__item d-flex align-items-center">
                        <img src="/images/icons/share.svg" alt="">
                        Поделиться объявлением
                    </div>
                </div>
            </div>
        </div>


        <div class="object-main">
            <div class="row justify-content-between align-items-start">
                <div class="col-xl-7">
                    <div class="object-gallery">
                        <div class="object-gallery__slides">
                            <!-- Надо картинки полных размеров, как в превьюхах -->
                            @foreach($catalogs as $item)
                            @foreach($item->imagesPreview as $item)
                                <div class="object-gallery__slide">
                                    <a data-fancybox="gallery" href="/storage/{{$item->url}}">
                                        <img src="/storage/{{$item->url}}" alt="">
                                    </a>
                                </div>
                            @endforeach
                            @endforeach
                        </div>
                        <div class="object-gallery__thumbs slider-nav d-flex align-items-center justify-content-between">
                            @foreach($catalogs as $item)
                                @foreach($item->imagesPreview as $item)
                                    <div class="object-gallery__thumb">
                                        <img src="/storage/{{$item->url}}" alt="">
                                    </div>
                                @endforeach
                            @endforeach


                        </div>
{{--                        <div class="d-block d-xl-none count">--}}

{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="object-info">
                        <div class="d-none d-xl-flex justify-content-between align-items-end mb-3">
                            <div class="price">
                                {{number_format($object->price)}} Т
                            </div>
                            <span class="date">
                                        {{$object->created_at->format('d.m.Y')}}
                                    </span>
                        </div>
                        <div class="specifications">
                            <div class="item profit d-flex justify-content-between">
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    Чистая прибыль:
                                </div>
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    <span>{{number_format($object->metas->keyBy('option')['net_profit']->value ?? 0) }} Т / мес.</span>
                                </div>
                            </div>
                            <div class="item payback d-flex justify-content-between">
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    Окупаемость:
                                </div>
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    <span>{{number_format($object->metas->keyBy('option')['payback']->value ?? 0)}} мес.</span>
                                </div>
                            </div>
                            <div class="item city d-flex justify-content-between">
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    Город:
                                </div>
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    <span>{{$object->city->prepositional}}</span>
                                </div>
                            </div>
                            <div class="item status d-flex justify-content-between">
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    Состояние:
                                </div>
                                <div class="col-xl-4 pl-0 pr-0 pl-xl-0 pr-xl-0">
                                    <span>Действующий</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="object-contact">
                        <div class="legend">Связаться с владельцем</div>
                        <div class="name">{{$object->user->firstname}} {{$object->user->lastname}}</div>
                        <a href="#" class="phone">
{{--                                                        +{{mb_substr($object->user->phone,0,-7)}}--}}
                            {{preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{2})(\d{2}).*~','+7($1) $2-$3-$4', $object->user->phone)}}
{{--                                                        <button class="view-phone" wire:click.prevent="phoneShow()">Показать телефон--}}
{{--                                                        </button>--}}
{{--                                                        @if($show_phone)--}}
{{--                                                            {{preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~','+7($1)-$2-$3', $object->user->phone)}}--}}
{{--                                                        @endif--}}
                        </a>
                        <a href="#" class="button">Написать владельцу</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 d-none d-xl-flex">
                <div class="object-sidebar">
                    <div class="object-sidebar__item">
                        <a href="#characters" class="link">
                            <img src="/images/icons/it-1.svg" alt="">
                            Характеристика бизнеса
                        </a>
                        <a href="#descriptionBusiness" class="link">
                            <img src="/images/icons/it-2.svg" alt="">
                            Описание бизнеса от владельца
                        </a>
                        <a href="#resultsAnalize" class="link">
                            <img src="/images/icons/it-3.svg" alt="">
                            Результаты анализа бизнеса
                        </a>
                        <a href="#checkedBusiness" class="link">
                            <img src="/images/icons/it-4.svg" alt="">
                            Проверка бизнеса на наличие долгов
                        </a>
                        <a href="#testDrive" class="link">
                            <img src="/images/icons/it-5.svg" alt="">
                            Тест-драйв бизнеса
                        </a>
                        <a href="#similarBusiness" class="link">
                            <img src="/images/icons/it-6.svg" alt="">
                            Похожие бизнесы
                        </a>
                    </div>
                    <div class="object-sidebar__item dark">
                        <h3>
                            Получите документы, подтверждающие оборот бизнеса за последние 6 месяцев
                        </h3>
                        <p>
                            Помимо документов из системы финансого учёта владельца бизнеса, вы получите полный отчет о
                            текущем состоянии бизнеса, составленный по 94 кунктам.
                        </p>

                        <a href="#" class="button">
                            Смотреть полный отчет за 1 900 тг
                        </a>
                    </div>
                    <div class="object-sidebar__item">
                        <h3>
                            Проверить благонадежность бизнеса из открытых источников по 74 пунктам
                        </h3>
                        <p>
                            Вы также получите информацию о наличие задолженности бизнеса (ТОО) или его владельца (ИП)
                            перед госудаством и другими контрагентами.
                        </p>
                        <a href="#" class="button">
                            Проверить бизнес за 2 900 тг
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="main-info">
                    <div class="section" id="characters">
                        <h3>Местоположение</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Город
                                    </div>
                                    <p>
                                        {{$object->city->prepositional}}
                                        {{--                                        {{mb_substr($object->city->prepositional,0,-1)}}--}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Район
                                    </div>
                                    <p>
                                        Левый берег
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Адрес
                                    </div>
                                    <p>
                                        ул. Иманова, д. 10
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <h3>Финансы</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Выручка
                                    </div>
                                    <p>
                                        850 000 Т / мес.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Прибыль
                                    </div>
                                    <p>
                                        300 000 Т / мес.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Окупаемость
                                    </div>
                                    <p>
                                        {{number_format($object->metas->keyBy('option')['payback']->value ?? 0)}} мес.
                                    </p>`
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <a href="#">
                                        См. одтверждающие
                                        документы
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="section">
                        <h3>Персонал</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Кол-во работников
                                    </div>
                                    <p>
                                        {{$object->metas->keyBy('option')['employees']->value ?? ''}} человека
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        ФОТ
                                    </div>
                                    <p>
                                        {{number_format($object->metas->keyBy('option')['wages']->value ?? 0)}} Т / мес.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <h3>Помещение</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Статус
                                    </div>
                                    <p>
                                        @if($object->metas->keyBy('option')['owned']->value == 1)
                                            В собственности
                                        @else
                                            В аренде
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Площадь:
                                    </div>
                                    <p>
                                        {{$object->metas->keyBy('option')['total_area']->value ?? ''}} кв. м
                                    </p>
                                </div>
                            </div>
                            @if($object->metas->keyBy('option')['owned']->value == 2)
                                <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                    <div class="item">
                                        <div class="legend">
                                            Аренды
                                        </div>
                                        <p>
                                            {{number_format($object->metas->keyBy('option')['rental_price']->value ?? 0)}} Т
                                            / мес.
                                        </p>
                                    </div>
                                </div>
                            @endif
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Ком. услуги
                                    </div>
                                    <p>
                                        {{number_format($object->metas->keyBy('option')['service_per_month']->value ?? 0)}} Т
                                        / мес.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <h3>Автотизация, контроль</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Фин. учёт
                                    </div>
                                    <p>
                                        1С
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        CRM
                                    </div>
                                    <p>
                                        Битрикс 24
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Видеонаблюдение
                                    </div>
                                    <p>
                                        @if($object->metas->keyBy('option')['video_control']->value == 1)
                                            Есть
                                        @else
                                            Нет
                                        @endif

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <h3>Дополнительная информация</h3>
                        <div class="items-wrap d-flex flex-wrap justify-content-start">
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Возраст бизнеса
                                    </div>
                                    <p>
                                        {{$object->metas->keyBy('option')['age']->value ?? ''}} года
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Правовая форма
                                    </div>
                                    <p>
                                        @if($object->metas->keyBy('option')['age']->value == 1)
                                            ИП
                                        @else
                                            ТОО
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-3 pl-0 pr-0 pl-xl-0">
                                <div class="item">
                                    <div class="legend">
                                        Имущество
                                    </div>
                                    <a href="#">См. список</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section" id="resultsAnalize">
                        <h3>Полный отчет о состоянии бизнеса</h3>
                        <ul>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Потверждение оборотов
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Актульная заполненность штата
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Список собственности
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Список оборудования
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Разрешительные документы
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Потверждение оборотов
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Актульная заполненность штата
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Список собственности
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Список оборудования
                            </li>
                            <li>
                                <img src="/images/icons/lock.svg" alt="">
                                Разрешительные документы
                            </li>
                        </ul>
                        <a href="#" class="button">
                            Смотреть полный отчет за 1 900 тг
                        </a>
                    </div>
                </div>
                <div class="block" id="descriptionBusiness">
                    <h3>Описание бизнеса от владельца</h3>
                    <div class="text">
                        <p>
                            {!! $object->body !!}
                        </p>
                    </div>
                </div>
                <div class="block" id="checkedBusiness">
                    <h3>Благонадежность владельца бизнеса</h3>
                    <ul>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Долги перед гос-вом
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Неоплеченные кредиты
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Госконтракты
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Начало деятельсности
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Разрешительные документы
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Закупки
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Лицензии
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Судебные разбиретельства
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Виды деятельности
                        </li>
                        <li>
                            <img src="/images/icons/lock.svg" alt="">
                            Разрешительные документы
                        </li>
                    </ul>
                    <a href="#" class="button">
                        Проверить бизнес за 2 900 тг
                    </a>
                </div>
                <div class="block" id="testDrive">
                    <h3>Попробовать этот бизнес</h3>
                    <p>
                        Владелец бизнеса дал согласие на личную проверку бизнеса заитересованного покупателя. Это
                        значит, что вы можете участвовать в деятельности бизнеса в течение 7 дней.
                    </p>
                    <div class="block-wrap d-flex flex-wrap justify-content-between align-items-start">
                        <div class="col-xl-5 pr-0 pl-0 pr-xl-0 pl-xl-0">
                            <ul>
                                <li>
                                    <img src="/images/icons/check-elipse.svg" alt="">
                                    Посмотрите бизнес изнутри
                                </li>
                                <li>
                                    <img src="/images/icons/check-elipse.svg" alt="">
                                    Поговорите с владельцем
                                </li>
                                <li>
                                    <img src="/images/icons/check-elipse.svg" alt="">
                                    Оцените риски лично
                                </li>
                                <li>
                                    <img src="/images/icons/check-elipse.svg" alt="">
                                    Поймете, насколько бизнес вам интересен
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-5 pr-0 pl-0 pr-xl-0 pl-xl-0">
                            <div class="object-contact">
                                <div class="legend">Договориться с владельцем</div>
                                <div class="name">{{$object->user->firstname}} {{$object->user->lastname}}</div>
                                <a href="#"
                                   class="phone">{{preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{2})(\d{2}).*~','+7($1) $2-$3-$4', $object->user->phone)}}
                                    {{--                                    <span class="view-phone">Показать телефон</span>--}}
                                </a>
                                <a href="#" class="button">Написать владельцу</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if(isset($category))
                    <div class="similar" id="similarBusiness">
                        <h2>Похожие бизнесы в {{$object->city->prepositional}}</h2>
                        <div class="similar-items">
                            <div class="row similar-list">

                                @foreach($category->getCatalogLikes as $item)
                                    <div class="col-9 col-xl-6">
                                        <div class="object-card">
                                            <div class="object-img">
                                                <img src="/images/objects/object-1.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="object-text">
                                                <h3 class="object-name">
                                                    <a href="">
                                                        {{$item->title}}
                                                    </a>
                                                </h3>
                                                <div
                                                    class="object-price d-block d-xl-none">{{number_format($object->price)}}
                                                    Т
                                                </div>
                                                <div class="object-profit">Прибыль: 250 000 T
                                                    <div>
                                                        <span>Окупаемость: 14 мес.</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="object-footer d-flex justify-content-between align-items-center">
                                                    <div
                                                        class="object-price d-none d-xl-block">{{number_format($object->price)}}
                                                        Т
                                                    </div>
                                                    <div class="add-favorite">
                                                        <a href="#">
                                                            <img src="/images/icons/favorite.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
        <div class="actions-panel" id="actionsPanel">
            <div class="actions-panel__wrap">
                <a href="#" class="call" id="callBtn">
                    Позвонить
                </a>
                <a href="#" class="write">
                    Написать
                </a>
            </div>
        </div>
        <div class="call-modal" id="callModal">
            <h2>
                Телефон
            </h2>
            <div class="close" id="closeCallModal">
                <img src="/images/icons/close-c.svg" alt="">
            </div>
            <a href="tel:+ 7 707 885 88 92">
                <img src="/images/icons/phone-c.svg" alt="">
                + 7 707 885 88 92
            </a>
        </div>
    </div>
</div>
