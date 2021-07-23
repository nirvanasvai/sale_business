<div>
    <section class="catalog">
        <div class="container">
            <nav aria-label="breadcrumb" class="d-none d-xl-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Каталог бизнесов</li>
                </ol>
            </nav>
            <div class="catalog-geo">
                <img src="/images/icons/geo-b.svg" alt="">
                Нур-Султан
            </div>
            <h1 class="page-title">
                Выберите готовый бизнес в Астане
            </h1>
            <div class="filters">
                <div class="filters-wrap">
                    <div class="filters-block row justify-content-between align-items-center">
                        <div class="col-xl-3 d-none d-xl-block">
                            <select class="custom-select filters-select" wire:model="city_filter">
                                <option selected wire:model="city_filter.{{$cities}}">Выберите город</option>
                                @foreach($cities as $item)
                                    <option value="{{$item->id}}">{{$item->genitive}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6 pr-2 col-xl-2">
                            <input wire:model="min" type="number" class="form-control" placeholder="мин цена">
                        </div>
                        <div class="col-6 pr-2 col-xl-2">
                            <input wire:model="max" type="number"
                                   class="form-control" placeholder="макс цена">
                        </div>
                        <div class="col-xl-2 pl-2 d-none d-xl-block">
                            <a href="#" class="advanced d-flex align-items-center">
                                <img src="/images/icons/advanced-search.svg" alt="">
                                Расширенный поиск
                            </a>
                        </div>
                    </div>
                    <div class="filters-categories">
                        <p class="filters-subtitle">
                            Категории бизнеса в нашей базе
                        </p>
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="filters-categories__list">
                                    @foreach($categories as $item)
                                        <label for="">{{$item->name}}</label>
                                        <input type="checkbox" wire:model="category_filter"
                                               class="filters-categories__link" value="{{$item->id}}">
                                        {{--                                        <span>({{$item->getCatalog->count()}})</span>--}}
                                    @endforeach
                                    <div class="hd">
                                    </div>
                                    <div class="view-more d-block d-xl-none">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="promotion">
                                    <div class="promotion-head">
                                        <h6>
                                            Цветочный магазин в центре левого берега
                                        </h6>
                                        <span>Реклама</span>
                                    </div>
                                    <p>Прибыльный бизнес в центре столицы с окупаемостью 6 месяцев</p>
                                    <a href="#" class="promotion-link">
                                        <img src="/images/prom-btn.svg" alt="">
                                        Подробнее
                                    </a>
                                    <div class="promotion-img">
                                        <img src="/images/prom-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="filters-subtitle">
                    Найдено {{ $catalogs->total() }} предложений
                </p>
                <div class="filters-sub d-flex align-items-center">
                    <p>Сначала:</p>
                    <label for="new_catalogs-min">новые предложения</label>
                    <input type="checkbox" id="new_catalogs-min" wire:model="new_catalogs"
                           class="filters-sub__link">

                    <label for="price-max" class="">по низкой цене</label>
                    <input type="checkbox" wire:model="min_price" id="price-max" class="filters-sub__link d-none"
                           value="">

                    <label for="price-max">по высокой цене</label>
                    <input type="checkbox" wire:model="max_price" id="price-max" class="filters-sub__link" value="">по
                    высокой цене
                </div>
            </div>
            {{--            <div>@json($min)</div>--}}
            <div class="catalog-list">
                @foreach($catalogs as $item)

                    <div class="object-card d-flex flex-column flex-sm-column flex-xl-row justify-content-xl-between">
                        <div class="object-img d-none d-sm-none d-xl-block">
                            <img src="/storage/{{$item->images->url ?? ''}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-sm-12 col-xl-5 order-2 order-sm-2 order-xl-2 p-0 p-sm-0">
                            <div class="object-text">
                                <h3 class="object-name">
                                    <a href="{{route('object',[session('city'),'slug'=>$item->slug])}}">
                                        {{$item->title}}
                                    </a>
                                </h3>
                                <div class="object-img d-block d-sm-block d-xl-none mb-2">
                                    <img src="/images/objects/object-1.jpg" class="img-fluid" alt="">
                                </div>
                                <p class="object-excerpt d-none d-sm-none d-xl-block">
                                    {!!Str::words($item->body ?? '',25)!!}
                                </p>
                                <div
                                    class="object-price d-xl-block d-none d-sm-none">

                                    {{number_format($item->price )}}
                                    Т
                                </div>
                                <div class="object-profit">Чистая прибыль: <span>{{number_format($item->metas->keyBy('option')['net_profit']->value ?? 0) }} Т / мес.</span>
                                </div>
                                <div class="object-payback">Окупаемость: <span>17 мес.</span></div>
                                <p class="object-excerpt d-block d-sm-block d-xl-none">
                                    {!!Str::words($item->body ?? '',25)!!}
                                </p>
                                <div class="object-footer d-flex justify-content-between">
                                    <div class="object-block d-flex justify-content-between align-items-start">
                                        <div class="object-city">
                                            {{$item->city->genitive}}
                                        </div>
                                        <div class="object-date">
                                            {{$item->created_at->format('Y.m.d')}}
                                        </div>
                                        <div class="object-views">
                                            <img src="/images/icons/views.svg" alt="views">
                                            1025
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-xl-2 order-1 order-sm-1 order-xl-2 p-0 p-sm-0">
                            <div class="object-wrap">
                                <div class="object-price d-xl-none d-block d-sm-block">5 000 000 Т</div>
                                <div class="object-check d-flex">
                                    @if($item->status_1 == 1)
                                        <div class="object-check__item">
                                            <img src="/images/icons/check-1.svg" alt="">
                                        </div>
                                    @endif
                                    @if($item->status_2 == 1)
                                        <div class="object-check__item">
                                            <img src="/images/icons/check-2.svg" alt="">
                                        </div>
                                    @endif
                                    @if($item->status_3 == 1)
                                        <div class="object-check__item">
                                            <img src="/images/icons/check-3.svg" alt="">
                                        </div>
                                    @endif
                                </div>
                                @if (auth()->check())
                                    @if (isset($item->favorite->id))
                                        <div class="add-favorite">
                                            <label for="fov.{{$item->id}}">
                                                <img class="cursor" src="/images/icons/fav-active.svg" alt="">
                                                <input type="checkbox" class="d-none" id="fov.{{$item->id}}"
                                                       value="{{$item->id}}" wire:model="delete">
                                            </label>
                                        </div>
                                    @else
                                        <div class="add-favorite">
                                            <label for="fov.{{$item->id}}">
                                                <img class="cursor" src="/images/icons/heart.svg" alt="">
                                                <input type="checkbox" class="d-none" id="fov.{{$item->id}}"
                                                       value="{{$item->id}}" wire:model="add">
                                            </label>
                                        </div>
                                    @endif
                                @else

                                    <a data-toggle="popover" title="Авторизуйтесь"
                                       data-content="Для того,что бы добавлять в избранное вам необходимо авторизоваться!"><i
                                            class="fas fa-heartbeat"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="py-4">
                    {{$catalogs->links("pagination::bootstrap-4")}}
                </div>

            </div>
        </div>
    </section>
    <section class="business">
        <div class="container">
            <h4>Продажа готового бизнеса на площадке BusinessBuy!</h4>
            <p>
                Разнообразный и богатый опыт укрепление и развитие структуры представляет собой интересный эксперимент
                проверки направлений прогрессивного развития. Таким образом сложившаяся структура организации в
                значительной степени обуславливает создание направлений прогрессивного развития. Идейные соображения
                высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу
                (специалистов) участие в формировании направлений прогрессивного развития.
            </p>
            <p>
                Задача организации, в особенности же начало повседневной работы по формированию позиции обеспечивает
                широкому кругу (специалистов) участие в формировании модели развития. Товарищи! консультация с широким
                активом играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям.
                Идейные соображения высшего порядка, а также постоянное информационно-пропагандистское обеспечение нашей
                деятельности требуют определения и уточнения направлений прогрессивного развития. Задача организации, в
                особенности же укрепление и развитие структуры требуют от нас анализа соответствующий условий
                активизации.
            </p>
            <p>
                Идейные соображения высшего порядка, а также консультация с широким активом играет важную роль в
                формировании новых предложений. Таким образом консультация с широким активом позволяет оценить значение
                форм развития. Не следует, однако забывать, что укрепление и развитие структуры позволяет выполнять
                важные задания по разработке существенных финансовых и административных условий.
            </p>
            <p>
                Задача организации, в особенности же постоянный количественный рост и сфера нашей активности играет
                важную роль в формировании новых предложений. Товарищи! новая модель организационной деятельности
                обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации.
            </p>
            <p>
                Равным образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает
                создание модели развития. Разнообразный и богатый опыт постоянное информационно-пропагандистское
                обеспечение нашей деятельности в значительной степени обуславливает создание форм развития. Товарищи!
                дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание
                соответствующий условий активизации.
            </p>
        </div>
    </section>
</div>
